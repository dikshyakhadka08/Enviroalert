<?php
    namespace App\Http\Controllers;

    use App\Models\SensorData;
    use Illuminate\Http\Request;
    
    class SensorDataController extends Controller
    {
        public function fetch()
        {
            // Retrieve the latest sensor data ordered by created_at
            $latestData = SensorData::latest('created_at')->first();
    
            if ($latestData) {
                // Log the water level to verify it is being fetched correctly
                \Log::info('Water Level: ' . $latestData->water_level);
    
                // Return the latest sensor data as JSON response
                return response()->json($latestData);
            }
    
            return response()->json(['error' => 'No data found'], 404);
        }
    }
    
        // private function sendTwilioAlert()
        // {
        //     // Check if the last alert message was sent within the last 20 minutes
        //     if (!Cache::has('last_alert_sent') || Cache::get('last_alert_sent') < now()->subMinutes(20)) {
        //         $sid = env('TWILIO_SID');
        //         $token = env('TWILIO_TOKEN');
        //         $twilioPhoneNumber = env('TWILIO_PHONE_NUMBER');
        //         $recipientPhoneNumber = '+9779862409992'; // Replace with recipient's phone number
    
        //         $twilio = new Client($sid, $token);
        //         $message = "🚨 FLOOD WARNING ALERT 🚨\nWater level is Rising. Please take immediate precautions, stay safe & avoid flooded areas.\n-EnviroAlert";
        //         $twilio->messages->create($recipientPhoneNumber, ["from" => $twilioPhoneNumber, "body" => $message]);
    
        //         // Update last alert sent time in cache
        //         Cache::put('last_alert_sent', now());
        //     }
        // }
    //}
    
    