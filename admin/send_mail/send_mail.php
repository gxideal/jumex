<?php 
ignore_user_abort();           // 即使Client断开(如关掉浏览器)，PHP脚本也可以继续执行.
set_time_limit(0);             // 执行时间为无限制，php默认的执行时间是30秒，通过set_time_limit(0)可以让程序无限制的执行下去

$file_dir = 'doing.txt';
$fp=fopen($file_dir,"r"); 
$con=fread($fp,filesize($file_dir));//读文件 
fclose($fp); 
if ($con == 0){
	include "../include/config.php";
    include "../include/Db.php";
	
	$fp=fopen($file_dir,"w"); 
	fwrite($fp,1,1); 
	fclose($fp); 
     $db = Db::getInstance($_SC2);
	 $sql="select*from send_email where send_time=0";
	 $result=$db->execute($sql);
	 $num=$db->num_rows($result);

	if ($num > 0){
		require_once('../../includes/email/class.phpmailer.php');
	}
	 while($row=$db-> fetch_assoc($result)){
		send_email($row['title'],$row['content'],$row['sender_add'],$row['receive_add'],$row['id'],$row['send_name']);
	}

	$fp=fopen($file_dir,"w"); 
	fwrite($fp,0,1); 
	fclose($fp); 
	}
?>