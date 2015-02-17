<?php require_once('Connections/conn.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_conn, $conn);
$query_Recordset1 = "SELECT * FROM arsenalfc";
$Recordset1 = mysql_query($query_Recordset1, $conn) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Draggable - Default functionality</title>
	<link rel="stylesheet" href="jq/development-bundle/themes/base/jquery.ui.all.css">
	<script src="jq/js/jquery-1.9.1.js"></script>
	<script src="jq/development-bundle/ui/jquery.ui.core.js"></script>
	<script src="jq/development-bundle/ui/jquery.ui.widget.js"></script>
	<script src="jq/development-bundle/ui/jquery.ui.mouse.js"></script>
	<script src="jq/development-bundle/ui/jquery.ui.draggable.js"></script>
	<link rel="stylesheet" href="../demos.css">
	<style>
	#draggable { width: 50px; height: 50px; padding: 0.5em; }
	#draggable0 { width: 50px; height: 50px; padding: 0.5em; }
	#draggable1 { width: 50px; height: 50px; padding: 0.5em; }
	#draggable2 { width: 50px; height: 50px; padding: 0.5em; }
	#draggable3 { width: 50px; height: 50px; padding: 0.5em; }
	#draggable4 { width: 50px; height: 50px; padding: 0.5em; }
	#draggable5 { width: 50px; height: 50px; padding: 0.5em; }
	#draggable6 { width: 50px; height: 50px; padding: 0.5em; }
	#draggable7 { width: 50px; height: 50px; padding: 0.5em; }
	#draggable8 { width: 50px; height: 50px; padding: 0.5em; }
	#draggable9 { width: 50px; height: 50px; padding: 0.5em; }
	#draggable10 { width: 50px; height: 50px; padding: 0.5em; }
	#draggable11 { width: 50px; height: 50px; padding: 0.5em; }
	#apDiv1 {
	position: absolute;
	left: 0px;
	top: 100px;
	width: 800px;
	background:url(images/pitch.png);
	height: 500px;
	z-index: -1;
}
    #apDiv2 {
	position: absolute;
	left: 855px;
	top: 105px;
	width: 198px;
	height: 455px;
	z-index: 1;
}
    #apDiv3 {
	position: absolute;
	left: 857px;
	top: 81px;
	width: 193px;
	height: 19px;
	z-index: 2;
}
    </style>
	<script>
	$(function() {
		$( "#draggable" ).draggable();
	});
	
	//$(function() {
		//$( "#draggable2" ).draggable();
	//});
	</script>
    
    <script type="text/javascript" language="javascript">
	function create()
	{
		var i;
		
		for(i = 0; i<=11; i++)
		{
			$(function() {
				$( "#draggable"+i ).draggable();
					});
					//alert(i);
					console.log("i have created draggable #player"+i);
		}
		
		
		
	}
	
	function doPlayers()
	{
		console.log("i have called the div #player");
		create();
		
		
		var p;
		for(p = 0; p<=11; p++)
		{
			var dd = document.createElement("div");

			dd.setAttribute("id","draggable"+p);
			dd.setAttribute("class","ui-widget-content");
			dd.innerHTML = "This is div: "+p;
			//alert("i have created you "+p);
			document.getElementsByTagName("body")[0].appendChild(dd);
			//document.getElementById("bodd").appendChild(dd);
			//document.getElementById("apDiv1").
			//.appendChild(dd);
			console.log("i have created div #player"+p);
	
			}	
	}
	function test()
	{
		var test = document.createElement("div");
		test.innerHTML = "test";
		//document.getElementsByTagName("body")[0].appendChild(test);	
	}
	function rr()
	{
		var i;
		
		for(i = 0; i<=100; i++)
		{
			$(function() {
				$( "#draggable"+i ).draggable();
					});
					//alert(i);
					console.log("i have created draggable #player"+i);
		}
		doPlayers();	
	}
	</script>
    
</head>
<body onLoad="rr();" id="bodd">
<div id="apDiv1"></div>
<!--<div id="draggable20" class="ui-widget-content" >test 2</div>doPlayers();-->
<!--<div id="draggable" class="ui-widget-content" >test</div>-->
<!--<div id="draggable40" class="ui-widget-content" >test 3</div>-->

</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
