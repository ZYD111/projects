<?php
     // $sql='insert into table1(id,stuid,name,sex,old,class) values()';
	 header('content-type:text/html;charset:utf-8');
	 include 'inde.php';
	 $sql='select * from table1 ';
	 $res=mysqli_query($connect,$sql);
	 $d=array();
	 while($arr=mysqli_fetch_assoc($res)){
		array_push($d,$arr);
		 
	 }
	  echo json_encode($d);
	
?>
