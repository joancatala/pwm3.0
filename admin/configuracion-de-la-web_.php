<?php
// Aquest es el fitxer que fa que es registren a la base de dades les dades
// de configuració de la web com el nom de l'Ajuntament, direcció, telèfon, twitter, etc.. 
//

// Capturem el valor dels camps
//
$variable_nom = $_POST['camp_nom'];
$variable_direccio = $_POST['camp_direccio'];
$variable_poblacio = $_POST['camp_poblacio'];
$variable_codipostal = $_POST['camp_codipostal'];
$variable_telefon = $_POST['camp_telefon'];
$variable_fax = $_POST['camp_fax'];
$variable_email = $_POST['camp_email'];
$variable_twitter = $_POST['camp_twitter'];
$variable_facebook = $_POST['camp_facebook'];
$variable_googleplus = $_POST['camp_googleplus'];

$img = $_POST['camp_escudo'];
echo $img;

// Capturem el valor del camp on pujem les imatges
//
if (empty($variable_imatge1)) { $variable_imatge1 = basename($_FILES["camp_imatge1"]["name"]); } else {}
$variable_imatge2 = basename($_FILES["camp_imatge2"]["name"]);
$variable_imatge3 = basename($_FILES["camp_imatge3"]["name"]);
$variable_imatge4 = basename($_FILES["camp_imatge4"]["name"]);


// Comprovem si la imatge 1 té informació. Si l'usuari ha ficat una imatge, la pujem al servidor.
//
if(isset($variable_imatge1)){

$target_dir = "../images/continguts/";

 // Ara afegim date("siHdmy",time()) davant del nom de la imatge, per a intentar que
 // el nom de la imatge siga únic, ja que això afegeix al principi de cada fitxer l'any, el mes, el dia i 
 // l'hora completa (hores, minuts i segons).
$target_file = $target_dir . date("siHdmy",time()) . basename($_FILES["camp_imatge1"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Comprovem si és una imatge o no
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["camp_imatge1"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "El teu escut no és una imatge.";
        $uploadOk = 0;
    }
}

$nom_final_imatge1 = date("siHdmy",time()) . basename($_FILES["camp_imatge1"]["name"]);


// Comprovem si el fitxer ja existeix
if (file_exists($target_file)) {
    echo "Hi ha hagut un error: la imatge ja existeix.";
    $uploadOk = 0;
}
// Comprovem el tamany del fitxer
if ($_FILES["camp_imatge1"]["size"] > 500000) {
    echo "Hi ha hagut un error: el teu escut sembla ser un fitxer és massa gran.<br />";
    $uploadOk = 0;
}
// Nomès permitim uns formats concrets
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Hi ha hagut un error: nomès deixem publicar fitxers JPG, JPEG, PNG i GIF.<br />";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.<br />";
// si tot ha anat bé, intentem pujar el fitxer
} else {
    if (move_uploaded_file($_FILES["camp_imatge1"]["tmp_name"], $target_file)) {
        echo "<font color='green'>La imatge ". basename( $_FILES["camp_imatge1"]["name"]). " ha segut publicada correctament.</font><br />";
    } else {
        echo "Hi ha hagut un error pujant el teu escut.<br />";
    }
}
	
	} else {
		/* l'escut no té informació */
	}  



// Anem a fer aquestes equivalencies amb la funció addslashes per a que 
// el 'update' del MySQL no pete si algun municipi o nom té apòstrofs.
//
$variable_nom = addslashes($variable_nom);
$variable_direccio = addslashes($variable_direccio);
$variable_poblacio = addslashes($variable_poblacio);



  // Ara anem a insertar la informació del formulari a la base de dades	MySQL
  //        

  include ("../inc/connexio.inc"); 
  mysql_query("set names 'utf8'");  
  $result = mysql_query("UPDATE configuracions SET nom='$variable_nom', direccio='$variable_direccio', poblacio='$variable_poblacio', codipostal='$variable_codipostal', telefon='$variable_telefon', fax='$variable_fax', email='$variable_email', twitter='$variable_twitter', facebook='$variable_facebook', googleplus='$variable_googleplus';",$db);
    if(!$result) {
        echo "N'hi ha hagut un error desconegut.";
        die('Error al fer la consulta: ' . mysql_error());
				} else {
				$result;
				echo "<font color='green'>La informacio ha segut correctament desada a la base de dades.</font><br>";
				mysql_close($db);
				}
?>