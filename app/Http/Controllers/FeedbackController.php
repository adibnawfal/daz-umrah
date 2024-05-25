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
    $feedback = '';

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
    $userId = auth()->user()->id;

    $this->validate($request, [
      'rating' => ['required', 'integer', 'min:0'],
      'title' => ['required', 'string', 'max:255'],
      'details' => ['required', 'string', 'max:255'],
    ]);

    $feedback->user_id = $userId;
    $feedback->rating = $request['rating'];
    $feedback->title = $request['title'];
    $feedback->details = $request['details'];
    $feedback->save();

    return Redirect::route('feedback')->with('status', 'feedback-submitted');
  }

  /**
   * Display edit feedback page.
   */
  public function getEditFeedback(Request $request, string $id): View
  {
    $feedback = Feedback::find($id);

    return view('feedback.edit-feedback', [
      'user' => $request->user(),
      'feedback' => $feedback,
    ]);
  }

  /**
   * Submit edit feedback form.
   */
  public function putEditFeedback(Request $request, string $id)
  {
    $feedback = Feedback::find($id);

    $this->validate($request, [
      'user_id' => ['required', 'exists:users,id'],
      'rating' => ['required', 'integer', 'min:0'],
      'title' => ['required', 'string', 'max:255'],
      'details' => ['required', 'string', 'max:255'],
    ]);

    $feedback->user_id = $request['user_id'];
    $feedback->rating = $request['rating'];
    $feedback->title = $request['title'];
    $feedback->details = $request['details'];
    $feedback->save();

    return Redirect::route('feedback')->with('status', 'feedback-updated');
  }

  /**
   * Delete feedback.
   */
  public function deleteFeedback(string $id)
  {
    $feedback = Feedback::find($id);
    $feedback->delete();

    return Redirect::route('feedback')->with('status', 'feedback-deleted');
  }
}