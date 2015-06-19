<!DOCTYPE html>
<html lang="es">
  <head>
    <meta chartset="utf-8" />
    <title><?php echo $titol_de_la_pagina; ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="bootstrap/css/personalitzacions.css" rel="stylesheet">

	<!-- Javascripts d'inici -->
	<script>window.jQuery || document.write("<script src='bootstrap/js/jquery-1.7.1.min.js'>\x3C/script>")</script>

	<!-- Script de control de les Cookies -->
	<script type="text/javascript">
	function controlcookies() {
			 // si variable no existe se crea (al clicar en Aceptar)
		localStorage.controlcookie = (localStorage.controlcookie || 0);
	 
		localStorage.controlcookie++; // incrementamos cuenta de la cookie
		cookie1.style.display='none'; // Esconde la política de cookies
	}
	</script>
	
  </head>

  <body>