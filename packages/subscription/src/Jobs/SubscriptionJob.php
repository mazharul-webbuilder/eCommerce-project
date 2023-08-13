<?php

namespace Incevio\Package\Subscription\Jobs;

use App\Models\Shop;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SubscriptionJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $shop;

    protected $notifiable;

    protected $expire_date;

    protected $tries = 5;

    protected $timeout = 20;

    /**
    * Create a new job instance.
    *
    * @return void
    */
    public function __construct(Shop $shop, $notifiable, $expire_date)
    {
        $this->notifiable = $notifiable;
        $this->shop = $shop;
        $this->expire_date = $expire_date;
    }

    /**
    * Execute the job.
    *
    * @return void
    */
    public function handle()
    {
        // Send notifications to shop.
        $this->shop->notify(new $this->notifiable($this->shop, $this->expire_date));
    }
}
