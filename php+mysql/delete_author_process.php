<?php
$conn=mysqli_connect('localhost','root','wlsgml1004','php200330');

settype($_POST['id'], 'integer');
$filtered=array(
	'id'=>mysqli_real_escape_string($conn,$_POST['id'])
);

$sql="
delete
	from topic
	where author_id={$filtered['id']}
";
mysqli_query($conn,$sql);
$sql="
delete
	from author
	where id={$filtered['id']}
";

$result=mysqli_query($conn,$sql);
if($result==false){
  echo '에러';
  echo mysqli_error($conn);
}else{
	header('Location: author.php');
}
?>
