<?php
$regId ="AAAA4hVRI0w:APA91bHUMV-Rs4x5IOv8tXbN1vR4vXtz1ZARc2W3iQ4jRknlU3QyX8-IrzAizknnjJp82KWCFF9AOTFoWguT44rNVOUtqH7lVFD4v8vGP5rfze2cMqKZBcXR7yIV9ZbNJy_B4gaw1zYB";

// INCLUDE YOUR FCM FILE
include_once 'fcm.php';    

$notification = array();
$arrNotification= array();			
$arrData = array();											
$arrNotification["body"] ="Test by Dhiraj.";
$arrNotification["title"] = "PHP ADVICES";
$arrNotification["sound"] = "default";
$arrNotification["type"] = 1;





$fcm = new FCM();
$result = $fcm->send_notification($regId, $arrNotification,"Android");

// echo "<pre>";
// print_r($arrNotification);

?>