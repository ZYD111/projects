<?php 
       $u_name=$_POST['uname'];
	   $u_pwd=$_POST['upwd'];
	   include 'inde.php';
	   $sql="select * from table2 where u_name='$u_name'";
	   
	   $res=mysqli_query($connect,$sql);
	   
	   $arr=mysqli_fetch_assoc($res);
	   
	   if(!$arr){
		   $a=array(
		   'state'=>2,
		   'info'=>'用户名不存在'
		   );
		   echo json_encode($a);
	   }else{
		   if($arr['u_pass']==$u_pwd){
			   $a=array(
			   'state'=>1,
			   'info'=>'登入成功'
			   );
			   setcookie('isLogin',true,time()+60*60*24,'/');
			   echo json_encode($a);
		//密码正确
		//登录成功
					
		//设置cookie  isLogin 判断是否登录   后端设置
		
		   }else{
			   $a=array(
			   'state'=>0,
			   'info'=>'密码错误'
			   );
			   echo json_encode($a);
		   }
	   }
?>