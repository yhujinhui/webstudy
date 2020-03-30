<?php 
file_put_contents("data/".$_POST['Title'], $_POST['Description']);
header('Location: ./index.php?id='.$_POST['Title']);
?>