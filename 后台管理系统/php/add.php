<?php
  header('content-type:text/html;charset:utf-8');
  include './inde.php';
  $stu_Id=$_POST['stuIdval'];
  $stu_Name=$_POST['stuNameval'];
  $stu_Age=$_POST['stuAgeval'];
  $stu_Sex=$_POST['stuSexval'];
  $stu_Magor=$_POST['stuMagorval'];
  
  $sql="select * from table1 where stuid='$stu_Id'";
  $res=mysqli_query($connect,$sql);
  $arr=mysqli_fetch_assoc($res);
  
  if($arr){
	  $a=array(
	    'state'=>2,
		'info'=>'学号重复'
	  );
	  echo json_encode($a);
  }else{
	  // INSERT INTO `table1` (`id`, `stuid`, `name`, `sex`, `old`, `class`) VALUES (NULL, '173056', 'zhu', '男', '18', 'web');
  $sql1="insert into table1(stuid,name,sex,old,class) values($stu_Id,'$stu_Name','$stu_Sex',$stu_Age,'$stu_Magor')";
  
  $res1=mysqli_query($connect,$sql1);

  if($res1){
	  $a=array(
	   'state'=>1,
	   'info'=>'添加成功'
	  );
	  echo json_encode($a);
  }else{
	  $a=array(
	  'state'=>0,
	  'info'=>'添加失败',
	  );
	  echo json_encode($a);
	  
  }
  }
?>