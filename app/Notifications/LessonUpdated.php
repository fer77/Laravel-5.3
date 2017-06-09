<?php

namespace App\Notifications;

use App\Notifications\LessonUpdated;
use App\Notifications\SubscriptionCanceled;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class LessonUpdated extends Notification
{
    use Queueable;

    protected $lesson;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($lesson)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return $this->lesson->toArray();
    }
}