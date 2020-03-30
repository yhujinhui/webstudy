<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Array</h1>
	<?php 
	$cowokers=array('jinhee','jinhee2','jinhee3');
	echo $cowokers[0].'<br>';
	echo $cowokers[1].'<br>';

	echo count($cowokers);
	var_dump(count($cowokers));
	array_push($cowokers, 'jinhee4');
	var_dump(count($cowokers));
	 ?>
</body>
</html>