<?php


function afficherAperitif($aperitif){

	include "../php/connectBDD.php";	
	$CocktailA = "TAPR1";
	$CocktailSA = "TAPR3";
	$Planche = "TAPR2";

    if ($aperitif == $CocktailA || $aperitif == $CocktailSA) {
        $name = $bdd->query(
        'SELECT libelleAperitif,ingredients,url,prix
        FROM aperitif NATURAL JOIN typeAperitif
        WHERE id_typeAperitif  = "'.$aperitif.'"');

        $typeAperitif = $bdd->query(
        'SELECT *
        FROM typeAperitif
        WHERE id_typeAperitif  = "'.$aperitif.'"');

        while ($donnees = $typeAperitif ->fetch()){
        echo '<div class="text-center">
                <p class="Satis vert nameMenu">'.$donnees['libelletypePlat'].'</p>
            </div>';
        }
        echo '<div class="C-Cocktail">'; 
        while ($donnees = $name->fetch()){ 

        echo'
        
        <div class="div2 div2T C-Cocktail-In">
            <div class="grid-col1" style="display:flex;">
                <img src="..'.$donnees['url'].'"  
            style="box-shadow: none;margin:auto 0px;">
            </div>
            <div class="grid-col2">
                <p class="h1" style="font-size:17px;">'.$donnees['libelleAperitif'].'</p>
                <p style="margin:0px 2px;">'.$donnees['ingredients'].'</p>
                <p class="hPrice">'.$donnees['prix'].' €</p>
            </div>
        </div>';         

    }
    echo "</div>";
    }
    else{
        $name = $bdd->query(
        'SELECT libelleAperitif,ingredients,url,prix
        FROM aperitif NATURAL JOIN typeAperitif
        WHERE id_typeAperitif  = "'.$aperitif.'"');

        $typeAperitif = $bdd->query(
        'SELECT libelletypePlat
        FROM typeAperitif
        WHERE id_typeAperitif  = "'.$aperitif.'"');

        while ($donnees = $typeAperitif ->fetch()){
        echo '<div class="text-center">
                <p class="Satis vert nameMenu">'.$donnees['libelletypePlat'].'</p>
            </div>';
        }
        

        while ($donnees = $name->fetch()){
            echo '<div class="C-Detente-In">';
            
        echo'
        <div class="grid-col1">
        <img src="..'.$donnees['url'].'"  
        style="box-shadow: none;margin:auto 0px;">
        </div>
        <div class="grid-col2">
            <p class="h1" style="font-size:17px;">'.$donnees['libelleAperitif'].'</p>
            <p style="margin:2px 0px;">'.$donnees['ingredients'].'</p>
            <p class="hPrice">'.$donnees['prix'].' €</p>
        </div>';   echo "</div>";

        }
 
    }

}

 ?>