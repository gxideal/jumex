<?php
 include_once("include/security.php");
  if($lang=='en'){
 $web_title=$_LANG["shoplist"]["tit"];
}elseif($lang=='fr'){
 $web_title=$_LANG["shoplist"]["tit"];
}elseif($lang='cn'){
 $web_title=$_LANG["shoplist"]["tit"];
}
 include_once("include/head.php");
 
 $sql = "select * from branch_shop";
$result=$userObj->selshop($sql);
 $rowsTotal=$db->num_rows($result);
 $p->rowsTotal=$rowsTotal;
 $p->pagesize=14;
 $p->curPage=$_GET['p'];
 $p->linkPage="shoplist.php";
 $pages=$p->showPage();
 $pageTotal=ceil($rowsTotal/$p->pagesize);
 $offset=($p->curPage-1)* $p->pagesize;
 $sql.=" limit {$offset} , {$p->pagesize}";
 $result=$userObj->selshop($sql);
 $i=0;
 
 ?>

<div id="about_div">
 <div id="abody_div">
 
    <div id="abloge_div"><img src="images/logo2.png"></div>
    <div id="abtit_div">
         <div <?php if($lang=='cn')echo'id="e2"';else echo 'id="tit_s7"';?>>&nbsp;</div>
        <div  <?php if($lang=='cn')echo'id="e1"';else echo 'id="tit_s6"';?>><?php echo($_LANG["shoplist"]["tit"])?></div>
    </div>

    <div id="table_div">
    <table  width="910"  border="0" align="left" id="table_1" cellpadding="0" cellspacing="0" >  
       <tr align="center" id="tr_1" name="tr_1">
          <td><?php echo($_LANG["shoplist"]["name"])?></td>
          <td align="left">&nbsp;&nbsp;<?php echo($_LANG["shoplist"]["add"])?></td>
          <td><?php echo($_LANG["shoplist"]["pc"])?></td>
          <td><?php echo($_LANG["shoplist"]["city"])?></td>
          <td><?php echo($_LANG["shoplist"]["country"])?></td>
         <?php /*?>   <td align="left">&nbsp;&nbsp;<?php echo($_LANG["shoplist"]["email"])?></td><?php */?>
        </tr>
         <?php 
     if($rowsTotal>0){
     while($row=$db->fetch_assoc($result)){?>
        <tr align="center" <?php if($i%2!=0)echo'class="bold"';?>>
            <td width="100"><?php echo($row['name'])?></td>
            <td width="490" align="left"><?php echo($row['add_1']."&nbsp;".$row['add_2'])?></td>
            <td width="100"> <?php echo($row['zide_code'])?></td>
            <td width="120"><?php echo($row['city'])?></td>
            <td width="100"><?php echo($row['country'])?></td>
          <?php /*?>  <td width="180"  align="left"><?php echo($row['email'])?></td><?php */?>
       </tr>
   <?php  $i+=1;}}?>
    </table>
    </div>
   <?php echo($pages)?>
  </div>
</div>
<?php include_once("include/footer.php")?>