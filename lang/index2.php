 <?php
 $web_title="list_job";
 include_once("include/security.php");
 include_once("include/head.php");
 $sql = "select * from branch_shop order by city desc";
 $result=$userObj->selshop($sql);
 $branch_shop=array();
 $city="";
 $i=0;
 while($row=$db->fetch_assoc($result)){
	 if($row['city']==$city){
	 $i++;
	 $city=$row['city'];
     $branch_shop[$row['city']][$i]['name']=$row['name'];
	 $branch_shop[$row['city']][$i]['add_1']=$row['add_1'];
	 $branch_shop[$row['city']][$i]['add_2']=$row['add_2'];
	 $branch_shop[$row['city']][$i]['country']=$row['country'];
	 $branch_shop[$row['city']][$i]['city']=$row['city'];
	 $branch_shop[$row['city']][$i]['img']=$row['img'];
	 }else{
	    $city=$row['city'];	
		$i=0;
     $branch_shop[$row['city']][$i]['name']=$row['name'];
	 $branch_shop[$row['city']][$i]['add_1']=$row['add_1'];
	 $branch_shop[$row['city']][$i]['add_2']=$row['add_2'];
	 $branch_shop[$row['city']][$i]['country']=$row['country'];
	 $branch_shop[$row['city']][$i]['city']=$row['city'];
	 $branch_shop[$row['city']][$i]['img']=$row['img'];
	 }
 }

 
?>
 <script type="text/javascript">
 $(function(){
	$('#indexbody_div>div:gt(0)').mouseover(function(){
		$(this).css({background:"url(images/tin2.png) no-repeat"});
	});
	$('#indexbody_div>div:gt(0)').mouseout(function(){
		$(this).css({background:"url(images/tin1.png) no-repeat"});
	});
 })

var branch_shop=new Object();
branch_shop = <?php echo(json_encode($branch_shop))?>;

function show4(id){
	$("#index_cont3").html('<div id="aa"><div id="cont1"><div id="img1"><img src="'+branch_shop[id][0]['img']+'"></div><div id="add1">'+branch_shop[id][0]['add_1']+'</div><div id="city1">'+id+'&nbsp;,&nbsp;'+branch_shop[id][0]['country']+'</div></div><div id="cont2"><div id="img1"><img src="'+branch_shop[id][1]['img']+'"></div><div id="add1">'+branch_shop[id][1]['add_1']+'</div><div id="city1">'+id+'&nbsp;,&nbsp;'+branch_shop[id][1]['country']+'</div></div><div id="cont2"><div id="img1"><img src="'+branch_shop[id][2]['img']+'"></div><div id="add1">'+branch_shop[id][2]['add_1']+'</div><div id="city1">'+id+'&nbsp;,&nbsp;'+branch_shop[id][2]['country']+'</div></div><div id="cont2"><div id="img1"><img src="'+branch_shop[id][3]['img']+'"></div><div id="add1">'+branch_shop[id][3]['add_1']+'</div><div id="city1">'+id+'&nbsp;,&nbsp;'+branch_shop[id][3]['country']+'</div></div></div>');
	$("#index_cont3").fadeIn(300);
}
var settime;
function show_4(id){
	settime=setTimeout(function (){show4(id)},300);
	}
function close_4(){
	clearTimeout(settime);
  $("#index_cont3").fadeOut(200);
}




function show2(id){
	$("#index_cont2").html('<div id="cont1"><div id="img"><img src="'+branch_shop[id][0]['img']+'"></div><div id="add">'+branch_shop[id][0]['add_1']+'</div><div id="city">'+id+'&nbsp;,&nbsp;'+branch_shop[id][0]['country']+'</div></div><div id="cont2"><div id="img"><img src="'+branch_shop[id][1]['img']+'"></div><div id="add">'+branch_shop[id][1]['add_1']+'</div><div id="city">'+id+'&nbsp;,&nbsp;'+branch_shop[id][1]['country']+'</div></div>');
	$("#index_cont2").fadeIn(300);
	}

function show_2(id){
	settime=setTimeout(function (){show2(id)},300);
	}
function close_2(){
   clearTimeout(settime);
  $("#index_cont2").fadeOut(200);
}





function show1(id){
	$("#index_cont").html('<div id="img"><img src="'+branch_shop[id][0]['img']+'"></div><div id="add">'+branch_shop[id][0]['add_1']+'</div><div id="city">'+id+'&nbsp;,&nbsp;'+branch_shop[id][0]['country']+'</div>');
	$("#index_cont").fadeIn(300);
	}
function show_1(id){
	settime=setTimeout(function (){show1(id)},300);
	}	
	
function close_1(){
  clearTimeout(settime);
  $("#index_cont").fadeOut(200);
}




</script>
<div id="index_div">
 <div id="indexbody_div">
   <div id="indexloge_div"><img src="images/logo2.png" /></div>
   <div id="Flensburg" onMouseOver="show_1('Flensburg');" onMouseOut="close_1();"></div>
   <div id="Hamburg"  onMouseOver="show_1('Hamburg');" onMouseOut="close_1();"></div>
   <div id="Bremen" onMouseOver="show_1('Bremen');" onMouseOut="close_1();"></div>
   <div id="Celle" onMouseOver="show_1('Celle');" onMouseOut="close_1();"></div>
   <div id="Berlin" onMouseOver="show_4('Berlin');" onMouseOut="close_4();"></div>
   <div id="Hanover" onMouseOver="show_1('Hanover');" onMouseOut="close_1();"></div>
   <div id="Laatzen" onMouseOver="show_1('Laatzen');" onMouseOut="close_1();"></div>
   <div id="Herne" onMouseOver="show_1('Herne');" onMouseOut="close_1();"></div>
   <div id="Hameln" onMouseOver="show_1('Hameln');" onMouseOut="close_1();"></div>
   <div id="Duisburg" onMouseOver="show_1('Duisburg');" onMouseOut="close_1();"></div>
   <div id="Dortmund" onMouseOver="show_1('Dortmund');" onMouseOut="close_1();"></div>
   <div id="Krefeld" onMouseOver="show_1('Krefeld');" onMouseOut="close_1();"></div>
   <div id="Wuppertal" onMouseOver="show_1('Wuppertal');" onMouseOut="close_1();"></div>
   <div id="Leverkusen" onMouseOver="show_1('Leverkusen');" onMouseOut="close_1();"></div>
   <div id="Düsseldorf" onMouseOver="show_1('Düsseldorf');" onMouseOut="close_1();"></div>
   <div id="Köln" onMouseOver="show_2('Köln');" onMouseOut="close_2();"></div>
   <div id="Siegen" onMouseOver="show_1('Siegen');" onMouseOut="close_1();"></div>
   <div id="Neuss" onMouseOver="show_2('Neuss');" onMouseOut="close_2();"></div>
   <div id="Düren" onMouseOver="show_1('Düren');" onMouseOut="close_1();"></div>
   <div id="Bonn"  onMouseOver="show_2('Bonn');" onMouseOut="close_2();"></div>
   <div id="Kassel" onMouseOver="show_1('Kassel');" onMouseOut="close_1();"></div>
   <div id="Koblenz" onMouseOver="show_1('Koblenz');" onMouseOut="close_1();"></div>
   <div id="Wiesbaden" onMouseOver="show_1('Wiesbaden');" onMouseOut="close_1();"></div>
   <div id="Wetzlar" onMouseOver="show_1('Wetzlar');" onMouseOut="close_1();"></div>
   <div id="Frankfurt" onMouseOver="show_1('Frankfurt');" onMouseOut="close_1();"></div>
   <div id="Trier" onMouseOver="show_1('Trier');" onMouseOut="close_1();"></div>
   <div id="Mainz" onMouseOver="show_2('Mainz');" onMouseOut="close_2();"></div>
   <div id="Nürnberg" onMouseOver="show_1('Nürnberg');" onMouseOut="close_1();"></div>
   <div id="Neunkirchen" onMouseOver="show_1('Neunkirchen');" onMouseOut="close_1();"></div>
   <div id="Saarbrücken" onMouseOver="show_1('Saarbrücken');" onMouseOut="close_1();"></div>
   <div id="Heidelberg" onMouseOver="show_1('Heidelberg');" onMouseOut="close_1();"></div>
   <div id="Ingolstadt" onMouseOver="show_1('Ingolstadt');" onMouseOut="close_1();"></div>
   <div id="München" onMouseOver="show_1('München');" onMouseOut="close_1();"></div>
   <div id="BergenOpZoom" onMouseOver="show_1('Bergen Op Zoom');" onMouseOut="close_1();"></div>
   <div id="Kapellen" onMouseOver="show_1('Kapellen');" onMouseOut="close_1();"></div>
   <div id="Roeselare" onMouseOver="show_1('Roeselare');" onMouseOut="close_1();"></div>
   <div id="Messancy" onMouseOver="show_1('Messancy');" onMouseOut="close_1();"></div>
 </div>
 
 
 <div id="indexbody_div2" >
 
   <div id="index_cont" style="display:none">

  </div>
  
  
    <div id="index_cont2" style="display:none">
      
    </div>

    
 </div>  
 
 
   <div id="index_cont3" style="display:none">

  </div>
  
  
  
</div>

<?php include_once("include/footer.php")?>