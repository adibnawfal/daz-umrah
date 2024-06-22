<?php

namespace App\Notifications;

use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ReservationNotification extends Notification
{
  use Queueable;

  private $reservation;

  /**
   * Create a new notification instance.
   */
  public function __construct(Reservation $reservation)
  {
    $this->reservation = $reservation;
  }

  /**
   * Get the notification's delivery channels.
   *
   * @return array<int, string>
   */
  public function via(object $notifiable): array
  {
    return ['mail'];
  }

  /**
   * Get the mail representation of the notification.
   */
  public function toMail(object $notifiable): MailMessage
  {
    return (new MailMessage)
      ->subject(__('Dhiya Az Zahra - Umrah Reservation Status Updated'))
      ->line(__('Dear :first_name :last_name,', ['first_name' => $this->reservation->user->first_name, 'last_name' => $this->reservation->user->last_name]))
      ->line(__('We hope this email finds you well. We are writing to inform you that the status of your Umrah reservation has been change to \':status\'. Please find the details of your reservation below:', ['status' => $this->reservation->status]))
      ->action('Umrah Reservation Details', url('/umrah/reservation'));
  }

  /**
   * Get the array representation of the notification.
   *
   * @return array<string, mixed>
   */
  public function toArray(object $notifiable): array
  {
    return [
      //
    ];
  }
}