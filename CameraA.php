<?php
    class CameraA implements ISensor {
        private $location;

        public function __construct($location) {
            $this->location = $location;
        }

        public function onDetect($callback) {
            $message = "Message d'alerte camera A localisé : " . $this->location;
            $callback($message);
        }
    }