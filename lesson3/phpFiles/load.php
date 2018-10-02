<?php

CONST loadPath = "../images";

include_once("resizeFunc.php");
include_once("config.php");

echo $_POST[counter], $_FILES[photo][name];
$name = $_POST[counter].".".pathinfo($_FILES[photo][name], PATHINFO_EXTENSION);
copy($_FILES[photo][tmp_name], loadPath."/full/000new".$name);

$save = create_thumbnail(loadPath, $name , 300, 225, 460, 225, 300, 465);

$isize = filesize(loadPath."/full/000new".$name);
$sql = "INSERT INTO `photos`(`path`, `weight`, `name`, `type`, `views`) VALUES ('".$save[0]."', '".$isize."', '000new".$_POST[counter]."', '".$save[1]."', '1')";
echo $sql;
$res = mysqli_query($connect, $sql);

echo "<script>document.location.replace('../index.php');</script>";
?>