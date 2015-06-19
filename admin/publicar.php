<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ajuntament d'Alcantir</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="../bootstrap/css/personalitzacions.css" rel="stylesheet">
  </head>

  <body>

	<div class="contingutformularis">
	
	<form action="./publicar_.php" method="post" enctype="multipart/form-data" name="formulari_publicar" accept-charset="utf-8">
  
  <div class="formesquerra">
        <label class="form-label form-label-left form-label-auto" id="label_3">T&iacute;tulo </label>
  </div>
  
  
  <div class="formdreta">
          <input type="text" class="form-textbox" data-type="input-textbox" name="camp_titol" size="20" value="" />
  </div>
  
  
  
  
   <div class="formesquerra">
        <label class="form-label form-label-left form-label-auto" for="input_2">Tipo del contenido </label>
   </div>
	
	
   <div class="formdreta">
   
		<select name="camp_tipus">
		<option selected>Mensaje de aviso</option>
		<option>Servicio</option>
		<option>Carrusel</option>
		<option>Noticia</option>
		<option>Mensaje del pie</option>
		</select>

    </div>
		  
	<p><br />&nbsp;<br /></p>
	
		  
    <div class="formesquerra">
        <label id="label_4" for="input_4">Cuerpo </label>
	</div>
	
	
    <div class="formdreta">
          <textarea id="input_4" class="form-textarea" name="camp_cos" cols="60" rows="16"></textarea>
    </div>
	
	
	
	
	<div class="formesquerra">
        <label id="label_5" for="input_5">Imagen 1 </label>
	</div>
	

    <div class="formdreta">
          <input type="file" name="camp_imatge1">
    </div>
	
	
		<div class="formesquerra">
        <label id="label_5" for="input_5">Imagen 2 </label>
	</div>
	

    <div class="formdreta">
          <input type="file" id="camp_imatge2" name="camp_imatge2" />
    </div>
	
		<div class="formesquerra">
        <label id="label_5" for="input_5">Imagen 3 </label>
	</div>
	

    <div class="formdreta">
          <input type="file" id="camp_imatge3" name="camp_imatge3" />
    </div>
	
		<div class="formesquerra">
        <label id="label_5" for="input_5">Imagen 4 </label>
	</div>
	

    <div class="formdreta">
          <input type="file" id="camp_imatge4" name="camp_imatge4" />
    </div>
	
<br /><br />&nbsp;<br />
<input type="submit" value="Publicar">
<input type="reset" value="Limpiar los campos">
</form>

</div>

	