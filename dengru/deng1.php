<?php
   $h_name=$_GET['uname'];
   $h_pass=$_GET['upass'];
   $h_check=$_GET['checkbox'];
   // print_r($h_name);
   // print_r($h_pass);
   
   include './zhu1.php';
   $sql2="select * from table2 where u_name='$h_name'";
   $res2=mysqli_query($connect,$sql2);
   $arr2 =mysqli_fetch_assoc($res2);
   
   if($arr2){
		 if($arr2['u_pass']==$h_pass){
			 // echo '<script>alert("登入成功");location.href="./yemian.html"</script>';
			 if(isset($h_check)==on){
				 
				 header("location:./yemian.html");
				 setcookie("onul",true,time()+60*60*24*1,"/");
				  setcookie("name","$h_name",time()+60*60*24*1,"/");
			 }else{
				 header("location:./yemian.html");
				 setcookie("onul",true);
				  setcookie("name","$h_name");
			 }
			 
		 }else{
			 echo '<script>alert("密码错误")</script>';
		 }
   }else{

	   echo '<script>alert("用户名不存在"); location.href="./deng.html"; </script>';
	   
	    }
   
   
?>