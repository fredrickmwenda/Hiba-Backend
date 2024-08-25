<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Notifications\Messages\BroadcastMessage;

class UnifiedNotification extends Notification
{

    protected $notificationData;
    protected $senderType;

    public function __construct($notificationData, $senderType)
    {
        $this->notificationData = $notificationData;
        $this->senderType = $senderType;
    }

    public function via($notifiable): array
    {
        return ['broadcast'];
    }

    public function toBroadcast($notifiable) : BroadcastMessage
    {
        try{
            if ($this->senderType === 'company') {
                // Logic to determine if the notification should be broadcasted to this company's users
                // If yes, return a BroadcastMessage instance
                return new BroadcastMessage([
                    'data' => $this->notificationData,
                ]);
            } else if ($this->senderType === 'app') {
                // Logic to broadcast the notification to all users
                // Return a BroadcastMessage instance
                return new BroadcastMessage([
                    'data' => $this->notificationData,
                ]);
            }
        } catch(\Exception $e){
            console.log($e);
        }
    }
  
}
