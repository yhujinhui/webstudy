<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>
	<h1>WEB</h1>
	<ol>
		<li><a href="index.php?id=HTML">HTML</a></li>
		<li><a href="index.php?id=CSS">CSS</a></li>
		<li><a href="index.php?id=JavaScript">JavaScript</a></li>
	</ol>
	<h2>
		<?php 
		echo $_GET['id'];
		 ?>
	</h2>
	<?php 
	echo file_get_contents("data/".$_GET['id']);
	 ?>
</body>
</html>