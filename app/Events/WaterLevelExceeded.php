<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\SensorData;

class WaterLevelExceeded
{
    use Dispatchable, SerializesModels;

    public $sensorData;

    public function __construct(SensorData $sensorData)
    {
        $this->sensorData = $sensorData;
    }

    public function shouldAlert(): bool
    {
        return $this->sensorData->water_level > 50;
    }
}
