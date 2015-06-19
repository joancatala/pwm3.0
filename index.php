<?php
	//
	// inici de la pagina web municipal
	//
	// organitzem el index.php amb includes per tal de tenir la portada de la web de manera
	// flexible i modulable. Si volem editar o deshabilitar qualsevol funciÃ³, nomÃ¨s caldrÃ 
	// anar al fitxer .inc en concret.
	//
	
	// Els paràmetres de configuració bàsics com l'escut del municipi, el títol de la web
	// la url on la tenim albergada, etc.
	//
	include("./inc/parametres.inc");
	
	// Ací les distintes seccions de la web
	// Si volem ocultar o deshabilitar alguna, nomès cal comentar amb "//" davant de la línia.
	//
	include ("./inc/capcalera.inc");   
	include ("./inc/cookies.inc");   
	include ("./inc/menu.inc");   
	include ("./inc/nom_ajuntament.inc");
	include ("./inc/alerta.inc");
	include ("./inc/serveis.inc");
	include ("./inc/carrusel.inc");
	include ("./inc/noticia_destacada.inc");
	include ("./inc/mapa_localizacion.inc");
	include ("./inc/mensaje_pie.inc");
	include ("./inc/peu.inc");
	
	// Colorin colorat, aquest codi s'ha acabat.
	//
?>   
	 