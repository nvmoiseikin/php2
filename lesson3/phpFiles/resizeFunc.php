<?php
function create_thumbnail($path, $save, $width1, $height1, $width2, $height2, $width3, $height3) {
	$info = getimagesize($path."/full/000new".$save); //получаем размеры картинки и ее тип
	$size = array($info[0], $info[1]); //закидываем размеры в массив
	//В зависимости от расширения картинки вызываем соответствующую функцию
	if ($info['mime'] == 'image/png') {
		$src = imagecreatefrompng($path."/full/000new".$save); //создаём новое изображение из файла
	} else if ($info['mime'] == 'image/jpeg') {
		$src = imagecreatefromjpeg($path."/full/000new".$save);
	} else if ($info['mime'] == 'image/gif') {
		$src = imagecreatefromgif($path."/full/000new".$save);
	} else {
		return false;
	}
	$src_aspect = $size[0] / $size[1];//отношение ширины к высоте исходника
	$aspect = [$width1/$height1,$width2/$height2,$width3/$height3]; //выбор типа обрезки
	if ($src_aspect > ($aspect[1] + ($aspect[2] - $aspect[1])/2)) { $width = $width2; $height = $height2; $save = $path."/typeA2/000new".$save; $type = "A2";}
	elseif ($src_aspect < ($aspect[1] - ($aspect[1] - $aspect[3])/2)) { $width = $width3; $height = $height3; $save = $path."/typeA3/000new".$save; $type = "A3";}
	else { $width = $width1; $height = $height1; $save = $path."/typeA1/000new".$save; $type = "A1";}
	
	$thumb = imagecreatetruecolor($width, $height);//возвращает идентификатор изображения, представляющий черное изображение заданного размера
	 
	$thumb_aspect = $width / $height; //отношение ширины к высоте аватарки
	if($src_aspect < $thumb_aspect) { //узкий вариант (фиксированная ширина) 
		$scale = $width / $size[0]; $new_size = array($width, $width / $src_aspect); 
		$src_pos = array(0, ($size[1] * $scale - $height) / $scale / 2); //Ищем расстояние по высоте от края картинки до начала картины после обрезки 
	}
	else if ($src_aspect > $thumb_aspect) {
		//широкий вариант (фиксированная высота)
		$scale = $height / $size[1];
		$new_size = array($height * $src_aspect, $height);
		$src_pos = array(($size[0] * $scale - $width) / $scale / 2, 0); //Ищем расстояние по ширине от края картинки до начала картины после обрезки
	} else {
		//другое
		$new_size = array($width, $height);
		$src_pos = array(0,0);
	}
	$new_size[0] = max($new_size[0], 1); 
	$new_size[1] = max($new_size[1], 1); 
	imagecopyresampled($thumb, $src, 0, 0, $src_pos[0], $src_pos[1], $new_size[0], $new_size[1], $size[0], $size[1]);
	//Копирование и изменение размера изображения с ресемплированием
	if($save === false) {
		return imagejpeg($thumb); //Выводит JPEG/PNG/GIF изображение
	} else {
		 imagepng($thumb, $save);//Сохраняет JPEG/PNG/GIF изображение
		 return [$save, $type];
	}
}
?>