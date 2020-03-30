<?php
$conn=mysqli_connect('localhost','root','wlsgml1004','php200330');
$sql="select * from topic";
$result=mysqli_query($conn,$sql);
$list='';

while($row=mysqli_fetch_array($result)){
  $escaped_title=htmlspecialchars($row['title']);
  $list=$list."<li><a href=\"index.php?id={$row['id']}\">{$escaped_title}</a></li>";
}

$article=array(
  'title'=>'Welcome',
  'description'=>'Hello,web'
  );

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?=$list?>
    </ol>
    <form action="create_process.php" method="post">
        <p>
          <input type="text" name="title" placeholder="title">
        </p>
        <p>
          <textarea name="description" placeholder="description" rows="8" cols="80"></textarea>
        </p>
        <p>
          <input type="submit">
        </p>
    </form>
    </p>
  </body>
</html>
