

<style type="text/css">
	.mainContent {background-image: url(../assets/img/pastel-bg.jpg);  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */}	
</style>



<!-- <div class="hands-c" data-bottom="40">
	<img src="../assets/img/hands.png">
</div>
 -->

<div class="grid-elements bottom-left ">
	<div id="elem-1" class="elem">
		<span data-nom="Victoria" style="--tooltip-right: -60%">
		<img src="../assets/img/p1.png">
		</span>
	</div>
	<div id="elem-2" class="elem">
		<span data-nom="Hanna" style="--tooltip-right: 90%">
		<img src="../assets/img/p2.png">
		</span>
	</div>
</div>

<div class="grid-elements bottom-right ">
	<div id="elem-3" class="elem">
		<span data-nom="Sam" style="--tooltip-right: 70%">
		<img src="../assets/img/p3.png">
		</span>
	</div>
	<div id="elem-4" class="elem">
		<span data-nom="Anatole" style="--tooltip-right: 70%">
		<img src="../assets/img/p4.png">
		</span>
	</div>	
</div>

<style type="text/css">

	.grid-elements {position: absolute;display: grid;grid-template-columns: repeat(2,200px);grid-template-rows: 300px}
	.elem {display: flex;position: relative;}

	.elem img{position: fixed;bottom:-100px;transition: bottom 0.6s;transition-timing-function: cubic-bezier(0.7,0,0.3,1);}
	.elem img:hover {bottom:0px;}

	.elem span:after{background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%);content:attr(data-nom);position: absolute;top: 0;right:var(--tooltip-right);padding:5px 15px; color: white;font-family: 'Satisfy', cursive;font-weight: 500;
	transition:top 1s,opacity 1s;transition-timing-function: cubic-bezier(0.7,0,0.3,1);opacity: 0;border-radius: 15px;} 
	.elem span:hover::after {top:-15px;opacity: 1;}

	.bottom-left {bottom: 0;left:250px;}
	.bottom-right {bottom: 0;right:70px;}
</style>



<div id="desktop" class="desktop">
		<span class="desktop-span">
		<img id="desktop-img" src="../assets/img/desktop.png">
		</span>
</div>

<style type="text/css">

	.desktop {position: absolute;top: -10px;right: 0;}
	#desktop-img{transform: rotate(180deg);}
	.desktop-span::before {background-color: white;content:"GRATUIT";position: absolute; border:3px solid #898989;bottom: -15px;left:-15px;padding:5px 10px; color: #a8a8a8;font-family: 'Raleway', sans-serif;font-weight: 800;}

</style>

<div>
	
	<div class="bistro-c">
	<a class="link link--bistro" href="#" data-letters="Bistronomic">Bistronomic</a>
</div>

<div class="bistro-c" >
	<p class="link link--V2" href="#" >
		<span >Bistronomic</span>
	</p>
</div>


<div class="plate-c">
	<div class="plate">
	<svg version="1.0" xmlns="http://www.w3.org/2000/svg"
	 width="200" height="100" viewBox="0 0 1280.000000 776.000000"
	 preserveAspectRatio="xMidYMid meet">
		<g transform="translate(0.000000,776.000000) scale(0.100000,-0.100000)"
		fill="#5686b6" stroke="#5686b6">
			<path d="M5215 7750 c-806 -71 -1516 -352 -2135 -844 -154 -122 -476 -443
			-593 -590 -565 -711 -857 -1540 -857 -2436 0 -1023 386 -1972 1100 -2704 636
			-653 1424 -1039 2350 -1153 203 -25 657 -25 860 0 493 61 906 185 1325 397
			868 439 1544 1194 1884 2102 167 447 241 864 241 1358 0 453 -57 809 -195
			1225 -451 1364 -1641 2377 -3060 2605 -253 41 -693 60 -920 40z m520 -1500
			c1078 -120 1953 -941 2135 -2005 104 -607 -24 -1230 -357 -1740 -102 -155
			-186 -259 -323 -395 -136 -137 -240 -222 -395 -323 -881 -574 -2038 -514
			-2860 150 -197 159 -408 398 -545 618 -24 39 -72 126 -106 195 -470 944 -275
			2085 482 2821 386 374 851 600 1384 673 124 17 457 20 585 6z"/>

			<path d="M10663 7410 c-268 -63 -513 -650 -627 -1500 -84 -628 -131 -1619 -91
			-1925 28 -210 84 -345 206 -495 l59 -72 1 -341 c0 -188 4 -754 8 -1258 8 -910
			9 -916 30 -965 78 -176 297 -219 431 -85 88 88 80 -269 80 3398 l0 3253 -32
			-1 c-18 -1 -47 -4 -65 -9z"/>

			<path d="M11990 7199 c-220 -43 -442 -303 -585 -684 -79 -211 -107 -393 -106
			-685 0 -271 22 -403 92 -547 42 -88 138 -217 188 -252 46 -33 154 -183 205
			-285 141 -285 147 -577 21 -979 l-25 -78 0 -1387 c0 -1373 1 -1387 21 -1432
			82 -182 319 -217 456 -67 78 85 73 -15 73 1502 l0 1351 -34 167 c-48 229 -60
			345 -53 512 11 291 96 492 301 715 133 144 186 233 228 386 19 71 22 103 22
			314 0 264 -16 409 -64 594 -126 486 -345 804 -588 855 -60 12 -88 13 -152 0z"/>

			<path d="M205 7058 c-2 -7 -6 -33 -9 -58 -3 -25 -49 -355 -102 -735 -107 -770
			-108 -797 -60 -951 32 -101 79 -178 187 -307 110 -130 178 -234 217 -333 107
			-268 107 -526 -1 -899 l-32 -110 0 -1380 c0 -1379 0 -1380 21 -1425 31 -68 68
			-106 136 -139 137 -69 300 -13 369 126 l24 48 3 1370 3 1370 -25 130 c-50 264
			-51 276 -50 490 0 195 3 217 27 310 30 110 99 262 153 336 19 26 68 87 109
			136 41 48 91 118 110 154 43 82 75 211 75 304 0 39 -34 304 -74 590 -41 286
			-89 625 -107 753 l-32 232 -50 0 -50 0 7 -227 c5 -192 16 -678 28 -1333 l3
			-145 -90 4 c-49 1 -91 4 -91 5 -1 0 -6 285 -13 631 -6 347 -14 728 -18 848
			l-6 217 -53 0 -54 0 0 -855 0 -855 -78 0 -79 0 -6 173 c-4 94 -7 361 -7 592 0
			231 -3 538 -7 683 l-6 262 -52 0 -52 0 -7 -292 c-3 -161 -11 -545 -17 -853 -6
			-308 -14 -564 -18 -568 -4 -4 -43 -7 -87 -5 l-79 3 3 165 c2 91 7 341 12 555
			5 215 12 526 16 693 l7 302 -47 0 c-29 0 -48 -5 -51 -12z"/>
		</g>
	</svg>
	<span></span>
	</div>
</div>

</div>


<!-- Pastel Message -->
<div class="row-msg">
	<p>Bistronomic</p>
</div>

<style type="text/css">
	.row-msg {display: flex;}
	.row-msg p{background-image: url(../assets/img/pastel-red.png);text-align: center;background-position:50% 50%; background-repeat: no-repeat;background-size: contain;margin:auto;color: #FFFFFF;padding:0.5em 1em;    font-family: 'Playfair Display', serif;font-weight: 900;font-style: italic;  }
</style>

<!-- Arrow -->
<div id="bounce-c">
	<!-- <p>Bienvenue au Bistronomic</p> -->
	<div class="bounce-icon-div">
		<svg class="bounce-icon"  aria-hidden="true" width="30px" height="30px" fill="#FFFFFF" stroke="#FFFFFF" focusable="false" data-prefix="fas" data-icon="arrow-down" class="svg-inline--fa fa-arrow-down fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#FFFFFF" d="M413.1 222.5l22.2 22.2c9.4 9.4 9.4 24.6 0 33.9L241 473c-9.4 9.4-24.6 9.4-33.9 0L12.7 278.6c-9.4-9.4-9.4-24.6 0-33.9l22.2-22.2c9.5-9.5 25-9.3 34.3.4L184 343.4V56c0-13.3 10.7-24 24-24h32c13.3 0 24 10.7 24 24v287.4l114.8-120.5c9.3-9.8 24.8-10 34.3-.4z"></path></svg>
	</div>
</div>



<style type="text/css">

	/* Bounce */
	#bounce-c p{font-size: 1em;}

	.bounce-icon-div {background-image:url(../assets/img/pastel-red.png);background-size: cover;padding: 10px;display: flex;width: 30px;border-radius: 50%;margin: auto;}

	.bounce-icon {animation: bounceY 0.7s ease-in-out infinite; animation-direction: alternate;}

	@keyframes bounceY{
	     from {transform: translateY(3px);}
	     to   {transform: translateY(-3px);}
	}

</style>

<!-- Polygon -->
<div id="row-polygon">
	<button>
      <a href="https://www.lebistronomic.fr" target="_blank" class="text-white" >Accéder au site</a>
  	</button>
</div>

<style type="text/css">

	/* Polygon Style */
	#row-polygon {display: flex;margin-top: 15px;}
	#row-polygon button{background-image:url(../assets/img/pastel-dark-blue.png);background-position:center; background-repeat: no-repeat;margin: auto;clip-path: polygon(0 2%,100% 0,100% 20%,95% 33%,100% 42%,100% 100%,0 100%,0% 30%,6% 2%);font-size: 0.6em;padding: 5px 1.2em;color: white;}

	.bounceX-icon {animation: bounceX 0.7s ease-in-out infinite; animation-direction: alternate;}

	@keyframes bounceX{
	     from {transform: translateX(3px);}
	     to   {transform: translateX(-3px);}
	}

</style>



<div id="load">
	<p>Chargement de la page</p>
	<div class="load-div"><div></div></div>
</div>


<style>
@import url(http://fonts.googleapis.com/css?family=Raleway:400,500,700,900|Dosis:800|Playfair+Display:400,400italic,900italic|Lora:700|Syncopate:700|Roboto+Condensed:300italic|Oswald:700|Pacifico|Satisfy);

a {text-decoration: none;font-size: 2.6em;outline: none;}
p {text-decoration: none;font-size: 2.6em;}
body {z-index: 1;}
button {border:none;outline: none;}

.text-dark-blue {color: #2d3641;}
.text-white {color: #FFFFFF;}


/* Load */
#load {min-height: calc(100vh - 60px);position: absolute;background-color: #4caf50;z-index: 20;width: calc(100% - 230px);top:60px;left:230px; display: none;}

#load p{
	color: white;
	font-family: 'Dosis', sans-serif;
	font-weight: 800;
	font-size: 2em;
	text-align: center;
}
.load-div{
	width: 600px;
	height: 30px;
	background-color: white;
	margin: auto;
	border: 3px solid white;
}
.load-div div{
	width: 100%;
	height: 100%;
	background-color: #4caf50;
	margin: auto;
	transition: width 1.5s;
}

.load-div:hover .load-div div{
	width: 100%;
}



/* Link */
.link {
	overflow: hidden;
	color: #2d3641;
	font-family: 'Dosis', sans-serif;
	font-weight: 800;
	position: relative;
	z-index: 1;
}

.bistro-c {display: flex;z-index: 1;}

.link--bistro {
	text-transform: uppercase;
	font-weight: 900;
	overflow: hidden;
	color: #2d3641;
	padding: 5px 10px;
	border : 2px solid #2d3641;
	font-family: 'Raleway', sans-serif;

}

.link--bistro:hover {
	color: #2d3641;
}


.link--bistro::before {
	content: attr(data-letters);
    position: absolute;
    z-index: 5;
    top:-2px;
    left:-2px;
    overflow: hidden;
    color:#5686b6;
    white-space: nowrap;
    height: 0%;
    -webkit-transition: height 0.4s 0.3s;
    transition: height  0.6s;
    -webkit-transition-timing-function: cubic-bezier(0.7,0,0.3,1);
	transition-timing-function: cubic-bezier(0.7,0,0.3,1);
   	padding: 5px 10px;
   	border: 2px solid transparent;
}

.link--bistro:hover::before {
	height: 100%;
}

.link--V2::after {
	content: '';
	position: absolute;
	height: 5px;
	width: 100%;
	bottom: 0;
	right: 0;
	z-index: 1;
	background: #2d3641;
	-webkit-transform: translate3d(101%,0,0);
	transform: translate3d(101%,0,0);
	-webkit-transition: -webkit-transform 0.5s;
	transition: transform 0.5s;
	-webkit-transition-timing-function: cubic-bezier(0.7,0,0.3,1);
	transition-timing-function: cubic-bezier(0.7,0,0.3,1);
}
.link--V2:hover::after {
	-webkit-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
}



.link--V2 span {
	display: block;
	position: relative;
}

/* Plate */

.plate-c {display: flex;position: relative;margin-top:35px; }
.plate svg {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    -webkit-transition: -webkit-transform 0.8s;
    transition: transform 0.8s;
    position: relative;
}

.plate::before {
    content:"Le Bistronomic";
    position: absolute;
    max-width: 0%;
    font-family: 'Satisfy', cursive;
    font-weight: 700;
    bottom: -1.5em;
    left:1.5em;
    overflow: hidden;
    color: #2d3641;
    white-space: nowrap;
    -webkit-transition: max-width 0.8s;
    transition: max-width  0.8s;
}

.plate svg:hover {
    -webkit-transform: rotate(360deg));
    transform: rotate(360deg);
    fill:#17bf0d;
}
.plate:hover::before {
	max-width:100%;

}


</style>