<?php 
rename('data/'.$_POST['old_Title'],'data/'.$_POST['Title']);
file_put_contents('data/'.$_POST['Title'], $_POST['Description']);
header('Location: ./index.php?id='.$_POST['Title']);
?>