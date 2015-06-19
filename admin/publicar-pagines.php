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
    <link href="../bootstrap/css/formularis.css" rel="stylesheet">


	
  </head>

  <body>

	
<div class="contingutformularis">

<form action="./publicar-pagines_.php" method="post" enctype="multipart/form-data" name="formulari_publicar" accept-charset="utf-8">
  
  <div class="formesquerra">
        <label class="form-label form-label-left form-label-auto" id="label_3">T&iacute;tulo </label>
  </div>
  
  
  <div class="formdreta">
          <input type="text" class="form-textbox" data-type="input-textbox" name="camp_titol" size="20" value="" />
  </div>
  
  
  
  
   <div class="formesquerra">
        <label class="form-label form-label-left form-label-auto" for="input_2">Categoría </label>
   </div>
	
	
   <div class="formdreta">
   
		<select name="camp_categoria">
		<option selected>Para los ciudadanos</option>
		<option>Para los visitantes</option>
		<option>Para las empresas</option>
		</select>

    </div>
		  
	<p><br />&nbsp;<br /></p>
	
		  
    <div class="formesquerra">
        <label id="label_4" for="input_4">Cuerpo </label>
	</div>
	
	
    <div class="formdreta">
          <textarea id="input_4" class="form-textarea" name="camp_cos" cols="60" rows="16"></textarea>
    </div>

	
<br /><br />&nbsp;<br />
<input type="submit" value="Publicar">
<input type="reset" value="Limpiar los campos">
</form>

</div>

	