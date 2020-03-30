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
$update='';
if(isset($_GET['id'])){

  $filtered_id=mysqli_real_escape_string($conn,$_GET['id']);
  $sql="select * from topic where id={$_GET['id']}";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result);
  $article['title']=htmlspecialchars($row['title']);
  $article['description']=htmlspecialchars($row['description']);
  $update='<a href="update.php?id='.$_GET['id'].'">update</a>';
}

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
    <form action="update_process.php" method="post">
      <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <p>
          <input type="text" name="title" placeholder="title" value="<?=$article['title']?>">
        </p>
        <p>
          <textarea name="description" placeholder="description" rows="8" cols="80"><?=$article['description']?></textarea>
        </p>
        <p>
          <input type="submit">
        </p>
    </form>
    </p>
  </body>
</html>
