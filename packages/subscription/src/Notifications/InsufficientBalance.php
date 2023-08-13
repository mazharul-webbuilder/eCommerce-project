<?php

namespace Incevio\Package\Subscription\Notifications;

use App\Models\Shop;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class InsufficientBalance extends Notification implements ShouldQueue
{
    use Queueable;

    public $shop;

    public $expire_date;

    public $tries = 5;

    public $timeout = 20;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Shop $shop, $expire_date)
    {
        $this->shop = $shop;
        $this->expire_date = $expire_date;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
        ->from(get_sender_email(), get_sender_name())
        ->subject(trans('subscription::lang.notifications.insufficient_balance.subject'))
        ->markdown(
            'subscription::mails.insufficient_balance',
            [
                'url' => url('admin/dashboard'),
                'receiver' => $this->shop->getName(),
                'amount' => get_formated_currency($this->shop->wallet->balance, 2),
                'expire_date' => $this->expire_date
            ]
        );
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //'message' => trans('subscription::lang.notifications.insufficient_balance.message', ['amount' => get_formated_currency($this->shop->wallet->balance, 2)]),
        ];
    }
}
