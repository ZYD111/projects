 
   var search=document.querySelector('.select_box select');
   var wherekey=document.querySelector('.select_text');
   var sou=document.querySelector('.select_btn');
   var box=document.querySelector('tbody');
   sou.onclick=function(){
	   var wherekey_val=wherekey.value;
	   var search_val=search.value;
	   // console.log(wherekey_val);
	   ajax({
		   type:'post',
		   url:'./php/search.php',
		   data:{
			   key:wherekey_val,
			   s:search_val
		   },
		   success:function(d){
			   var d=JSON.parse(d);
			   console.log(d);
			if(d.state!=1){
				alert('查询成功');
					var str='';
					var count=0;
					for(var key in d){
						 count++;
				      str += `
				      <tr data-id='${d[key]['id']}'>
				          <td>${accent(count)}</td>
				          <td>${d[key]['stuid']}</td>
				          <td>${d[key]['name']}</td>
				          <td>${d[key]['sex']}</td>
				          <td>${d[key]['old']}</td>
				          <td>${d[key]['class']}</td>
				          <td>
				              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">修改</button>
				                  <button type="button" class="btn btn-success">删除</button>
				          </td>
				      </tr>
				      `
				}
				  
				box.innerHTML=str;
			}else{
				alert('未搜索到相关内容');
			}
		   }
	   })
   }
   
   function  accent(c){
   		 	return c <10 ? '0'+ c : c;
   		 }
		 
	