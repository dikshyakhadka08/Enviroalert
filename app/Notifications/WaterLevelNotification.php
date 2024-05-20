<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\SmsMessage;

class WaterLevelNotification extends Notification
{
    public function via($notifiable)
    {
        return ['sms'];
    }

    public function toSms($notifiable)
    {
        return (new SmsMessage())
            ->content('Water level is above the threshold. Flood alert!');
    }
}
