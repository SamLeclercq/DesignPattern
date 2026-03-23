<?php
    require_once 'Adaptater/ISensor.php';
    require_once 'Adaptater/CameraA.php';
    require_once 'Adaptater/TemperatureSensorA.php';
    require_once 'Adaptater/ThermalSensorB.php';
    require_once 'Adaptater/ThermalSensorBAdapter.php';
    require_once 'Strategy/INotification.php';
    require_once 'Strategy/Email.php';
    require_once 'Strategy/Log.php';
    require_once 'Strategy/Discord.php';
    require_once 'Observer/Observer.php';

    $room = new Observer("Salle test");
    $room->addSensor(new CameraA("Salle test CameraA"));
    $room->addSensor(new TemperatureSensorA("Salle test TemperatureSensorA", 30));
    $room->addSensor(new ThermalSensorBAdapter(new ThermalSensorB("Salle test ThermalSensorBAdapter")));
    $room->addEvent("Alerte", function($message) { (new Email())->notify($message); });
    $room->addEvent("Alerte", function($message) { (new Log())->notify($message); });
    $room->addEvent("Alerte", function($message) { (new Discord())->notify($message); });
    $room->triggerAll();