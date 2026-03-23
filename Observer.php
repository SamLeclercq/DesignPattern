<?php
    class Observer {
        public $name;
        private $callbackList = [];

        public function __construct($name) {
            $this->name = $name;
        }

        public function addEvent($event, $callback) {
            $this->callbackList[] = ['event' => $event, 'callback' => $callback];
        }

        public function detect($message) {
            foreach ($this->callbackList as $e) {
                $e['callback']($message);
            }
        }
    }