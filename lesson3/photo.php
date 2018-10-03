<?php
/*** update this photo view ***/
include_once("phpFiles/config.php");
include_once("phpFiles/makeBlocks.php");
$name = pathinfo($_GET["src"], PATHINFO_FILENAME);
if (!in_array($name, photoExceptions)) {

	$sql = "UPDATE `photos` SET `views`=`views`+ 1 WHERE name='".$name."'";
	$res = mysqli_query($connect, $sql);
}
// подгружаем и активируем авто-загрузчик Twig-а
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();
 
try {
  // указывае где хранятся шаблоны
  $loader = new Twig_Loader_Filesystem('templates');
 
  // инициализируем Twig
  $twig = new Twig_Environment($loader);
 
  // подгружаем шаблон
  $template = $twig->loadTemplate('v_index.tmpl');
 
  // передаём в шаблон переменные и значения
  // выводим сформированное содержание
  $src = $_GET["src"];
  if ($src !== null){
	  echo $template->render(array("backToGalery" => 'block', 'content' => 'photo.tmpl', 'src' => $src, "newFileName" => $counter));
  }
}catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
 ?>