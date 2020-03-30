<?php 

file_put_contents("data/".$_POST['TITLE'], $_POST['TA']);
echo file_get_contents("data/".$_POST['TITLE']);
?>