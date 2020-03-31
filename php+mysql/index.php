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
$delete='';
$author='';
if(isset($_GET['id'])){

  $filtered_id=mysqli_real_escape_string($conn,$_GET['id']);
  $sql="select * from topic left join author on topic.author_id=author.id where topic.id={$filtered_id}";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result);
  $article['title']=htmlspecialchars($row['title']);
  $article['description']=htmlspecialchars($row['description']);
  $article['name']=htmlspecialchars($row['name']);
  $update='<a href="update.php?id='.$_GET['id'].'">update</a>';
  $delete='
    <form action="delete_process.php" method="post">
      <input type="hidden" name="id" value="'.$_GET['id'].'">
      <input type="submit" value="delete">
    </form>
  ';
  $author="<p>by {$article['name']}</p>";
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
    <p>
      <a href="author.php">author</a>
    </p>
    <ol>
      <?=$list?>
    </ol>
    
    <a href="create.php">create</a>
    <?=$update?>
    <?=$delete?>
    <h2><?=$article['title']?></h2>
    <p>
      <?=$article['description']?>
    </p>
    <?=$author?>
  </body>
</html>
