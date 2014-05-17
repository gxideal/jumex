<?php 
include "../config.php";
include "../include/Db.php";
include "../include/users.php";
include "../include/Paginator.php";
////////////////////////////
$admin_name=$_COOKIE['admin_name'];
$admin_password=$_COOKIE['admin_password'];
if($admin_name == '' || $admin_password == ''){
    $url="login.php";
	echo "<script language='javascript'>
             window.location.href='".$url."';
	      </script>";
}elseif($admin_name != '' && $admin_password != ''){
   if($admin_name == $_SC['admin_name'] && $admin_password == $_SC['admin_password']){
	   $bool="true";
   }else{
    $url="login.php";
	echo "<script language='javascript'>
	        window.location.href='".$url."';
	      </script>";
   }	
}
///////////////////////////////////
$db = Db::getInstance($_SC2);
$userObj=new Users($db);
$p=new Page3();
///////////////////////////////



?>