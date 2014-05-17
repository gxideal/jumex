<?php
$lang=$_COOKIE['lang'];
if( $lang=='' || ($lang !='de' && $lang != 'cn' && $lang !='en') ){$lang='de';}
//echo $lang;
include_once("lang/".$lang."/ls.php");

 if($lang=='cn'){
	 $img1="images/enh.png";
	 $img2="images/deh.png";
	 $img3="images/cn.png";
 }elseif($lang=='en'){
     $img1="images/en.png";
	 $img2="images/deh.png";
	 $img3="images/cnh.png";
 }elseif($lang=='de'){
	 $img1="images/enh.png";
	 $img2="images/de.png";
	 $img3="images/cnh.png";
 }
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title><?php echo $web_title;?></title>
<link rel="icon" href="favicon.png" type="image/png" />
<link href="css/index_new.css?rand=<?php echo rand(0,1000);?>" rel="stylesheet" type="text/css" media="all" />
<?php if($lang!='cn') echo'<link href="css/head_de.css?rand='.rand(0,1000).'" rel="stylesheet" type="text/css" media="all" />'?>
<?php if($lang=='cn') echo'<link href="css/head_cn.css?rand='.rand(0,1000).'" rel="stylesheet" type="text/css" media="all"/>'?>
<script type="text/javascript" src="js/jquery-1.6.2.js?rand=<?php echo rand(0,1000);?>"></script>
<script type="text/javascript" src="js/cook.js?rand=<?php echo rand(0,1000);?>"></script>
</head>
<body>
<div id="h_div">
   <div id="line_div">
      <span id="s1" name="s1"><a href="index.php" <?php if(strstr($_SERVER['REQUEST_URI'],"index.php"))echo'id="s1_1"';?>>&nbsp;<?php echo($_LANG["head"]["home"])?></a></span>
      <span id="s2" name="s2"><a href ="aboutour.php" <?php if(strstr($_SERVER['REQUEST_URI'],"aboutour.php"))echo'id="s1_1"';?>>&nbsp;<?php echo($_LANG["head"]["about"])?></a></span>
      <span id="s3" name="s3"><a href="shoplist.php" <?php if(strstr($_SERVER['REQUEST_URI'],"shoplist.php"))echo'id="s1_1"';?>>&nbsp;<?php echo($_LANG["head"]["chainome"])?></a></span>
      <span id="s4" name="s4"><a href="contact_us.php" <?php if(strstr($_SERVER['REQUEST_URI'],"contact_us.php"))echo'id="s1_1"';?>>&nbsp;<?php echo($_LANG["head"]["jionus"])?></a></span>
      <span id="s5" name="s5"><a href="joplist.php" <?php if(strstr($_SERVER['REQUEST_URI'],"joplist.php"))echo'id="s1_1"';?>>&nbsp;<?php echo($_LANG["head"]["contact"])?></a></span>
      <span id="s6" name="s6"><a href="#" onclick="chang_language('en')"><img border="0" src="<?php echo($img1)?>" id="img1"></a></span>
      <span id="s7" name="s7"><a href="#" onclick="chang_language('de')"><img border="0" src="<?php echo($img2)?>" id="img2"></a></span>
      <span id="s8" name="s8"><a href="#" onclick="chang_language('cn')"><img border="0" src="<?php echo($img3)?>" id="img3"></a></span>
   </div>
</div>
