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

<form action="./configuracion-de-la-web_.php" method="post" enctype="multipart/form-data" name="formulari_configuracio" accept-charset="utf-8">

    <?php
	$db = mysql_connect('sepamhost.dipcas.es:4406', 'root', '');
	mysql_select_db("ajuntaments30_db",$db);
	$result = mysql_query("SELECT nom, direccio, poblacio, codipostal, telefon,fax,email,twitter,facebook,googleplus FROM configuracions;",$db);
	while($myrow = mysql_fetch_array($result)) {   
	?>

	<div class="formesquerra">
        <label id="label_5" for="input_5">Escudo o logo </label>
	</div>
	

    <div class="formdreta">
          <input type="file" name="camp_escudo"><br /><br />
    </div>
    
    
  <div class="formesquerra">
        <label class="form-label form-label-left form-label-auto" id="label_3">Nom de l'Ajuntament</label>
  </div>
  
  
  <div class="formdreta">
          <input type="text" class="form-textbox" data-type="input-textbox" name="camp_nom" size="20" value="<?php echo $myrow["nom"];?>" />
  </div>
  
  
      <div class="formesquerra">
        <label class="form-label form-label-left form-label-auto" id="label_3">Direcció</label>
  </div>
  
  
  <div class="formdreta">
          <input type="text" class="form-textbox" data-type="input-textbox" name="camp_direccio" size="20" value="<?php echo $myrow["direccio"];?>" />
  </div>
  
  
    <div class="formesquerra">
        <label class="form-label form-label-left form-label-auto" id="label_3">Població</label>
  </div>
  
  
  <div class="formdreta">
          <input type="text" class="form-textbox" data-type="input-textbox" name="camp_poblacio" size="20" value="<?php echo $myrow["poblacio"];?>" />
  </div>
  
  
  
      <div class="formesquerra">
        <label class="form-label form-label-left form-label-auto" id="label_3">Codi Postal</label>
  </div>
  
  
  <div class="formdreta">
          <input type="text" class="form-textbox" data-type="input-textbox" name="camp_codipostal" size="20" value="<?php echo $myrow["codipostal"];?>" />
  </div>
  
  
  
    <div class="formesquerra">
        <label class="form-label form-label-left form-label-auto" id="label_3">Telèfon</label>
  </div>
  
  
  <div class="formdreta">
          <input type="text" class="form-textbox" data-type="input-textbox" name="camp_telefon" size="20" value="<?php echo $myrow["telefon"];?>" />
  </div>
  
    <div class="formesquerra">
        <label class="form-label form-label-left form-label-auto" id="label_3">FAX</label>
  </div>
  
  
  <div class="formdreta">
          <input type="text" class="form-textbox" data-type="input-textbox" name="camp_fax" size="20" value="<?php echo $myrow["fax"];?>" />
  </div>
  
    <div class="formesquerra">
        <label class="form-label form-label-left form-label-auto" id="label_3">Correu electrònic</label>
  </div>
  
  
  <div class="formdreta">
          <input type="text" class="form-textbox" data-type="input-textbox" name="camp_email" size="20" value="<?php echo $myrow["email"];?>" />
  </div>
  
    <div class="formesquerra">
        <label class="form-label form-label-left form-label-auto" id="label_3">Twitter</label>
  </div>
  
  
  <div class="formdreta">
          <input type="text" class="form-textbox" data-type="input-textbox" name="camp_twitter" size="20" value="<?php echo $myrow["twitter"];?>" />
  </div>
  
    <div class="formesquerra">
        <label class="form-label form-label-left form-label-auto" id="label_3">Facebook</label>
  </div>
  
  
  <div class="formdreta">
          <input type="text" class="form-textbox" data-type="input-textbox" name="camp_facebook" size="20" value="<?php echo $myrow["facebook"];?>" />
  </div>
  
    <div class="formesquerra">
        <label class="form-label form-label-left form-label-auto" id="label_3">Google +</label>
  </div>
  
  
  <div class="formdreta">
          <input type="text" class="form-textbox" data-type="input-textbox" name="camp_googleplus" size="20" value="<?php echo $myrow["googleplus"];?>" />
  </div>
   
			
			
			<?php
			mysql_close($db);
			}
			?>
    
    <br /><br />&nbsp;<br />
	<input type="submit" value="Publicar">
	<input type="reset" value="Limpiar los campos">
</form>

</div>
