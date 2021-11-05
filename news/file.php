<?php 
	$cat = $_GET['cat'];
	$str = file_get_contents("https://www.tert.am/am/news/$cat");
	// file_put_contents("data.php", $str);
	// echo $str;

	#https://www.tert.am/am/news/2021/11/05/inflation/3721571
	$reg = '|/am/news/\d{4}/\d{2}/\d{2}/[a-zA-Z0-9\-]+/\d{7}|';
	preg_match_all($reg, $str, $matches);
	
	// print_r($matches);
	for ($i=0; $i < count($matches[0]); $i++) { 
		// code...
	
	$url = "https://www.tert.am".$matches[0][$i];
	// echo $url;

	$str = file_get_contents($url);
	file_put_contents("data.php", $str);
	// echo $str;	
	$reg2 = '|(?<=<title>).+(?=</title>)|';
	preg_match($reg2, $str, $matches2);
	echo "<h1>".$matches2[0]."</h1>";
	echo "<br>";
	$str = strstr($str,"list__img-box");
	#/news_images/1241/3721571_1/e_40niducaclnu1.thumb.jpg"
	$reg3 = '|/news_images/[a-zA-Z0-9_\.\-/]+|';
	preg_match($reg3, $str, $matches3);
	$src  = "https://www.tert.am".$matches3[0];
	echo "<img src = '$src' width=300>";
	$str = strstr($str, "news-content-container");
	$reg4 = '|(?<=<p>).+(?=</p>)|';
	preg_match($reg4, $str, $matches4);
	echo "<br>";
	echo $matches4[0];
}
 ?>