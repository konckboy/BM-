<?php
header("Content-type:application/json;charset=UTF-8");

header('Access-Control-Allow-Origin:*');

$link=mysqli_connect('localhost','root','220352','library','3306');
if($link){
	$bookid= $_POST['bookid'];
	mysqli_query($link,'SET NAMES utf8');
	$sql="DELETE FROM books WHERE `books`.`bookid`={$bookid}";
	mysqli_query($link,$sql);
	 echo json_encode(array('删除状态'=>'成功'));
}

mysqli_close($link);
?>