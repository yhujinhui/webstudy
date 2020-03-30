<?php 
function print_title(){
	if(isset($_GET['id'])){//$_GET['id']값이 세팅이 되어있는가 (''도 O)
		echo 
		htmlspecialchars($_GET['id']);
	}else{
		echo 'Welcome';
	}	
}
function print_list(){
	$list=scandir('./data');
			// 폴더안에 있는 파일 목록을 배열로 반환
			// var_dump($list);
			
	$i=0;
	while($i<count($list)){
		$title=htmlspecialchars($list[$i]);
		if($list[$i]!=='.'){
			if($list[$i]!=='..'){
				echo "<li><a href=\"index.php?id=$title\">$title</a></li>";
			}
		}
		$i++;
	}
}
function print_description(){
	if(isset($_GET['id'])){
		$basename= basename($_GET['id']);
		echo
		htmlspecialchars(file_get_contents("data/".$basename);
	}else{
		echo "Hello,PHP";
	}
	
}
?>