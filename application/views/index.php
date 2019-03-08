<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Le Bistronomic</title>
		<metsa charset="utf-8">

		<!-- Links -->
		<link href="./css/styleIndex.css" rel="stylesheet" >
		<link href="./css/animate.css" rel="stylesheet" >

		<!-- Polices -->
		<?php include"./link/polices.html" ?>

		<!-- Jquery -->
		<?php include"./link/jquery.html" ?>

	    <!-- Icons -->
	    <link rel="shortcut icon" href="./ico/.ico">

  		<!-- jQuery pour bootstrap -->
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	</head>

	<body>
	<?php include"./php/WP-Nav.php" ?>

		<section id="container_Header" class="fullwidth bg-image">
			<div id="container_text_header">
				<p class="text-center bienvenue white wow fadeInDown" data-wow-duration="2s">Bienvenue au</p>
				<img id="logo" alt="logo" src="./img/logo2.png">
				<p class="text-center lieu white wow fadeInUp" data-wow-duration="2s" >4 avenue Evariste Gallois<br>
				   Morangis, Essonne, Ile-De-France, France<br>
				   Contacter le <span class="vert">01 69 09 80 14</span>
				</p>
			</div>
		</section>
		<section id="container_Event" class="wrapperSix" style="margin: 0px;border-bottom:2px solid #96bf0d">
			
			<div class="C2-C6" style=";margin: 0px;">
				<div class="eventCont">
					<div style="background-size: cover;padding-bottom:70px;position:relative;background: url('./img/pattern.png');margin: auto;"><p class="text-center p-event white" style="font-size: 28px;">Prochain évènement: 
						<?php
							include "./php/connectBDD.php";
							include "./fct/dateFR.php";
							$dateJour = date("Y-m-d");	
							$name = $bdd->query(
						    'SELECT *
							FROM evenement
							WHERE dateEvent > "'.$dateJour.'"
							ORDER BY YEAR(dateEvent) ASC, MONTH(dateEvent) ASC, DAY(dateEvent) ASC LIMIT 1');

						    while ($donnees = $name->fetch()){
						    	echo $donnees['libelleEvent'];echo "  ";echo ' | '.dateFR($donnees['dateEvent']);
						    } 
						    ?></p>
					<p class="SavoirPlusEvent Satis"><a class="white" href="./php/event.php">En savoir plus <i class="fa fa-caret-right white" style="font-size:18px"></i></a></p>

					<img class="img-EventI" src="./img/event.png"></div>
					
				</div>
			</div>
		</section>

		<section id ="container_Presentation" class="wrapperSix">
			<div class="C2-C6 wow zoomIn" data-wow-duration="2s">

				<div id="" class="div2"  >

					<p class="h1">Bistronomic</p>
					<p class="Satis">L'endroit idéal pour un très bon repas</p>
					<hr class="separateur1">
					<p class=" presentationText">
					Nous sommes un restaurant français avec de nombreux <span ><a class="vert" href="./php/event.php">évènements</a></span><br><br>
					Nous vous accueillons : <br>
					Le midi du lundi au vendredi de 12h à 14h <br> 
					Le soir du mercredi au samedi de 19h à 22h <br>
					Possibilité de réservation le dimanche.
					</p>
				</div>

				<div class="div2 " style="display: flex;">
					<div class="C-img-presentation"><img alt="Extérieur logo" src="./img/restaurant/Terrasse.jpg"></div>
						
				</div>
				
			</div>

		</section>

		<hr class="Bistro">

		<p class="text-center h1">Nos Menus</p>
		<section id ="container_Menus" class="wrapperSix">
			
			<div class="C2-C6">
					<div class="div3 text-center">
						<div class="MenuCont">
						<p class="Satis  menuNom">Formule Express Déjeuner 14,50€</p>
						<p class="menuSize">Buffet d'entrée et de dessert à volonté et Plat ou Grillade du jour</p>
						</div>
					</div>
					<div class="div3 text-center">
						<div class="MenuCont">
						<p class="Satis menuNom">Menu 21€</p>
						<p class="menuSize">Entrée<br>Plat<br>Dessert</p>
						</div>
					</div>



					<div class="div3 text-center">
						<div class="MenuCont">
						<p class="Satis  menuNom">Menu Gourmet 29€</p>
						<p class="menuSize">Entrée<br>Plat<br>Dessert</p>
						</div>
					</div>	
									
					<div class="div3 text-center">
						<div class="MenuCont">
						<p class="Satis  menuNom">Menu Dégustation 39€</p>
						<p class="menuSize">Un voyage gastronomique où notre chef peaufine votre repas</p>
						</div>
					</div>	

					<div class="div3 text-center">
						<div class="MenuCont">
						<p class="Satis menuNom">Les Salades</p>
						<p class="menuSize">Un sélection sur mesure de salades</p>
						</div>
					</div>

					<div class="div3 text-center">
						<div class="MenuCont">
						<p class="Satis  menuNom">À la carte</p>
						<p class="menuSize">Une sélection de plats uniques</p>
						</div>
					</div>					

				<div class="ButtMenuCont">
					<a href="./php/menus.php">
						<button class="buttMenu">En savoir plus</button>
					</a>
				</div>

				<p class="speMaison vert text-center">La spécialité de la maison</p>
				<div style="position: relative;width: 100%"><img id="speIMG" src="./img/specialite.jpg">	
					<p class="speText text-center Satis" > Le Bistronomic au foie gras 17€</p>
				</div>
				
			</div>

		</section>
		<hr class="Bistro">
		<p class="text-center h1">Le coin détente</p>
		<section id ="container_Detente" class="wrapperSix">
			
			<div class="C2-C6">

					<div class="div2 text-center">
						<div class="MenuCont">
							
						<p class="Satis menuNom">Les cocktails</p>
						<p class="">Des cocktails pour vous voyager</p>
						<img class="img-MenuCont" src="./img/coktail.png">
						</div>
					</div>
					<div class="div2 text-center">
						<div class="MenuCont">
						<p class="Satis menuNom">Les Assiettes à partager</p>
						<p class="">Des Assiettes qualitatives à découvrir à plusieurs</p>
						<img class="img-MenuCont" src="./img/planche.png">	
						</div>
					</div>					
			

			<div class="ButtMenuCont"><a href="./php/detente.php">
				<button class="buttMenu">En savoir plus</button>
				</a>
			</div>
			</div>


		</section>

		<hr class="Bistro">
		<section id ="container_Plats">
			<div class="C1-C7  wow fadeInUp" data-wow-duration="2s" >
			<?php
				include "./php/connectBDD.php";	
				$accueil = $bdd->query(
			    'SELECT *
			    FROM plat_accueil');

			    while ($donnees = $accueil->fetch()){
			    	echo '				
			    	<div id="" class="div4">
					<div style="position: relative;">
					<img class="imgPlats" src=".'.$donnees['url_accueil'].'">
					<div class="infosPlats">
						<p class="cursor AutoMarg text-center white Satis">'.$donnees['libellePlatAccueil'].'</p>
					</div>
					</div>
				</div>';
			    } 
			?>

			</div>
		</section>
		<p class="text-center h1 MgT15">Quelques avis..</p>
		<section id ="container_Avis" class="wrapperSix">
			
			<div class="C2-C6">

				<div id="" class="div2">
					
					<p class="nameAvis text-center">Isabelle</p>
					<hr class="separateur2">
					<p class="avis">" C'était excellent les amis, tout était copieux. Cuisine au top, je vous conseille le restaurant.<br> Je me suis laissée tenter par le menu gourmet, un vrai delice pour mes papilles. "</p>
					<p class="publie">publié sur Facebook</p>
				</div>

				<div class="div2">
					<p class=" nameAvis text-center">Pierre</p>
					<hr class="separateur2">
					<p class="avis">" Nous y sommes allés un soir en famille et nous y avons vraiment très bien mangés, avec des produits frais bien cuisinés et un rapport qualité prix excellent. <br>
					Cadre agréable et accueil chaleureux, avec une patronne très professionnelle. "</p>
					<p class="publie">publié sur TripAdvisor</p>
				</div>
				</div>
				
			</div>
		</section>

		<section id ="container_Restaurants ">
			<p class="text-center h1 MgT15">Notre Restaurant</p>
			<div class="C1-C7  wow fadeInUp" style="margin:5px 0px;" data-wow-duration="2s">
			<div class="div2">
				<img class="img-resto" src="./img/restaurant/Resto5.png">
			</div>
			<div class="div2">
				<img class="img-resto"  src="./img/restaurant/Resto4.png">
			</div>
			</div>
		</section>

		<section id ="container_Footer">
			<div class="C1-C7">

				<div id="footer" class="text-center AutoMarg">
					<img src="./img/logo.png" style="box-shadow: none;">
					<p class="itineraire Satis"><i class="fa fa-map-signs" style="font-size:18px;margin: 0px 3px;color: #333"></i><a href="https://www.google.com/maps/dir//Le+bistronomic/data=!4m8!4m7!1m0!1m5!1m1!1s0x47e5d8a0ce7fce2d:0x9b10079fbe79f60f!2m2!1d2.3363102!2d48.693790199999995">Où sommes nous ?</a></p>
					<p class="itineraire"><span class="Satis">Nos Sponsors:</span><a target="_blank" href=""> 'Vins de chateau'</a></p>
				</div>
				
			</div>
		</section>
		<section id ="container_Icons">
					<div class="C1-C7">
						<div class="AutoMarg" style="flex: none;">
							<span class="stack itineraire Satis" style="font-size: 18px;">Notre Facebook
								<a href="https://fr-fr.facebook.com/"><i class="fa facebook" style="margin-left: 5px;"></i></a>
							</span>

						</div>
					
					</div>
		</section>
 	<script src="./js/wow.min.js"></script>
    <script>
              new WOW().init();
              </script>



			
	</body>

	</html>