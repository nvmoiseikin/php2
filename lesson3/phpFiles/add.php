<?php
if ($handle = opendir('images/typeA1')) {
    while (false !== ($file = readdir($handle))) { 
        if ($file != "." && $file != "..") { 
            $types[1]++; $fileA1[] = $file; 
        } 
    }
    closedir($handle); 
}

if ($handle = opendir('images/typeA2')) {
    while (false !== ($file = readdir($handle))) { 
        if ($file != "." && $file != "..") { 
            $types[2]++; $fileA2[] = $file; 
        } 
    }
    closedir($handle); 
}

if ($handle = opendir('images/typeA3')) {
    while (false !== ($file = readdir($handle))) { 
        if ($file != "." && $file != "..") { 
            $types[3]++; $fileA3[] = $file; 
        } 
    }
    closedir($handle); 
}

$j = 3;
if ($handle = opendir('images/typeA'.$j)) {
    while (false !== ($file = readdir($handle))) { 
        if ($file != "." && $file != "..") { 
		$ipath = 'images/typeA'.$j."/".$file;
		$isize = filesize($ipath);
		$iviews = rand(10,100);
		$iname = pathinfo($file, PATHINFO_FILENAME);
            $iquery="INSERT INTO `photos` (path, weight, name, type, views) VALUES('".$ipath."', '".$isize."', '".$iname."', 'A".$j."', '".$iviews."')";
			echo $iquery."<br>";
			$res = mysqli_query($connect, $iquery);
			echo $res."<br>";
        } 
    }
    closedir($handle); 
}
if ($x === 1 || $x === -1){
		$str .= "<a target='_blank' href='images/full/".$fileA1[$iter1]."' class='typeA1 type' ><img src=\"images/typeA1/".$fileA1[$iter1]."\"></a>"; $iter1++;
		$str .= "<a target='_blank' href='images/full/".$fileA1[$iter1]."' href='#' class='typeA1 type'><img src=\"images/typeA1/".$fileA1[$iter1]."\"></a>";  $iter1++;
		$str .="<a target='_blank' href='images/full/".$fileA1[$iter1]."' href='#' class='typeA1 type'><img src=\"images/typeA1/".$fileA1[$iter1]."\"></a>";  $iter1++;
		$str .="<a target='_blank' href='images/full/".$fileA1[$iter1]."' href='#' class='typeA1 type nom'><img src=\"images/typeA1/".$fileA1[$iter1]."\"></a>";  $iter1++;
	}
	if ($x === 2 || $x === -1){
		$str .="<a target='_blank' href='images/full/".$fileA1[$iter1]."' href='#' class='typeA4 type'><img src=\"images/typeA1/".$fileA1[$iter1]."\"></a>"; $iter1++;
		$str .="<a target='_blank' href='images/full/".$fileA3[$iter3]."' href='#' class='typeA3 type'><img src=\"images/typeA3/".$fileA3[$iter3]."\"></a>"; $iter3++;
		$str .="<a target='_blank' href='images/full/".$fileA3[$iter3]."' href='#' class='typeA3 type nom'><img src=\"images/typeA3/".$fileA3[$iter3]."\"></a>"; $iter3++;
	}
	if ($x === 3 || $x === -1){
		$str .="<a target='_blank' href='images/full/".$fileA3[$iter3]."' href='#' class='typeA3 type'><img src=\"images/typeA3/".$fileA3[$iter3]."\"></a>"; $iter3++;
		$str .="<a target='_blank' href='images/full/".$fileA2[$iter2]."' href='#' class='typeA2 type'><img src=\"images/typeA2/".$fileA2[$iter2]."\"></a>"; $iter2++;
		$str .="<a target='_blank' href='images/full/".$fileA2[$iter2]."' href='#' class='typeA2 type nom'><img src=\"images/typeA2/".$fileA2[$iter2]."\"></a>"; $iter2++;
		$str .="<a target='_blank' href='images/full/".$fileA2[$iter2]."' href='#' class='typeA2 type'><img src=\"images/typeA2/".$fileA2[$iter2]."\"></a>"; $iter2++;
		$str .="<a target='_blank' href='images/full/".$fileA2[$iter2]."' href='#' class='typeA2 type nom'><img src=\"images/typeA2/".$fileA2[$iter2]."\"></a>"; $iter2++;
	}
	if ($x === 4 || $x === -1){
		$str .="<a target='_blank' href='images/full/".$fileA3[$iter3]."' href='#' class='typeA3 type right nom'><img src=\"images/typeA3/".$fileA3[$iter3]."\"></a>"; $iter3++;
		$str .="<a target='_blank' href='images/full/".$fileA3[$iter3]."' href='#' class='typeA3 type right'><img src=\"images/typeA3/".$fileA3[$iter3]."\"></a>"; $iter3++;
		$str .="<a target='_blank' href='images/full/".$fileA1[$iter1]."' href='#' class='typeA1 type right'><img src=\"images/typeA1/".$fileA1[$iter1]."\"></a>"; $iter1++;
		$str .="<a target='_blank' href='images/full/".$fileA1[$iter1]."' href='#' class='typeA1 type right'><img src=\"images/typeA1/".$fileA1[$iter1]."\"></a>"; $iter1++;
		$str .="<a target='_blank' href='images/full/".$fileA1[$iter1]."' href='#' class='typeA1 type right'><img src=\"images/typeA1/".$fileA1[$iter1]."\"></a>"; $iter1++;
		$str .="<a target='_blank' href='images/full/".$fileA1[$iter1]."' href='#' class='typeA1 type right'><img src=\"images/typeA1/".$fileA1[$iter1]."\"></a>"; $iter1++;
	}
	if ($x === 5 || $x === -1){
		$str .="<a target='_blank' href='images/full/".$fileA1[$iter1]."' href='#' class='typeA1 type'><img src=\"images/typeA1/".$fileA1[$iter1]."\"></a>"; $iter1++;
		$str .="<a target='_blank' href='images/full/".$fileA2[$iter2]."' href='#' class='typeA2 type'><img src=\"images/typeA2/".$fileA2[$iter2]."\"></a>"; $iter2++;
		$str .="<a target='_blank' href='images/full/".$fileA2[$iter2]."' href='#' class='typeA2 type nom'><img src=\"images/typeA2/".$fileA2[$iter2]."\"></a>"; $iter2++;
	}
	if ($x === 6 || $x === -1){
		$str .="<a target='_blank' href='images/full/".$fileA3[$iter3]."' href='#' class='typeA3 type'><img src=\"images/typeA3/".$fileA3[$iter3]."\"></a>"; $iter3++;
		$str .="<a target='_blank' href='images/full/".$fileA3[$iter3]."' href='#' class='typeA3 type'><img src=\"images/typeA3/".$fileA3[$iter3]."\"></a>";  $iter3++;
		$str .="<a target='_blank' href='images/full/".$fileA3[$iter3]."' href='#' class='typeA3 type'><img src=\"images/typeA3/".$fileA3[$iter3]."\"></a>";  $iter3++;
		$str .="<a target='_blank' href='images/full/".$fileA3[$iter3]."' href='#' class='typeA3 type nom'><img src=\"images/typeA3/".$fileA3[$iter3]."\"></a>";  $iter3++;
	}
	if ($x === 7){
		$str .= "<a target='_blank' href='images/full/".$fileA1[$iter1]."' href='#' class='typeA4 type right nom'><img src=\"images/typeA1/".$fileA1[$iter1]."\"></a>"; $iter1++;
		$str .= "<a target='_blank' href='images/full/".$fileA1[$iter1]."' href='#' class='typeA1 type right'><img src=\"images/typeA1/".$fileA1[$iter1]."\"></a>"; $iter1++;
		$str .= "<a target='_blank' href='images/full/".$fileA1[$iter1]."' href='#' class='typeA1 type right'><img src=\"images/typeA1/".$fileA1[$iter1]."\"></a>";  $iter1++;
		$str .="<a target='_blank' href='images/full/".$fileA1[$iter1]."' href='#' class='typeA1 type right'><img src=\"images/typeA1/".$fileA1[$iter1]."\"></a>";  $iter1++;
		$str .="<a target='_blank' href='images/full/".$fileA1[$iter1]."' href='#' class='typeA1 type right'><img src=\"images/typeA1/".$fileA1[$iter1]."\"></a>";  $iter1++;
	}
