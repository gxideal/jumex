<?php
 include_once("include/head.php");
 include_once("include/security.php");
 $s['name']=$_POST['s_name'];
 $s['country']=$_POST['s_country'];
 $s['city']=$_POST['s_city'];
 $s['img']=$_FILES['file']['name'];
 $s['info']=$_POST['s_info'];
 ?>
<form id="form1" name="form1" method="post" action="creat_job.php" enctype="multipart/form-data">
<div><span>店名：</span><input type="text" name="s_name" id="s_name" /></div>
<div><span>国家：</span><input type="text" name="s_country" id="s_country" /></div>
<div><span>城市：</span><input type="text" name="s_city" id="s_city" /></div>
<div><span>照片：</span><input type="file" name="file" id="file"></div>
<div><span>内容：</span><textarea rows="5" cols="35" id="s_info" name="s_info"></textarea></div>
<div><input type="submit" name="submit" id="submit" value="提交" /></div>
</form>

<?php include_once("include/footer.php")?>