window.onload=function(){
				var deng=document.querySelector("#deng");
				var z=document.querySelector(".z");
				var m=document.querySelector(".m");
				deng.onclick=function(){
					var z_value=z.value;
					var m_value=m.value;
					  ajax({
						  type:'post',
						  url:'./php/dengru.php',
						  data:{
							  uname:z_value,
							  upwd:m_value,
						  },
						  success:function(databack){
							  var databack=JSON.parse(databack);
							  switch(databack.state){
								  case 1:  alert('登入成功');
								
								   location.href="./student.html";
								
								  break;
								  case 2: alert('用户名不存在');
								  break;
								  case 0:alert('密码错误');
								  break;
							  }
						  }
					  }) 
				}
			
			}