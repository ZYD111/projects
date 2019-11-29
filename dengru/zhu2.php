<?php
   $h_name=$_GET['uname'];
   $h_pass=$_GET['upass'];
   // print_r($h_name);
   // print_r($h_pass);
   
   include './zhu1.php';
   $sql="select * from table2 where u_name='$h_name'";
   $res=mysqli_query($connect,$sql);
   $arr =mysqli_fetch_assoc($res);
   
   if($arr){
	   echo '<script>alert("用户名已存在"); location.href="./zhu0.html"; </script>';
   }else{
	   $sql1="insert into table2 (u_name,u_pass) values('$h_name','$h_pass')";
	   $res1=mysqli_query($connect,$sql1);
	   if($res1){
	   echo '<script>alert("用户名注册成功"); location.href="./deng.html"; </script>';
	   
	    }
   }
   
?>