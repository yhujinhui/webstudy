<?php
$conn=mysqli_connect('localhost','root','wlsgml1004','php200330');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <p><a href="index.php">topic</a></p>
    <table border='1px solid gray' >
      <tr>
        <td>id</td>
        <td>name</td>
        <td>prifile</td>
        <td></td>
        <td></td>
      </tr>
      <?php 
      $sql="select * from author";
      $result=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_array($result)){
        $filtered=array(
          'id'=>htmlspecialchars($row['id']),
          'name'=>htmlspecialchars($row['name']),
          'profile'=>htmlspecialchars($row['profile']),
        )
      ?>
      <tr>
        <td><?=$filtered['id']?></td>
        <td><?=$filtered['name']?></td>
        <td><?=$filtered['profile']?></td>
        <td><a href="author.php?id=<?=$filtered['id']?>">update</a></td>
        <td><form action="delete_author_process.php" method='post' onsubmit="if(!confirm('삭제하시겠습니까?')){return false;}">
          <input type="hidden" name='id' value='<?=$filtered['id']?>'>
          <input type="submit" value='delete'>
        </form></td>     
      </tr>        
      <?php } ?>
    </table>
    <?php 
    $escaped=array(
      'name'=>'',
      'profile'=>''
    );
    $label_submit="create author";
    $form_action="create_author_process.php";
    $form_id='';
    if(isset($_GET['id'])){
      $filtered_id=mysqli_real_escape_string($conn,$_GET['id']);
      settype($filtered, 'integer');
      $sql="select * from author where id='{$filtered_id}'";
      $result=mysqli_query($conn,$sql);
      $row=mysqli_fetch_array($result);
      $escaped['name']=htmlspecialchars($row['name']);
      $escaped['profile']=htmlspecialchars($row['profile']);
      $label_submit="Update author";
      $form_action="update_author_process.php";
      $form_id='<input type="hidden" name="id" value="'.$filtered_id.'">';
    }
    ?>
    <form action="<?=$form_action?>" method="post">
        <?=$form_id?>
        <p><input type="text" name="name" placeholder="name" value="<?=$escaped['name']?>"></p>
        <p><textarea name="profile" cols="30" rows="10" placeholder="profile"><?=$escaped['profile']?></textarea></p>
        <p><input type="submit" value="<?=$label_submit?>"></p>
   </form>  
  </body>
</html>
