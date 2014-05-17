<?php
 include_once("include/security.php");
//echo $lang;
  if($lang=='en'){
 $web_title=$_LANG["joblist"]["tit"];
 }elseif($lang=='de'){
 $web_title=$_LANG["joblist"]["tit"];
 }elseif($lang='cn'){
 $web_title=$_LANG["joblist"]["tit"];
 }
 include_once("include/head.php");
 $sql="select*from job_info left join branch_shop on job_info.shop_id=branch_shop.id where display=0 order by sort desc";
 $result=$userObj->seljop($sql);
 $rowsTotal=$db->num_rows($result);
?>
<div id="about_div2">
 <div id="abody_div">
    <div id="abloge_div"><img src="images/logo2.png"></div>
    <div id="abtit_div">
         <div <?php if($lang=='cn')echo'id="e2"';else echo 'id="tit_s9"';?>>&nbsp;</div>
         <div <?php if($lang=='cn')echo'id="e1"';else echo 'id="tit_s8"';?>><?php echo($_LANG["joblist"]["tit"])?></div>
    </div>
    <div id="kong">&nbsp;</div>
    <div id="job_div">
    <?php 
     if($rowsTotal>0){
     while($row=$db->fetch_assoc($result)){?>
    <div id="manger_div">
      <div id="man_1"><span id="nsg_s1"><?php echo($row['title'])?></span><span id="nsg_s2"><?php echo(date('Y.m.d',$row['start_time'])."-".date('Y.m.d',$row['end_time']))?></span></div>
      <div id="name_2"><span id="nsg_s3"><?php echo($row['add_1'].",".$row['add_2'])?></span></div>
      <div id="name_3"><span id="nsg_s3"><?php echo($row['city'].",".$row['country'])?></span></div>
      <div id="name_2"><?php echo(htmlspecialchars($row['content']))?></div>
      <?php /*?><div id="name_2"><span id="nsg_s3"><?php echo($_LANG["joblist"]["info"]."&nbsp;&nbsp;<u>".$row['email'])?></u></span></div><?php */?>
    </div>
    <div id="line">&nbsp;</div>
   <?php }}else{?>
      <div id="manger_div2"><div id="noinfo"><?php echo($_LANG["joblist"]["info2"])?></div></div>
   <?php }?>
   </div>
  </div>
</div>


<?php include_once("include/footer.php")?>