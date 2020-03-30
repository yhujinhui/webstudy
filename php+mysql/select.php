<?php
$conn=mysqli_connect('localhost','root','wlsgml1004','php200330');
echo '<h1>single row</h1>';
$sql="select * from topic where id=8 limit 1000";//1000개 이상은 가져오지
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo '<h2>'.$row['title'].'</h2>';
echo $row['description'];

$sql="select * from topic limit 1000";//1000개 이상은 가져오지
$result=mysqli_query($conn,$sql);
echo '<h1>multi row</h1>';
while($row=mysqli_fetch_array($result)){//null 혹은 false가 아닌 이상 true 반환
  echo '<h2>'.$row['title'].'</h2>';
  echo $row['description'];
}
?>
