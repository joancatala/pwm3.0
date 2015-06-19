<?php
// Aquest es el fitxer que fa que es publiquen els continguts a la web. 
// En un primer lloc anem a capturar el valor dels camps, i desprÃ©s els afegim
// a la base de dades.
//

// Capturem el valor dels camps
//
$variable_titol = $_POST['camp_titol'];
$variable_categoria = $_POST['camp_categoria'];
$variable_cos = $_POST['camp_cos'];




  // Ara anem a insertar la informació del formulari a la base de dades	MySQL
  //        

  include ("../inc/connexio.inc"); 
  
  $result=mysql_query("INSERT INTO pagines (titol, categoria, cos) VALUES ('$variable_titol', '$variable_categoria', '$variable_cos')",$db);
    if(!$result) {
        echo "N'hi ha hagut un error desconegut.";
        die('Error al fer la consulta: ' . mysql_error());
				} else {
				$result;
				echo "<font color='green'>La informacio ha segut correctament desada a la base de dades.</font><br>";
				mysql_close($db);
				}
				
?>