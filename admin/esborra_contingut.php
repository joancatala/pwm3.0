<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Gestion de los contenidos</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="../bootstrap/css/personalitzacions.css" rel="stylesheet">
    <link href="../bootstrap/css/formularis.css" rel="stylesheet">
  </head>

  <body>

<div class="contingutformularis">

   <?php
		$variable_id=($_GET[id]);
		
		if (($variable_id))
		{
		$db = mysql_connect('sepamhost.dipcas.es:4406', 'root', '');
	    mysql_select_db("ajuntaments30_db",$db);
		@mysql_query("DELETE FROM contingut WHERE id=$variable_id",$db);
     	$result = mysql_query("DELETE FROM contingut WHERE id=$variable_id", $db); 
		while($myrow = @mysql_fetch_array($result))
		{
		}
		mysql_close($db);
		?>
		
		<font color="red">¡El contingut ha segut esborrat correctament!</font>
		
		<?php
		} else {
		
		//no fa res
		}
		
     ?>


</div>
