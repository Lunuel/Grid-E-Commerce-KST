<?php
function afficherAperitif($aperitif){

	include "../php/connectBDD.php";	
	$CocktailA = "TAPR1";
	$CocktailSA = "TAPR3";
	$Planche = "TAPR2";
    $Salade = "TAPR4";

    if ($aperitif == $CocktailA || $aperitif == $CocktailSA) {
        $name = $bdd->query(
        'SELECT libelleAperitif,ingredients,url,prix
        FROM aperitif NATURAL JOIN typeaperitif
        WHERE id_typeAperitif  = "'.$aperitif.'" and Actif = 1 ORDER BY libelleAperitif');

        $typeAperitif = $bdd->query(
        'SELECT *
        FROM typeaperitif
        WHERE id_typeAperitif  = "'.$aperitif.'"');

        while ($donnees = $typeAperitif ->fetch()){
        echo '<div class="text-center">
                <p class="Satis vert nameMenu">'.$donnees['libelletypePlat'].'</p>
            </div>';
        }
        echo '<div class="C-Cocktail">'; 
        while ($donnees = $name->fetch()){ 

        echo'
        
        <div class="div2 C-Cocktail-In">
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
        $name = $bdd->query(
        'SELECT libelleAperitif,ingredients,url,prix
        FROM aperitif NATURAL JOIN typeaperitif
        WHERE id_typeAperitif  = "'.$aperitif.'" and Actif = 1');

        $typeAperitif = $bdd->query(
        'SELECT libelletypePlat
        FROM typeaperitif
        WHERE id_typeAperitif  = "'.$aperitif.'"');

        while ($donnees = $typeAperitif ->fetch()){
        echo '<div class="text-center">
                <p class="Satis vert nameMenu">'.$donnees['libelletypePlat'].'</p>
            </div>';
        }
        

        while ($donnees = $name->fetch()){
            echo '<div class="C-Detente-In">';
            
        echo'
        <div>
            <p class="h1" style="font-size:17px;">'.$donnees['libelleAperitif'].' '.$donnees['prix'].' €</p>
            <p style="margin:2px 0px;text-align:justify;">'.$donnees['ingredients'].'</p>
        </div>';   echo "</div>";

        }
    }
    else{
        $name = $bdd->query(
        'SELECT libelleAperitif,ingredients,url,prix
        FROM aperitif NATURAL JOIN typeaperitif
        WHERE id_typeAperitif  = "'.$aperitif.'" and Actif = 1');

        $typeAperitif = $bdd->query(
        'SELECT libelletypePlat
        FROM typeaperitif
        WHERE id_typeAperitif  = "'.$aperitif.'"');

        while ($donnees = $typeAperitif ->fetch()){
        echo '<div class="text-center">
                <p class="Satis vert nameMenu">'.$donnees['libelletypePlat'].'</p>
            </div>';
        }
        
        echo '<div class="Satis" style="font-size:20px;">
            <table>';

        while ($donnees = $name->fetch()){
            echo'<tr><th><p>'.$donnees['libelleAperitif'].'</p></th><th><p>'.$donnees['prix'].' €</p></th></tr>';
        }            
        echo '</table></div>';
 
    }

}

 ?>