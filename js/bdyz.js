
function isEmail(_obj,isempty,flag){
    var obj = document.getElementById(_obj.id);
    var info = document.getElementById(_obj.id+"info");
    var reg =/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/;
    if (flag){
        if(isempty){
            if(obj.value == ""){
                showInfo(info,"电子邮件不能为空","red")
                return false;    }
            if (reg.test(obj.value)==false){
                showInfo(info,"电子邮件格式不正确","red")
                return false;}
            else{
                showInfo(info,"√","green")
                return true;}
        }
        else{
            if (obj.value.length>0){
                if (reg.test(obj.value)==false){
                    showInfo(info,"电子邮件格式不正确","red")
                    return false;}
                else{
                    showInfo(info,"√","green")
                    return true;    }                
            }
            else{
                    showInfo(info,"如果填写则进行格式验证","black")
                    return true;    }
        }
    }
    else{
        showInfo(info,"电子邮件可以取回密码","blue")    }
}