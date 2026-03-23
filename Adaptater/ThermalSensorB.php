<?php
    class ThermalSensorB {
        private $position;

        public function __construct($position) {
            $this->position = $position;
        }

        public function triggerHeatSignature($process) {
            $data = new stdClass();
            $data->sensor = "ThermalSensorB " . $this->position;
            $data->detection = "thermal";
            $data->date = date("F j, Y, g:i a");
            $process($data);
        }
    }
