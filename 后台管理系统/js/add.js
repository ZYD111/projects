function add(){
	var pubtn=document.querySelector('.add');
	var stuId=document.querySelector('.stuId');
	var stuName=document.querySelector('.stuName');
	var stuSex=document.querySelector('.stuSex');
	var stuAge=document.querySelector('.stuAge');
	var stuMagor=document.querySelector('.stuMagor');
	pubtn.onclick=function(){
		var Idval=stuId.value;
		var  Nameval=stuName.value;
		var	Sexval=stuSex.value;
		var	Ageval=stuAge.value;
		var	Magorval=stuMagor.value;
			// console.log(Nameval);
		if(stuId.value=='' || stuAge.value=='' || stuSex.value=='' || stuMagor.value=='' || stuName.values==''){
			alert('请全部填写');
		}else{
			ajax({
				type:'post',
				url:'./php/add.php',
				data:{
					stuIdval:Idval,
					stuNameval:Nameval,
					stuAgeval:Ageval,
					stuSexval:Sexval,
					stuMagorval:Magorval,
				},
				success:function(d){
					
					d=JSON.parse(d);
					
					switch(d.state){
						case 0:alert('添加失败');
						
						break;
						case 1:alert('添加成功');
						student();
						break;
						case 2:alert('学号重复');
						break;
					}
				}
			})
		}
	}
}