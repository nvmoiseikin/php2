<?php
include_once("config.php");

$sql = "INSERT INTO `comments`(`name`, `email`, `head`, `message`, `quality`) VALUES ('".mysqli_real_escape_string($connect,$_POST['name'])."', '".mysqli_real_escape_string($connect,$_POST['email']);
$sql .="', '".mysqli_real_escape_string($connect,$_POST['head'])."', '".mysqli_real_escape_string($connect,$_POST['message'])."', '".mysqli_real_escape_string($connect,$_POST['quality'])."')";
$res = mysqli_query($connect, $sql);

echo "<script>document.location.replace('contacts.php');</script>";