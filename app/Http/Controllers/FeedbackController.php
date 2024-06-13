<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class FeedbackController extends Controller
{
  /**
   * Display feedback page.
   */
  public function getFeedback(Request $request): View
  {
    if (Auth::User()->role == 'admin' || Auth::User()->role == 'staff') {
      $feedback = Feedback::all();
    } else {
      $feedback = Feedback::where('user_id', Auth::User()->id)->get();
    }

    return view('feedback.view', [
      'user' => $request->user(),
      'feedback' => $feedback,
    ]);
  }

  /**
   * Display give feedback page.
   */
  public function getGiveFeedback(Request $request): View
  {
    return view('feedback.give-feedback', [
      'user' => $request->user(),
    ]);
  }

  /**
   * Submit give feedback form.
   */
  public function postGiveFeedback(Request $request)
  {
    $feedback = new Feedback();

    $this->validate($request, [
      'rating' => ['required', 'integer', 'min:0'],
      'title' => ['required', 'string', 'max:255'],
      'details' => ['required', 'string', 'max:255'],
    ]);

    $feedback->user_id = $request->user()->id;
    $feedback->rating = $request['rating'];
    $feedback->title = $request['title'];
    $feedback->details = $request['details'];
    $feedback->favourite = false;
    $feedback->save();

    return Redirect::route('feedback')->with('status', 'feedback-submitted');
  }

  /**
   * Display update feedback page.
   */
  public function getUpdateFeedback(Request $request, string $id): View
  {
    $feedback = Feedback::findOrFail($id);

    return view('feedback.update-feedback', [
      'user' => $request->user(),
      'feedback' => $feedback,
    ]);
  }

  /**
   * Submit update feedback form.
   */
  public function patchUpdateFeedback(Request $request, string $id)
  {
    $feedback = Feedback::findOrFail($id);

    $this->validate($request, [
      'rating' => ['required', 'integer', 'min:0'],
      'title' => ['required', 'string', 'max:255'],
      'details' => ['required', 'string', 'max:255'],
    ]);

    $feedback->update([
      'rating' => $request['rating'],
      'title' => $request['title'],
      'details' => $request['details'],
    ]);

    return Redirect::route('feedback')->with('status', 'feedback-updated');
  }

  /**
   * Submit reply feedback form.
   */
  public function patchReplyFeedback(Request $request, string $id)
  {
    $feedbackData = Feedback::findOrFail($id);

    $this->validate($request, [
      'reply' => ['nullable', 'string', 'max:255'],
    ]);

    $feedbackData->update(['reply' => $request['reply']]);

    return Redirect::route('feedback')->with('status', 'feedback-replied');
  }

  /**
   * Submit add to favourite form.
   */
  public function patchAddToFavourites(string $id)
  {
    $feedbackData = Feedback::findOrFail($id);

    $feedbackData->update(['favourite' => !$feedbackData->favourite]);

    return Redirect::route('feedback')->with('status', 'feedback-added-to-favourites');
  }

  /**
   * Delete feedback.
   */
  public function deleteFeedback(string $id)
  {
    $feedback = Feedback::findOrFail($id);
    $feedback->delete();

    return Redirect::route('feedback')->with('status', 'feedback-deleted');
  }
}