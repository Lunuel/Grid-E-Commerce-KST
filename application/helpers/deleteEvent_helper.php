<?php
if(isset($_POST['deleteEvent'])){

	 	$idEvent = $_POST['idEvent'];
		$nb_modifs = $bdd->exec('DELETE FROM evenement WHERE id_event = "'.$idEvent.'"');

		header('Location: '.$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'].'');
}
