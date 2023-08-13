<?php

namespace Incevio\Package\Subscription\Notifications;

use App\Models\Shop;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ExpireSoonNotice extends Notification implements ShouldQueue
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
        ->subject(trans('subscription::lang.notifications.expire.subject', ['day' => $this->expire_date->diffInDays(Carbon::now())]))
        ->markdown(
            'subscription::mails.expire_notice',
            [
                'url' => url('admin/dashboard'),
                'receiver' => $this->shop->getName(),
                'expire_date' => $this->expire_date,
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
            //'expire_date' => trans('subscription::lang.notifications.expire.expire_date', ['date' => $this->expire_date])
        ];
    }
}
