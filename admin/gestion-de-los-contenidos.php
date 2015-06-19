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
    
    
    <SCRIPT TYPE="text/javascript">

		function dropdown(mySel)
		{
		var myWin, myVal;
		myVal = mySel.options[mySel.selectedIndex].value;
		if(myVal)
		   {
		   if(mySel.form.target)myWin = parent[mySel.form.target];
		   else myWin = window;
		   if (! myWin) return true;
		   myWin.location = myVal;
		   }
		return false;
		}

	</SCRIPT>
  </head>

  <body>

<?php 
$variable_naturaleza=($_GET[naturaleza]);
?>

<div class="contingutformularis">


<div class="listbox_continguts">
<form method=POST onSubmit="return dropdown(this.gourl)" action="./gestion-de-los-contenidos.php" NAME="itemsform" enctype="multipart/form-data" accept-charset="utf-8">
	Mostrar contenidos de la naturaleza: 
	 <SELECT NAME="gourl">
		 <option selected value="./gestion-de-los-contenidos.php">- Todos los tipos -</option>
		 <option value="./gestion-de-los-contenidos.php?naturaleza=Servicio">Servicio</option>
		 <option value="./gestion-de-los-contenidos.php?naturaleza=Carrusel">Carrusel</option>
		 <option value="./gestion-de-los-contenidos.php?naturaleza=Mensaje de avis">Mensaje de aviso</option>
		 <option value="./gestion-de-los-contenidos.php?naturaleza=Noticia">Noticia</option>
		 <option value="./gestion-de-los-contenidos.php?naturaleza=Pagina del menu">P&aacute;gina del men&uacute;</option>
	</select>
	<input type="submit" value="Seleccionar">
</form>
</div>		
		
	<br /><br />&nbsp;<br /><br />&nbsp;
     
    <?php 
    if ($variable_naturaleza)
    { 
    
    
		  	$db = mysql_connect('sepamhost.dipcas.es:4406', 'root', '');
			mysql_select_db("ajuntaments30_db",$db);
			$result = mysql_query(" select id, tipo, titol, imagen1 from contingut WHERE tipo='$variable_naturaleza' order by id asc;",$db);
			while($myrow = mysql_fetch_array($result)) {   
			?>
				
			<?php if (!strstr($myrow["imagen1"], '.')) { ?>
		
			 <div class="columnaimagen1"><img src="../images/sin-imagen.png" width="80px" /></div>
			 
			<?php } else { ?> 
			
			<div class="columnaimagen1"><img src="../images/continguts/<?php echo ($myrow["imagen1"]);?>" width="80px" /></div>
			
			<?php } ?>
			
			<div class="columnatitol"><?php echo ($myrow["titol"]);?></div>
		    <div class="columnaeliminar"><a href="./esborra_contingut.php?id=<?php echo ($myrow["id"]);?>" class="link_esborrar">[eliminar]</a></div>	
		    <br /><br /><br /><br />
			<?php
			}
			mysql_close($db);
			
			
			
	 } else {
	 // no hi ha $variable_naturaleza
	 
	 
	 
	 		$db = mysql_connect('sepamhost.dipcas.es:4406', 'root', '');
			mysql_select_db("ajuntaments30_db",$db);
			$result = mysql_query(" select id, tipo, titol, imagen1 from contingut order by id asc;",$db);
			while($myrow = mysql_fetch_array($result)) {   
			?>
				
			<?php if (!strstr($myrow["imagen1"], '.')) { ?>
		
			 <div class="columnaimagen1"><img src="../images/sin-imagen.png" width="80px" /></div>
			 
			<?php } else { ?> 
			
			<div class="columnaimagen1"><img src="../images/continguts/<?php echo ($myrow["imagen1"]);?>" width="80px" /></div>
			
			<?php } ?>
			
			<div class="columnatitol"><?php echo ($myrow["titol"]);?></div>
		    <div class="columnaeliminar"><a href="./esborra_contingut.php?id=<?php echo ($myrow["id"]);?>" class="link_esborrar">[eliminar]</a></div>	
		    <br /><br /><br /><br />
			<?php
			}
			mysql_close($db);
			
			
			
			
	  } // s'acaba el if ($variable_naturaleza)
			?>
</div>
