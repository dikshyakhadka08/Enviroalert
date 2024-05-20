<?php

namespace App\Listeners;

use App\Events\WaterLevelExceeded;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Twilio\Rest\Client;

class SendFloodAlert implements ShouldQueue
{
    public function handle(WaterLevelExceeded $event)
    {
        $sensorData = $event->sensorData;

        // Check if the water level exceeds the threshold
        if ($sensorData->water_level > 5000000) {
            // Send SMS alert
            $sid = env('TWILIO_SID');
            $token = env('TWILIO_TOKEN');
            $twilioPhoneNumber = env('TWILIO_PHONE_NUMBER');
            $recipientPhoneNumber = '+9779862409992'; // Replace with recipient's phone number

            $twilio = new Client($sid, $token);

            $message = "🚨 FLOOD WARNING ALERT 🚨\nWater level is Rising. Please take immediate precautions, stay safe & avoid flooded areas.\n-EnviroAlert";

            $twilio->messages->create(
                $recipientPhoneNumber,
                [
                    "from" => $twilioPhoneNumber,
                    "body" => $message
                ]
            );
        }
    }
}
