//设置cookie
/*
    参数：
        cookie名称
        cookie的值
        cookie过期时间   一般以天为单位
*/

function setCookie(cname, cvalue, expires) {
    //实例化时间对象
    var d = new Date();
    //设置时间
    d.setDate(d.getDate() + expires);
    //设置cookie
    document.cookie = cname + '=' + cvalue + ';path=/;expires=' + d.toGMTString();
}




//读取cookie
function getCookie(cname){
    //现获取所有cookie
    var allCookie = document.cookie;
    //把获取的过来的cookie字符串，以分号和空格的形式分成数组。
    var arrCookie = allCookie.split('; ');
    //遍历数组
    for(var i = 0 ; i < arrCookie.length ; i++){
        //声明一个临时变量装以等号分割完的小数组
        var temp = arrCookie[i].split('=');
        //比对cookie名
        if(cname == temp[0]){
            return temp[1];
        }
    }
}



//删除cookie;

function removeCookie(cname){
    setCookie(cname,null,-1);
}