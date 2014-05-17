<?php
 include_once("include/security.php");
  if($lang=='en'){
 $web_title=$_LANG["contact"]["tit"];
}elseif($lang=='fr'){
 $web_title=$_LANG["contact"]["tit"];
}elseif($lang='cn'){
 $web_title=$_LANG["contact"]["tit"];
}
 include_once("include/head.php");
?>

<div id="about_div">
 <div id="abody_div">
    <div id="abloge_div"><img src="images/logo2.png"></div>
    <div id="abtit_div">
         <div <?php if($lang=='cn')echo'id="new_89"';else echo 'id="tit_s4"';?>>&nbsp;</div>
         <div <?php if($lang=='cn')echo'id="e1"';else echo 'id="tit_s3"';?>><?php echo($_LANG["contact"]["tit"])?></div>
    </div>
     <div id="abcon_div">
     <div id="conimg_div"><img src="images/210.png"></div>
     <div <?php if($lang=='cn')echo'id="e3"';else echo 'id="cont_div"';?>><?php echo($_LANG["contact"]["info"])?></div>
    </div>
  </div>
</div>
<?php include_once("include/footer.php")?>