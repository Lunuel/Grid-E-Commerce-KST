<?php


function afficherMenu($menu){

	include "../php/connectBDD.php";	
	$idEntree = "TPLT1";
	$idPlat = "TPLT2";
	$idDessert = "TPLT3";

	$name = $bdd->query(
    'SELECT *
    FROM menu
	WHERE id_menu = "'.$menu.'"');

	echo "<p class=\"Satis vert nameMenu\">";
    while ($donnees = $name->fetch()){
    	echo $donnees['libelleMenu'];
    } 
    echo "</p>";


	//Entree
	$entree = $bdd->query(
    'SELECT libellePlat
	FROM infosMenu I JOIN plat P ON I.id_plat = P.id_plat
	WHERE id_menu = "'.$menu.'" and id_typePlat = "'.$idEntree.'"');

	echo "<p class=\"listPlat\">";
    while ($donnees = $entree->fetch()){
    	echo $donnees['libellePlat'].'<br>';
    } 
    echo "</p>";
    echo '<hr class="separateur2" style="border-top-color:#96bf0d;">';


    //Plats

    echo "<p class=\"listPlat\">"; 
   	$plat = $bdd->query(
    'SELECT libellePlat
	FROM infosMenu I JOIN plat P ON I.id_plat = P.id_plat
	WHERE id_menu = "'.$menu.'" and id_typePlat = "'.$idPlat.'"');
    while ($donnees = $plat->fetch()){
    	echo $donnees['libellePlat'].'<br>';
    } 
    echo "</p>";  
        echo '<hr class="separateur2" style="border-top-color:#96bf0d;">';


    //Dessert
 	echo "<p class=\"listPlat\">"; 
    $dessert = $bdd->query(
    'SELECT libellePlat
	FROM infosMenu I JOIN plat P ON I.id_plat = P.id_plat
	WHERE id_menu = "'.$menu.'" and id_typePlat = "'.$idDessert.'"');
    while ($donnees = $dessert->fetch()){
    	echo $donnees['libellePlat'].'<br>';
    } 

    echo "</p>";
    echo '<img style="box-shadow: none;" width=40 height=40 src="../img/GB.png">';
    };
 ?>