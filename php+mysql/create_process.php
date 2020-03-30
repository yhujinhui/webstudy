<?php
$conn=mysqli_connect('localhost','root','wlsgml1004','php200330');

$filtered=array(
	'title'=>mysqli_real_escape_string($conn,$_POST['title']),
	'description'=>mysqli_real_escape_string($conn,$_POST['description'])
);
$sql="
insert into topic(title,description,created)
values(
  '{$filtered['title']}',
  '{$filtered['description']}',
  now()
  )
";
$result=mysqli_query($conn,$sql);
if($result==false){
  echo '에러';
  echo mysqli_error($conn);
}else{
  echo '성공했습니다.<a href="index.php">돌아가기</a>';
}
?>
