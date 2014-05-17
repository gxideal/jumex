<?php 
include "include/security.php";
include_once("include/head.php");
?>

<script type="text/javascript">
$(function(){
   $("#job").click(function(){
	 window.location.href="job_list.php";
   });
})
</script>
<form id="form1" name="form1" method="post" action="">
    <input type="button" name="job" id="job" value="招聘信息" />
    <input type="button" name="job" id="job" value="公司信息" />
</form>
</body>
</html>
