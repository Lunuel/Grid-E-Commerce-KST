<?php
/**
 * 
 */
class Carte_model extends CI_Model
{
    
    public function afficherMenu($menu){

	$idEntree = "TPLT1";
	$idPlat = "TPLT2";
	$idDessert = "TPLT3";

	$name = $this -> db -> query(
    'SELECT *
    FROM menu
	WHERE id_menu = "'.$menu.'"');

	echo "<p class=\"Satis vert nameMenu\">";
    foreach ($name = result_array() as $donnees){
    	echo $donnees['libelleMenu'];
    } 
    echo "</p>";


	//Entree
	$entree = $this -> db->query(
    'SELECT libellePlat
	FROM infosmenu I Natural JOIN plat P 
	WHERE id_menu = "'.$menu.'" and id_typePlat = "'.$idEntree.'" and Actif = 1');

	echo "<p class=\"listPlat\">";
    foreach ($entreee = result_array() as $donnees){
    	echo $donnees['libellePlat'].'<br>';
    } 
    echo "</p>";
    echo '<hr class="separateur2" style="border-top-color:#96bf0d;">';


    //Plats

    echo "<p class=\"listPlat\">"; 
   	$plat = $this -> db->query(
    'SELECT libellePlat
	FROM infosmenu I JOIN plat P ON I.id_plat = P.id_plat
	WHERE id_menu = "'.$menu.'" and id_typePlat = "'.$idPlat.'"  and Actif = 1');
    foreach ($plat = result_array() as $donnees){
    	echo $donnees['libellePlat'].'<br>';
    } 
    echo "</p>";  
        echo '<hr class="separateur2" style="border-top-color:#96bf0d;">';


    //Dessert
 	echo "<p class=\"listPlat\">"; 

    $dessert = $this -> db->query(
    'SELECT libellePlat
	FROM infosmenu I JOIN plat P ON I.id_plat = P.id_plat
	WHERE id_menu = "'.$menu.'" and id_typePlat = "'.$idDessert.'" and Actif = 1');

    foreach ($dessert = result_array() as $donnees){
    	echo $donnees['libellePlat'].'<br>';
    } 

    echo "</p>";
}

function afficherMenuAdmin($menu){

        $Menu = $this -> db ->query('SELECT libellePlat,id_typePlat,libelletypePlat,id_plat
        FROM infosmenu I Natural JOIN plat P NATURAL JOIN typeplat
        WHERE id_menu = "'.$menu.'" and Actif = 1 ORDER BY id_typePlat ASC');

        $name = $this -> db ->query(
        'SELECT *
        FROM menu
        WHERE id_menu = "'.$menu.'"');

        echo '<p class="Satis vert nameMenu marg10">';

        foreach ($name = result_array() as $donnees){
            echo $donnees['libelleMenu'];
        } 
        echo "</p>";


        echo '<table class="table-admin">
                <tr>
                <th>Plat</th>
                <th>Type</th>
                <th></th>
                </tr>';

        foreach ($Menu = result_array() as $donnees){

            echo '<tr>
                            <td>'.$donnees['libellePlat'].'</td>
                            <td>'.$donnees['libelletypePlat'].'</td>
                            <td style=";"><form method="POST" action="'.$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'].'">
                            <div style="display:flex;position:relative;">
                            <input   type="radio" checked value="'.htmlspecialchars($donnees['id_plat']).'" name="idPlat" hidden>
                                <button type="submit"  name="deleteCommande" class="submit  value="Supprimer"  class="butt-close"><i class="fa fa-close white" style="font-size:15px"></i></button
                                 </div>
                                          
                                 </td></form>
                                </tr>';

        }
        echo '</table>';
    }


function afficherAperitif($aperitif){

    $CocktailA = "TAPR1";
    $CocktailSA = "TAPR3";
    $Planche = "TAPR2";
    $Salade = "TAPR4";

    if ($aperitif == $CocktailA || $aperitif == $CocktailSA) {
        $Aperitif = $this -> db ->query(
        'SELECT libelleAperitif,ingredients,url,prix
        FROM aperitif NATURAL JOIN typeaperitif
        WHERE id_typeAperitif  = "'.$aperitif.'" and Actif = 1 ORDER BY libelleAperitif');

        $typeAperitif = $this -> db ->query(
        'SELECT *
        FROM typeaperitif
        WHERE id_typeAperitif  = "'.$aperitif.'"');

        foreach ($typeAperitif = result_array() as $donnees){
        echo '<div class="text-center">
                <p class="Satis vert nameMenu">'.$donnees['libelletypePlat'].'</p>
            </div>';
        }
        echo '<div class="C-Cocktail">'; 

        foreach ($Aperitif = result_array() as $donnees){ 

        echo'<div class="div2 C-Cocktail-In">
            <div class="grid-col1" style="display:flex;">
                <img src="..'.$donnees['url'].'"  
            style="box-shadow: none;margin:auto 0px;">
            </div>
            <div class="grid-col2">
                <p class="h1" style="font-size:19px;">'.$donnees['libelleAperitif'].' '.$donnees['prix'].' €</p>
                <p style="margin:0px 2px;">'.$donnees['ingredients'].'</p>
            </div>
        </div>';         

    }
    echo "</div>";
    }
    else if ($aperitif == $Salade) {

        $name = $this -> db ->query(
        'SELECT libelleAperitif,ingredients,url,prix
        FROM aperitif NATURAL JOIN typeaperitif
        WHERE id_typeAperitif  = "'.$aperitif.'" and Actif = 1');

        $typeAperitif = $this -> db ->query(
        'SELECT libelletypePlat
        FROM typeaperitif
        WHERE id_typeAperitif  = "'.$aperitif.'"');

        foreach ($typeAperitif = result_array() as $donnees){
        echo '<div class="text-center">
                <p class="Satis vert nameMenu">'.$donnees['libelletypePlat'].'</p>
            </div>';
        }
        
        foreach ($name = result_array() as $donnees){
            echo '<div class="C-Detente-In">';
            
        echo'
        <div>
            <p class="h1" style="font-size:17px;">'.$donnees['libelleAperitif'].' '.$donnees['prix'].' €</p>
            <p style="margin:2px 0px;text-align:justify;">'.$donnees['ingredients'].'</p>
        </div>';   echo "</div>";

        }
    }
    else{
        $name = $this -> db ->query(
        'SELECT libelleAperitif,ingredients,url,prix
        FROM aperitif NATURAL JOIN typeaperitif
        WHERE id_typeAperitif  = "'.$aperitif.'" and Actif = 1');

        $typeAperitif = $this -> db ->query(
        'SELECT libelletypePlat
        FROM typeaperitif
        WHERE id_typeAperitif  = "'.$aperitif.'"');

       
        foreach ($typeAperitif = result_array() as $donnees){
        echo '<div class="text-center">
                <p class="Satis vert nameMenu">'.$donnees['libelletypePlat'].'</p>
            </div>';
        }
        
        echo '<div class="Satis" style="font-size:20px;">
            <table>';

        foreach ($name = result_array() as $donnees){
            echo'<tr><th><p>'.$donnees['libelleAperitif'].'</p></th><th><p>'.$donnees['prix'].' €</p></th></tr>';
        }            
        echo '</table></div>';
 
    }

}
}

?>