<?php
    class ThermalSensorBAdapter implements ISensor {
        private $thermalSensorB;

        public function __construct(ThermalSensorB $thermalSensorB) {
            $this->thermalSensorB = $thermalSensorB;
        }

        public function onDetect($callback) {
            $this->thermalSensorB->triggerHeatSignature(function($data) use ($callback) {
                $message = "Sensor : " . $data->sensor . " Detection : " . $data->detection . " date : " . $data->date;
                $callback($message);
            });
        }
    }