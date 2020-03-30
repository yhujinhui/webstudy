
<?php
$conn=mysqli_connect("localhost","root","wlsgml1004","php200330");//데이터베이스 서버에 php가 접속하는 함수
$sql="insert into topic(title,description,created)values('Mysql','Mysql is..',now())";
$result=mysqli_query($conn,$sql);//실패했을때 false 반환

if($result==false){
  echo mysqli_error($conn);
}
?>
