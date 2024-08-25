<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Ads;

class DeactivateExpiredAds implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $Ads = Ads::where('status', 'active')
            ->whereRaw('created_at + interval duration day <= now()')
            ->get();

        foreach ($Ads as $Ad) {
            $Ad->update(['status' => 'inactive']);

            $this->sendPusherEvent($Ad);
        }
    }

    protected function sendPusherEvent($Ad)
    {
        $options = [
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'useTLS' => true,
        ];

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $pusher->trigger('hiiba-development', 'ad-deactivated', ['ad_id' => $ad->id]);
    }
}
