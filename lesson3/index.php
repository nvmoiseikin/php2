<?php

include_once("phpFiles/config.php");
include_once("phpFiles/makeBlocks.php"); 

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
  echo $template->render(array("backToGalery" => 'none',
							'content' => 'galery.tmpl', 
							'blocks' => $blocks, 
							"newFileName" => $counter)
						);
}catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
?>