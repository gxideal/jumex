<?php
 include_once("include/security.php");
 if($lang=='en'){
 $web_title=$_LANG["aboutour"]["tit"];
}elseif($lang=='fr'){
 $web_title=$_LANG["aboutour"]["tit"];
}elseif($lang='cn'){
 $web_title=$_LANG["aboutour"]["tit"];
}
 include_once("include/head.php");
?>

<div id="about_div">
 <div id="abody_div">
    <div id="abloge_div"><img src="images/logo2.png"></div>
    <div id="abtit_div">
         <div <?php if($lang=='cn')echo'id="e2"';else echo 'id="tit_s2"';?>>&nbsp;</div>
        <div <?php  if($lang=='cn')echo'id="e1"';else echo 'id="tit_s1"';?>><?php echo($_LANG["aboutour"]["tit"])?></div>
    </div>
    <div id="abcon_div">
     <div id="conimg_div"><img src="images/211.png"></div>
     <div <?php if($lang=='cn')echo'id="e3"';else echo 'id="cont_div"';?>><?php echo($_LANG["aboutour"]["info"])?></div>
    </div>
 </div>
</div>
<?php
 include_once("include/footer.php");
?>