<?php 
include "config.php";
include "include/Db.php";
include "include/users.php";
include "include/Paginator.php";
$db = Db::getInstance($_SC2);
$userObj=new Users($db);
$p=new Page4;
///////////////////////////////
$lang=$_COOKIE['lang'];
if($lang==''){$lang='de';}
//echo $lang;
include_once("lang/".$lang."/ls.php");
?>