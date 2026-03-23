<?php
    class TemperatureSensorA implements ISensor {
        private $location;
        private $threshold;

        public function __construct($location, $threshold) {
            $this->location = $location;
            $this->threshold = $threshold;
        }

        public function onDetect($callback) {
            $message = "Message d'alerte à : " . $this->location . ", Température : " . $this->threshold;
            $callback($message);
        }
    }