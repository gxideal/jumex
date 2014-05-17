<?php ob_start(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<link type="text/css" rel="stylesheet" media="all" href="css/login.css">
<body>
<?php 
include "../config.php";
$admin_name=$_POST['admin_name'];
$admin_password=$_POST['admin_password'];
$admin_red=$_POST['red'];
//echo $admin_red;

if($admin_name != '' && $admin_password != ''){
if($admin_name == $_SC['admin_name'] && $admin_password == $_SC['admin_password']){
	if($admin_red != ""){
	    $time=time()+3600*24*365;
	    setcookie("admin_name",$admin_name,$time);
	    setcookie("admin_password",$admin_password,$time);
	}else{
		setcookie("admin_name",$admin_name);
	    setcookie("admin_password",$admin_password);
	 }
	$url="job_list.php";
	echo "<script language='javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
}else{
	echo "<script language='javascript'>";
	echo "window.alert('用户名或密码不正确')";
	echo "</script>";
}
}
?>
<div id="h_div"></div>
<form id="form1" name="form1" method="post" action="login.php">
<div id="b_div">
   <div id="tb">
      <div id="logo_div"><img src="../images/logo.png"></div>
      <div id="sign_div">
        <div id="user_div"><span id="s1" name="s1">Username</span><input type="text" name="admin_name" id="admin_name" /></div>
        <div id="pwd_div"><span id="s1" name="s1">Password</span><input type="password" name="admin_password" id="admin_password" /></div>
        <div id="ck_div"><span id="s2" name="s2"><input type="checkbox"  name="red" id="red"  /></span>Remember&nbsp;&nbsp;me </div>
        <div id="but_div"><input type="submit" name="submit" id="submit" value="" /></div>
      </div>
   </div>
</div>
</form>
<div id="f_div"></div>
</body>
</html>
<?php flush();?>