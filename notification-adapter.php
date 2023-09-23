<?php
Interface Notification{
    public function send();
}
Class Email implements Notification{
    public function send(){
        echo "\nSending Email...\n";
    }
}

Class Sms implements Notification{
    public function send(){
        echo "\nSending Sms...\n";
    }
}
Class Firebase{
    public function login(){
        echo "\nLogging In To Firebase...\n";
    }
    public function pushNotification(){
        echo "\nSending Push Notification...\n";
    }

    public function logout(){
        echo "\nLogout to Firebase...\n";
    }
}
Class PushNotificationAdapter implements Notification{
    public function send(){
        $firebase= new Firebase();
        $firebase->login();
        $firebase->pushNotification();
        $firebase->logout();
    }
}

function sendNotification(Notification $notification){
    $notification->send();
}

sendNotification(New Email());
sendNotification(New Sms());
sendNotification(New PushNotificationAdapter());