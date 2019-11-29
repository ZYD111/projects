<?php
header('content-type:text/html;charest:utf-8');

include './inde.php';
$key=$_POST['key'];
$s=$_POST['s'];

$sql="select * from table1 where $s like '%$key%'";
$res=mysqli_query($connect,$sql);

$arrer=array();
while($arr=mysqli_fetch_assoc($res)){
	array_push($arrer,$arr);
}
if($arrer){
	echo json_encode($arrer);
}else{
	$a=array(
	'state'=>1,
	'info'=>'未搜索到相关内容'
	);
	echo json_encode($a);
}
?>