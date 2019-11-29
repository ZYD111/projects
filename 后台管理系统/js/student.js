function student(){
	var box=document.querySelector('tbody');
	ajax({
		type:'post',
		url:'./php/student.php',
		data:{},
		success:function(d){
			var d=JSON.parse(d);
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
		              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal1" data-whatever="@getbootstrap">修改</button>
		                  <button type="button" class="btn btn-success">删除</button>
		          </td>
		      </tr>
		      `
		}
          
		box.innerHTML=str;
		}
	})
}
	  function  accent(c){
		 	return c <10 ? '0'+ c : c;
		 }
		
		
	

