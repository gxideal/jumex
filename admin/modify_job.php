<?php
$web_title='修改招聘信息';
 include_once("include/head.php");
 include_once("include/security.php");
 $s['id']=$_GET['p'];
 $s['s_name']=$_POST['s_id'];
 $s['j_cont']=$_POST['j_cont'];
 $s['j_tit']=$_POST['j_tit'];
 $s['j_stime']=strtotime($_POST['j_stime']);
 //echo $s['j_stime'];
 //echo date('Y-m-d',$s['j_stime']);
 $s['j_etime']=strtotime($_POST['j_etime']);
 $s['j_px']=$_POST['j_px'];
 $s['j_dis']=$_POST['j_dis'];
 $s['hid']=$_POST['hidden1'];
$sql = "select * from branch_shop";

$result=$userObj->selshop($sql);

$result2=$userObj->seljop2($s['id']);
$row2=mysql_fetch_assoc($result2);

if($s['hid']==1){
$affectrows=$userObj->modjop($s);
if($affectrows!=0){
    echo  "<script language='javascript'>
	        window.location.href='job_list.php';
	      </script>";
 }else{
	echo "<script language='javascript'>
               window.alert('对不起，修改没有成功！！');
	      </script>"; 
    }
}
 
?>
<div id="b_div">
  <div id="logo_div"><img src="../images/logo.png"></div>
  <div id="tbody">
   <div id="d1">&nbsp;&nbsp;第<?php  echo($s['id'])?>条招聘信息正在修改</div>
 <div id="d2">
<form id="form1" name="form1" method="post" action="modify_job.php?p=<?php echo($s['id'])?>" enctype="multipart/form-data">
   <div id="sname_div">
      <span id="s1" name="s1">分店名称</span>
      <select name="s_id" id="s_id">
          <?php while($row=mysql_fetch_assoc($result)){?>
              <option><?=$row['country']."(".$row['add_1'].")"?></option>
          <?php }?>
      </select>
   </div>
   <div id="kong"></div>
   <div id="scont_div">
     <span id="s3" name="s3">招聘内容</span>
     <span id="s4" name="s4"><textarea  name="j_cont" id="j_cont" wrap="physical"/> <?php echo($row2['content'])?></textarea></span>
   </div>
   <div id="kong"></div>
   <div id="stit_div">
      <span id="s1" name="s1">招聘标题</span>
      <input type="text" name="j_tit" id="j_tit" value="<?php echo($row2['title'])?>" />
   </div>
   <div id="kong"></div>
   <div id="sst_div">
      <span  id="s1" name="s1">开始时间</span>
      <input type="text" name="j_stime" id="j_stime"  value="<?php echo(date('Y-m-d',$row2['start_time']))?>"/>
   </div>
    <div id="kong"></div>
    <div id="set_div">
      <span id="s1" name="s1">结束时间</span>
      <input type="text" name="j_etime" id="j_etime"   value="<?php echo(date('Y-m-d',$row2['start_time']))?>"/>
   </div>
   <div id="kong"></div>
   <div id="spx_div">
     <span id="s1" name="s1">排序位置</span>
     <input type="text" name="j_px" id="j_px"  value="<?php echo($row2['sort'])?>"/><span id="s2">数字越大越靠前</span>
   </div>
   <div id="kong"></div>
   <div id="sdis_div">
     <span id="s1" name="s1">是否显示</span>
     <input type="text" name="j_dis" id="j_dis"  value="<?php echo($row2['display'])?>"/>
   </div>
    <div id="kong"></div>
    <input type="hidden"  id="hidden1" name="hidden1" value="1">
   <div id="sbut_div"><input type="submit" name="submit" id="submit" value="" /></div>
</form>
</div>
  </div>
</div>
<?php include_once("include/footer.php")?>