<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Cross site scripting</h1>
	<?php 

	echo htmlspecialchars('<script>alert("babo");</script>');
	?>
</body>
</html>