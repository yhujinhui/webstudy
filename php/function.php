<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>function</h1>
	<?php 
	$str=
	'Lorem ipsum dolor sit amet, consectetur adipisicing elit.



	Optio fugit iusto aliquid consequuntur dolores ad, temporibus nulla! Voluptates magnam maiores molestias
	quo voluptate numquam! Quidem culpa commodi minima dolor veritatis.';

	echo $str;
	 ?>

	 <h2>strlen()</h2>
	 <?php 
	  echo strlen($str);
	  ?>
	  <h2>nl2br</h2>
	  <?php 
	  echo nl2br($str);
	   ?>
	   
</body>
</html>