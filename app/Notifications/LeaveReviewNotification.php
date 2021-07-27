<?php

namespace App\Notifications;

use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class LeaveReviewNotification extends Notification
{
    use Queueable;

    protected $reviewId;

    public function __construct($id)
    {
        $this->reviewId = $id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toTelegram($notifiable)
    {
        $url = url('/admin/reviews/' . $this->reviewId);

        return TelegramMessage::create()
            // Optional recipient user id.
            ->to($notifiable->telegram_user_id)
            // Markdown supported.
            ->content("Hello there!\nYour invoice has been *PAID*")

            // (Optional) Blade template for the content.
            // ->view('notification', ['url' => $url])

            // (Optional) Inline Buttons
            ->button('Просмотреть отзыв', $url);
    }
}
