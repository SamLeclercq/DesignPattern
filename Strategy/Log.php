<?php
    class Log implements INotification {
        function notify($message) {
            echo "Log";
        }
    }
