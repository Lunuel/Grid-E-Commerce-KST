<?php
	function dateFR($dateBDD){

			$date = date_parse($dateBDD);
		    $jour = $date['day'];
		    if ($jour < 10) {
		    	$jour = '0'.$jour;
		    }
		    $mois = $date['month'];
		    if ($mois < 10) {
		    	$mois = '0'.$mois;
		    }
		    $annee = $date['year'];
		    return $jour.'/'.$mois.'/'.$annee;

	}
		function dateFRMois($dateBDD){

			$date = date_parse($dateBDD);
		    $jour = $date['day'];
		    if ($jour < 10) {
		    	$jour = '0'.$jour;
		    }
		    $tabmois = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');

		    $mois = $tabmois[$date['month']-1];
		    $annee = $date['year'];
		    return $jour.' '.$mois.' '.$annee;

	}



?>