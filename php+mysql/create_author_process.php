<?php
$conn=mysqli_connect('localhost','root','wlsgml1004','php200330');

$filtered=array(
	'name'=>mysqli_real_escape_string($conn,$_POST['name']),
	'profile'=>mysqli_real_escape_string($conn,$_POST['profile']),
);
$sql="
insert into author(name,profile)
values(
  '{$filtered['name']}',
  '{$filtered['profile']}'
  )
";
$result=mysqli_query($conn,$sql);
if($result==false){
  echo '에러';
  echo mysqli_error($conn);
}else{
  echo header('Location: author.php');
}
?>
