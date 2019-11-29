<?php
  header('content-type:text/html;charset:utf-8');
  include 'inde.php';
  $id=$_POST['id'];
  
  $sql="delete from table1 where id='$id'";
  $res=mysqli_query($connect,$sql);
  if($res){
	  $a=array(
	  'state'=>1,
	  'info'=>'删除成功'
	  );
	  echo json_encode($a);
  }else{
	  $a=array(
	  'state'=>0,
	  'info'=>'删除失败'
	  );
	  echo json_encode($a);
  }
?>