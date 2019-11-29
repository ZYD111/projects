	function del(){
	var databox=document.querySelector('.databody');
	databox.onclick=function(e){
		var e=e || window.event;
		var target=event.target||event.srcElement;
		if(target.tagName=="BUTTON" && target.className=="btn btn-success"){

			var id=target.parentNode.parentNode.getAttribute("data-id");
			 ajax({
				 type:'post',
				 url:'./php/del.php',
				 data:{
					 id:id,
				 },
				 success : function(d){
					d = JSON.parse(d);
					 switch(d.state){
						 case 0: alert('删除失败');
						 break;
						 case 1:alert('删除成功');
						 target.parentNode.parentNode.remove();
						 student();
					 }
					 
				 }
				
			 })
		}
	}

}
	