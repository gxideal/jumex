<?php
 include_once("include/security.php");
 $web_title="招聘信息列表";
 include_once("include/head.php");
 $sql = "select job_info.id,branch_shop.name,content,title,start_time,end_time from job_info  inner join  branch_shop on shop_id = branch_shop.id where display=0 order by sort desc";
 $result=$userObj->seljop($sql);
 $rowsTotal=$db->num_rows($result);
 $p->rowsTotal=$rowsTotal;
 $p->pagesize=15;
 $p->curPage=$_GET['p'];
 $p->linkPage="job_list.php";
 $pages=$p->showPage();
 $pageTotal=ceil($rowsTotal/$p->pagesize);
 $offset=($p->curPage-1)* $p->pagesize;
 $sql.=" limit {$offset} , {$p->pagesize}";
 $result=$userObj->seljop($sql);
?>
<div id="b_div">
<div id="logo_div"><img src="../images/logo.png"></div>
<div id="tbody2">
<form id="form1" name="form1" method="post" action="creat_job.php" >
<table  width="960"  border="0" align="center" cellpadding="0" cellspacing="0">  
  <tr align="center" style="font-size:20px">
    <th>分店</th>
    <th>招聘岗位</th>
    <th>招聘内容</th>
    <th>开始时间</th>
    <th>结束时间</th>
    <th>操作</th>
  </tr>
    <?php 
     if($rowsTotal>0){
     while($row=$db->fetch_assoc($result)){?>
       <tr align="center">
            <td width="60"><?php echo($row['name'])?></td>
            <td width="120"> <?php echo($row['title'])?></td>
            <td><?php echo($row['content'])?></td>          
            <td width="70"><?php echo(date('Y-m-d',$row['start_time']))?></td>
            <td width="70"><?php echo(date('Y-m-d',$row['end_time']))?></td>
            <td  width="50">
              &nbsp;<a href="delete_job.php?p=<?php echo($row['id'])?>">>删除<</a>&nbsp;
              <a href="modify_job.php?p=<?php echo($row['id'])?>">>修改<</a>
            </td>
       </tr>
   <?php }?>
    <tr>
      <th colspan="6" align="center"><?php echo($pages)?></th>
    </tr>
<?php }else{?>
    <tr>
      <th colspan="6" align="center">您好，目前还没有任何招聘信息</th>
    </tr>
<?php }?>
</table>
</form>
</div>
</div>
<?php include_once("include/footer.php")?>