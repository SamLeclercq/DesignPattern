<?php
    class Email implements INotification {
        function notify($message) {
            echo "Email";
        }
    }
