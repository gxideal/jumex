<?php 
 include_once("include/security.php");
 $id=$_GET['p'];
 $affectrows=$userObj->deljop($id);
 //echo $affectrows;
 if($affectrows!=0){
    echo  "<script language='javascript'>
	        window.location.href='job_list.php';
	      </script>";
 }
?>