<h1>Grid Mini Card</h1>

<div class="gd-mini-card gd-items col-items gd-3 md-gd-2 sm-gd-1 max-1000">
	<div class="item">
		<div class="bundle-img bundle-img--rectangle" style="background-image: url(https://cdn.manomano.com/files/homepage/slider/OP_FR_OutiAtel_Slider_Desk.jpg);">
			<!-- <img src="../assets/img/song-1.jpg"> -->
			</div>
		<div class="bundle-content">
			<p>Nouveau son de Rémy sur Spotify</p>
		</div>	
	</div>
	<div class="item">
		<div class="bundle-img bundle-img--rectangle" style="background-image: url(https://cdn.manomano.com/files/homepage/news/380x380_rangement_atelier2.jpg);">
		</div>
		<div class="bundle-content">
			<p>Nouveau son de Lorage sur Spotify</p>
		</div>	
	</div>
	<div class="item">
		<div class="bundle-img bundle-img--rectangle" style="background-image: url(https://cdn.manomano.com/files/homepage/news/Bloc_Une_DuluxChantier.jpg);">
			<!-- <img src="../assets/img/song-3.jpg"> -->
		</div>
		<div class="bundle-content">
			<p>Nouveau son de Rémy sur Spotify, Mouv exception</p>
		</div>	
	</div>
</div>


<h1>Grid Image Overflow</h1>

	
<!-- Grid image overflow -->
<style type="text/css">
	.container-1 {width: 100%;position: relative;display: flex;}
</style>


<div class="container-1 poly-5 layer-colored-11">
	<div style="padding:0.5em;">
		<div class="gd-items col-items gd-2 sm-gd-1 max-1000" style="--bg-items:#FFFFFF;" id="gd-card-img-overflow">
			<div class="item height-auto">
				<div class="bundle-img bundle-img-overflow" style="background: url(../assets/img/comic-bg-yellow.jpg);">
					<img src="../assets/img/item-1.png">
				</div>
				<div class="bundle-content">
					<div class="bundle-header">
						<div class="bundle-text">
						<p class="text-justify">Dans la saison 7, prenez d'assaut le ciel et les pistes ! Plus vous jouez, plus vous obtenez de récompenses. Accomplissez les défis hebdomadaires pour monter plus vite en niveau et déverrouiller des tenues, des revêtements, des emotes, des compagnons, des objets cosmétiques exclusifs et plus encore.</p>
						</div>
					</div>	
					<div class="bundle-btn">
					<button class="link btn btn-1 btn-1c" href="#" >
						<span>Devenir un héros</span>
					</button>
					</div>
				</div>
			</div>
			<div class="item height-auto">
				<div class="bundle-img bundle-img-overflow" style="background: url(../assets/img/comic-bg-yellow.jpg);">
					<img src="../assets/img/item-2.png">
				</div>
				<div class="bundle-content">
					<div class="bundle-header">
						<div class="bundle-text">
							<p class="text">Dans la saison 7, prenez d'assaut le ciel et les pistes ! Plus vous jouez, plus vous obtenez de récompenses.</p>
						</div>
					</div>
					<div class="bundle-btn">
						<button class="link btn btn-1 btn-1c" href="#" >
							<span>Devenir un professionel</span>
						</button>
					</div>
				</div>
			</div>	
			<div class="item height-auto">
				<div class="bundle-img bundle-img-overflow" style="background: url(../assets/img/comic-bg-yellow.jpg);">
					<img src="../assets/img/item-3.png">
				</div>
				<div class="bundle-content">
					<div class="bundle-header">
						<div class="bundle-text">
						<p class="text">Dans la saison 7, prenez d'assaut le ciel et les pistes ! Plus vous jouez, plus vous obtenez de récompenses. Accomplissez les défis hebdomadaires pour monter plus vite en niveau et déverrouiller des tenues, des revêtements, des emotes, des compagnons, des objets cosmétiques exclusifs et plus encore.</p>
						</div>
					</div>
					<div class="bundle-btn">
						<button class="link btn btn-1 btn-1c" href="#" >
							<span>En savoir plus</span>
						</button>
					</div>
				</div>	
			</div>
			<div class="item height-auto">
				<div class="bundle-img bundle-img-overflow" style="background: url(../assets/img/comic-bg-yellow.jpg);">
					<img src="../assets/img/item-5.png">
				</div>
				<div class="bundle-content">
					<div class="bundle-header">
						<div class="bundle-text">
							<p class="text text-center">Dans la saison 7, prenez d'assaut le ciel et les pistes ! Plus vous jouez, plus vous obtenez de récompenses. Accomplissez les défis hebdomadaires.</p>
						</div>
					</div>
					<div class="bundle-btn">
						<button class="link btn btn-1 btn-1c" href="#" >
							<span>Devenir un cyborg</span>
						</button>
					</div>
				</div>	
			</div>	
		</div>

	</div>
</div>




<style>

#section6 {max-width: 600px;margin: auto;color: white;}
#section6 .item{background-color: transparent;}

/* General button style (reset) */
.btn {
	border: none;
	font-family: inherit;
	font-size: inherit;
	color: inherit;
	background: none;
	cursor: pointer;
	display: inline-block;
	text-transform: uppercase;
	letter-spacing: 1px;
	font-weight: 700;
	outline: none;
	position: relative;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
}

.btn:after {
	content: '';
	position: absolute;
	z-index: -1;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
}

/* Pseudo elements for icons */
.btn:before,
.icon-heart:after,
.icon-star:after,
.icon-plus:after,
.icon-file:before {
	font-family: 'Dosis', sans-serif;
	speak: none;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	position: relative;
	-webkit-font-smoothing: antialiased;
}



/* Button 1 */
.btn-1 {
	border: 3px solid #fff;
	color: #fff;
	background-color:#2d3641; 
	z-index: 1;
}


.btn-1c::after {
	width: 0%;
	height: 100%;
	top: 0; 
	left: 0;
	background: #fff;
	z-index: -1;
}

.btn-1c:hover,
.btn-1c:active {
	color: #2d3641 !important;
}

.btn-1c:hover:after,
.btn-1c:active:after {
	width: 100%;
}

</style>
