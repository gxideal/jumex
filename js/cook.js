//cookie相关函数
function SetCookie(name,value,save_time)//两个参数，一个是cookie的名子，一个是值
{   
    var Days;
    if (save_time != null){
		Days = save_time;
		}
	else{
		Days = 365;
		}	
    var exp  = new Date();
    exp.setTime(exp.getTime() + Days*24*60*60*1000);
    document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
}
function getCookie(name)//取cookies函数        
{
    var arr = document.cookie.match(new RegExp("(^| )"+name+"=([^;]*)(;|$)"));
     if(arr != null) return unescape(arr[2]); return null;

}
function delCookie(name)//删除cookie
{
    var exp = new Date();
    exp.setTime(exp.getTime() - 1);
    var cval=getCookie(name);
    if(cval!=null) document.cookie= name + "="+cval+";expires="+exp.toGMTString();
}
//cookie相关函数  结束

//商品图片无法显示时替换的图片
function chang_pic(v,t){
	$(v).attr("src","images/background/goods_no_pic_"+t+".gif");
	}


//转换语言
function chang_language(lang){
	SetCookie('lang',lang);//记住选择的语言
	window.location.reload();//刷新网页
	}
