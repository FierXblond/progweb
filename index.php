<?php

include 'conn.php';

$useragent = $_SERVER['HTTP_USER_AGENT'];

$token = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#'), 0, 6);

$ipclient = $_SERVER['REMOTE_ADDR'];

$usermail = "andre@gmail.com";


///// insertar datos en mysql

$sql = "INSERT INTO auth (useragent, token, ipclient, usermail) 
VALUES ('$useragent', '$token', '$ipclient', '$usermail')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>