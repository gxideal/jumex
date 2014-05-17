<?php
 $web_title="JUMEX";
 include_once("include/security.php");
 include_once("include/head.php");
 $sql = "select * from branch_shop order by city desc";
 $result=$userObj->selshop($sql);
 $branch_shop=array();
 $city="";
 $i=0;
 while($row=$db->fetch_assoc($result)){
	 $row_city = str_replace("ü","u",$row['city']);
	 $row_city = str_replace("ö","o",$row_city);

	 if($row_city==$city){
	 $i++;
	 $city=$row['city'];
     $branch_shop[$row_city][$i]['name']=$row['name'];
	 $branch_shop[$row_city][$i]['add_1']=$row['add_1'];
	 $branch_shop[$row_city][$i]['add_2']=$row['add_2'];
	 $branch_shop[$row_city][$i]['country']=$row['country'];
	 $branch_shop[$row_city][$i]['city']=$row['city'];
	 $branch_shop[$row_city][$i]['img']=$row['img'];
	 }else{
	    $city=$row_city;	
		$i=0;
     $branch_shop[$row_city][$i]['name']=$row['name'];
	 $branch_shop[$row_city][$i]['add_1']=$row['add_1'];
	 $branch_shop[$row_city][$i]['add_2']=$row['add_2'];
	 $branch_shop[$row_city][$i]['country']=$row['country'];
	 $branch_shop[$row_city][$i]['city']=$row['city'];
	 $branch_shop[$row_city][$i]['img']=$row['img'];
	 }
 }

 
?>
 <script type="text/javascript">
 var out_div_true = 0;
 $(function(){
	$('#indexbody_div>div:gt(0)').mouseover(function(){
		$(this).css({background:"url(images/tin.png) no-repeat right"});
	});
	$('#indexbody_div>div:gt(0)').mouseout(function(){
		$(this).css({background:"url(images/tin.png) no-repeat 3px 0"});
	});
 })
/*<div id="aa">
        	<div id="cont1">
            	<div id="img1"><img src="'+branch_shop[id][0]['img']+'"></div>
                <div id="add1">'+branch_shop[id][0]['add_1']+'</div>
                <div id="city1">'+id+'&nbsp;,&nbsp;'+branch_shop[id][0]['country']+'</div>
            </div>
            <div id="cont2">
            	<div id="img1"><img src="'+branch_shop[id][1]['img']+'"></div>
            	<div id="add1">'+branch_shop[id][1]['add_1']+'</div>
            	<div id="city1">'+id+'&nbsp;,&nbsp;'+branch_shop[id][1]['country']+'</div>
            </div>
            <div id="cont2">
            	<div id="img1"><img src="'+branch_shop[id][2]['img']+'"></div>
            	<div id="add1">'+branch_shop[id][2]['add_1']+'</div>
            	<div id="city1">'+id+'&nbsp;,&nbsp;'+branch_shop[id][2]['country']+'</div>
            </div>
      </div>
      <div id="aa">
        	<div id="cont1">
            	<div id="img1"><img src="'+branch_shop[id][3]['img']+'"></div>
                <div id="add1">'+branch_shop[id][3]['add_1']+'</div>
                <div id="city1">'+id+'&nbsp;,&nbsp;'+branch_shop[id][3]['country']+'</div>
            </div>
            <div id="cont2">
            	<div id="img1"><img src="'+branch_shop[id][4]['img']+'"></div>
            	<div id="add1">'+branch_shop[id][4]['add_1']+'</div>
            	<div id="city1">'+id+'&nbsp;,&nbsp;'+branch_shop[id][4]['country']+'</div>
            </div>
            <div id="cont2">
            	<div id="img1"><img src="'+branch_shop[id][5]['img']+'"></div>
            	<div id="add1">'+branch_shop[id][5]['add_1']+'</div>
            	<div id="city1">'+id+'&nbsp;,&nbsp;'+branch_shop[id][5]['country']+'</div>
            </div>
      </div>*/
var branch_shop=new Object();
branch_shop = <?php echo(json_encode($branch_shop))?>;

function show4(id){
	var cont='';
	cont+='<div id="aa"><div id="cont1"><div id="img1"><img src="'+branch_shop[id][0]['img']+'"></div><div id="add1">'+branch_shop[id][0]['add_1']+'</div><div id="city1">'+branch_shop[id][0]['city']+'&nbsp;,&nbsp;'+branch_shop[id][0]['country']+'</div></div><div id="cont2"><div id="img1"><img src="'+branch_shop[id][1]['img']+'"></div><div id="add1">'+branch_shop[id][1]['add_1']+'</div><div id="city1">'+branch_shop[id][0]['city']+'&nbsp;,&nbsp;'+branch_shop[id][1]['country']+'</div></div><div id="cont2"><div id="img1"><img src="'+branch_shop[id][2]['img']+'"></div><div id="add1">'+branch_shop[id][2]['add_1']+'</div><div id="city1">'+branch_shop[id][0]['city']+'&nbsp;,&nbsp;'+branch_shop[id][2]['country']+'</div></div></div><div id="aa"><div id="cont1"><div id="img1"><img src="'+branch_shop[id][3]['img']+'"></div><div id="add1">'+branch_shop[id][3]['add_1']+'</div><div id="city1">'+branch_shop[id][0]['city']+'&nbsp;,&nbsp;'+branch_shop[id][3]['country']+'</div></div><div id="cont2"><div id="img1"><img src="'+branch_shop[id][4]['img']+'"></div><div id="add1">'+branch_shop[id][4]['add_1']+'</div><div id="city1">'+branch_shop[id][0]['city']+'&nbsp;,&nbsp;'+branch_shop[id][4]['country']+'</div></div><div id="cont2"><div id="img1"><img src="'+branch_shop[id][5]['img']+'"></div><div id="add1">'+branch_shop[id][5]['add_1']+'</div><div id="city1">'+branch_shop[id][0]['city']+'&nbsp;,&nbsp;'+branch_shop[id][5]['country']+'</div></div></div>'
	$("#index_cont3").html(cont);
	$("#index_cont3").fadeIn(300);
}
var settime;
function show_4(id){
	settime=setTimeout(function (){show4(id)},300);
	}
function close_4(){
	out_div_true=0;
	setTimeout(function(){
	if(out_div_true == 0){
		clearTimeout(settime);
  		$("#index_cont3").fadeOut(200);
  }},600)
}



function show3(id){
	$("#index_cont3").html('<div id="aa"><div id="cont1"><div id="img1"><img src="'+branch_shop[id][0]['img']+'"></div><div id="add1">'+branch_shop[id][0]['add_1']+'</div><div id="city1">'+branch_shop[id][0]['city']+'&nbsp;,&nbsp;'+branch_shop[id][0]['country']+'</div></div><div id="cont2"><div id="img1"><img src="'+branch_shop[id][1]['img']+'"></div><div id="add1">'+branch_shop[id][1]['add_1']+'</div><div id="city1">'+branch_shop[id][0]['city']+'&nbsp;,&nbsp;'+branch_shop[id][1]['country']+'</div></div><div id="cont2"><div id="img1"><img src="'+branch_shop[id][2]['img']+'"></div><div id="add1">'+branch_shop[id][2]['add_1']+'</div><div id="city1">'+branch_shop[id][0]['city']+'&nbsp;,&nbsp;'+branch_shop[id][2]['country']+'</div></div></div>');
	$("#index_cont3").fadeIn(300);
	}

function show_3(id){
	settime=setTimeout(function (){show3(id)},300);
	}
function close_3(){
   clearTimeout(settime);
  $("#index_cont3").fadeOut(200);
}



function show2(id){
	$("#index_cont2").html('<div id="cont1"><div id="img"><img src="'+branch_shop[id][0]['img']+'"></div><div id="add">'+branch_shop[id][0]['add_1']+'</div><div id="city">'+branch_shop[id][0]['city']+'&nbsp;,&nbsp;'+branch_shop[id][0]['country']+'</div></div><div id="cont2"><div id="img"><img src="'+branch_shop[id][1]['img']+'"></div><div id="add">'+branch_shop[id][1]['add_1']+'</div><div id="city">'+branch_shop[id][0]['city']+'&nbsp;,&nbsp;'+branch_shop[id][1]['country']+'</div></div>');
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
	$("#index_cont").html('<div id="img"><img src="'+branch_shop[id][0]['img']+'"></div><div id="add">'+branch_shop[id][0]['add_1']+'</div><div id="city">'+branch_shop[id][0]['city']+'&nbsp;,&nbsp;'+branch_shop[id][0]['country']+'</div>');
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
 <div id="indexbody_div" style="background:url(images/map_131106.png) no-repeat -61px -106px">
   <div id="indexloge_div"><img src="images/logo2.png" /></div>
   <div id="Flensburg" onMouseOver="show_1('Flensburg');" onMouseOut="close_1();"></div>
   <div id="Hamburg"  onMouseOver="show_2('Hamburg');" onMouseOut="close_2();"></div>
   <div id="Bremen" onMouseOver="show_1('Bremen');" onMouseOut="close_1();"></div>
   <div id="Celle" onMouseOver="show_1('Celle');" onMouseOut="close_1();"></div>
   <div id="Berlin" onMouseOver="show_4('Berlin');" onMouseOut="close_4();"></div>
   <div id="Hanover" onMouseOver="show_1('Hanover');" onMouseOut="close_1();"></div>
   <!--<div id="Laatzen" onMouseOver="show_1('Laatzen');" onMouseOut="close_1();"></div>-->
   <div id="Herne" onMouseOver="show_1('Herne');" onMouseOut="close_1();"></div>
   <div id="Hameln" onMouseOver="show_1('Hameln');" onMouseOut="close_1();"></div>
   <div id="Duisburg" onMouseOver="show_2('Duisburg');" onMouseOut="close_2();"></div>
   <div id="Dortmund" onMouseOver="show_1('Dortmund');" onMouseOut="close_1();"></div>
   <div id="Krefeld" onMouseOver="show_1('Krefeld');" onMouseOut="close_1();"></div>
   <div id="Wuppertal" onMouseOver="show_1('Wuppertal');" onMouseOut="close_1();"></div>
   <div id="Leverkusen" onMouseOver="show_1('Leverkusen');" onMouseOut="close_1();"></div>
   <div id="Dusseldorf" onMouseOver="show_2('Dusseldorf');" onMouseOut="close_2();"></div>
   <div id="Koln" onMouseOver="show_2('Koln');" onMouseOut="close_2();"></div>
   <div id="Siegen" onMouseOver="show_1('Siegen');" onMouseOut="close_1();"></div>
   <div id="Neuss" onMouseOver="show_2('Neuss');" onMouseOut="close_2();"></div>
   <div id="Duren" onMouseOver="show_1('Duren');" onMouseOut="close_1();"></div>
   <div id="Bonn"  onMouseOver="show_2('Bonn');" onMouseOut="close_2();"></div>
   <div id="Kassel" onMouseOver="show_1('Kassel');" onMouseOut="close_1();"></div>
   <div id="Koblenz" onMouseOver="show_2('Koblenz');" onMouseOut="close_1();"></div>
   <div id="Wiesbaden" onMouseOver="show_2('Wiesbaden');" onMouseOut="close_2();"></div>
   <div id="Wetzlar" onMouseOver="show_1('Wetzlar');" onMouseOut="close_1();"></div>
   <div id="Frankfurt" onMouseOver="show_1('Frankfurt');" onMouseOut="close_1();"></div>
   <div id="Trier" onMouseOver="show_1('Trier');" onMouseOut="close_1();"></div>
   <div id="Mainz" onMouseOver="show_2('Mainz');" onMouseOut="close_2();"></div>
   <div id="Nurnberg" onMouseOver="show_1('Nurnberg');" onMouseOut="close_1();"></div>
   <div id="Neunkirchen" onMouseOver="show_1('Neunkirchen');" onMouseOut="close_1();"></div>
   <div id="Saarbrucken" onMouseOver="show_1('Saarbrucken');" onMouseOut="close_1();"></div>
   <div id="Heidelberg" onMouseOver="show_1('Heidelberg');" onMouseOut="close_1();"></div>
   <div id="Ingolstadt" onMouseOver="show_2('Ingolstadt');" onMouseOut="close_2();"></div>
   <div id="Munchen" onMouseOver="show_1('Munchen');" onMouseOut="close_1();"></div>
   <div id="BergenOpZoom" onMouseOver="show_1('Bergen Op Zoom');" onMouseOut="close_1();"></div>
   <div id="Kapellen" onMouseOver="show_1('Kapellen');" onMouseOut="close_1();"></div>
   <div id="Roeselare" onMouseOver="show_1('Roeselare');" onMouseOut="close_1();"></div>
   <div id="Messancy" onMouseOver="show_1('Messancy');" onMouseOut="close_1();"></div>
   <div id="Lubeck" onMouseOver="show_1('Lubeck');" onMouseOut="close_1();"></div>
   <div id="Hildesheim" onMouseOver="show_1('Hildesheim');" onMouseOut="close_1();"></div>
   <div id="Essen" onMouseOver="show_2('Essen');" onMouseOut="close_2();"></div>
   <div id="Ludwigshafen" onMouseOver="show_1('Ludwigshafen');" onMouseOut="close_1();"></div>
   <div id="Kaufbeuren" onMouseOver="show_1('Kaufbeuren');" onMouseOut="close_1();"></div>
   <div id="Wien" onMouseOver="show_2('Wien');" onMouseOut="close_2();"></div>
   <div id="Augsburg" onMouseOver="show_1('Augsburg');" onMouseOut="close_1();"></div>
   <div id="Mons" onMouseOver="show_1('Mons');" onMouseOut="close_1();"></div>
   <div id="Mulheimanderruhr"  onMouseOver="show_1('Mulheim an der ruhr');" onMouseOut="close_1();"></div>
   <div id="Bielefeld" onMouseOver="show_1('Bielefeld');" onMouseOut="close_1();"></div>
   <div id="Gelsenkirchen" onMouseOver="show_1('Gelsenkirchen');" onMouseOut="close_1();"></div>
   <div id="Braunschweig" onMouseOver="show_1('Braunschweig');" onMouseOut="close_1();"></div>
   <div id="Memmingen" onMouseOver="show_1('Memmingen');" onMouseOut="close_1();"></div>
   <div id="Gießen" onMouseOver="show_1('Gießen');" onMouseOut="close_1();"></div>
   <div id="Hornu" onMouseOver="show_2('Hornu');" onMouseOut="close_2();"></div>
   
   <div id="Hagen" onMouseOver="show_1('Hagen');" onMouseOut="close_1();"></div>
   <div id="Aachen" onMouseOver="show_1('Aachen');" onMouseOut="close_1();"></div>
   <div id="Solingen" onMouseOver="show_1('Solingen');" onMouseOut="close_1();"></div>
   <div id="Dresden" onMouseOver="show_1('Dresden');" onMouseOut="close_1();"></div>
   <div id="Liege" onMouseOver="show_1('Liege');" onMouseOut="close_1();"></div>
   <div id="Louviere" onMouseOver="show_1('Louviere');" onMouseOut="close_1();"></div>
   <div id="Kiel" onMouseOver="show_1('Kiel');" onMouseOut="close_1();"></div>
 </div>

 
 <div id="indexbody_div2" >
 
   <div id="index_cont" style="display:none"></div>
   <div id="index_cont2" style="display:none"></div>
 </div>  
 
 <div id="index_cont3" style="display:none;" onMouseOver="out_div_true = 1;" onMouseOut="close_4()"></div>
  
  
  
</div>

<?php include_once("include/footer.php")?>