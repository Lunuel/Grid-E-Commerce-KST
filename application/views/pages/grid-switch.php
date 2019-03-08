<style type="text/css">
	.mainContent {background-image: url(../assets/img/pastel-bg.jpg);  background-position: center;background-repeat: no-repeat;background-size: cover;}
</style>

<h2>Marketplace</h2>

<div class="gd-items col-items gd-3 md-gd-1 text-white bg-dark-blue max-1000">
		<div class="item">
			<div class="bundle-content v-center">
				<div class="bundle-overlay">
					<p class="title-overlay">Nom de la catégorie</p>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="bundle-content col-items">
				<div class="bundle-btn v-center">
					<button class="btn-grid-switch" id="btn-grid-switch">Turn-ON [ Row to Column ]</button>
					<p class="text-center v-center">State : <span id="state-grid-1">Column<span></p>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="bundle-content col-items">
				<div class="bundle-btn">
					<button class="btn-grid-switch" id="btn-grid-end-row">Turn-ON [ End Row to End Col ]</button>
					<p class="text-center v-center">State : <span id="state-grid-2">End Column<span></p>
				</div>
			</div>
		</div>		
	</div>


	<style type="text/css">
		.btn-grid-switch{
		    border: 3px solid #fff;
		    display: inline-block;
		    padding: 2px;
		    position: relative;
		    text-align: center;
		    transition: background 600ms ease, color 600ms ease;background-color: white;
		}



		input[type="radio"].toggle {
		  display: block;
		}
		input[type="radio"].toggle + label {
		  cursor: pointer;
		  min-width: 60px;
		  color: white;
		  font-size: 60%;
		}
		input[type="radio"].toggle + label:hover {
		  background: none;
		  color: #fff;
		}
		input[type="radio"].toggle.toggle + label:after {
		  background: #fff;
		  content: "";
		  height: 100%;
		  position: absolute;
		  top: 0;
		  -webkit-transition: left 200ms cubic-bezier(0.77, 0, 0.175, 1);
		  transition: left 200ms cubic-bezier(0.77, 0, 0.175, 1);
		  width: 100%;
		  z-index: 1;
		}
		input[type="radio"].toggle.toggle-left + label {
		  border-right: 0;
		}
		
		input[type="radio"].toggle.toggle-left + label:after {
		  left: 100%;
		}
		
		input[type="radio"].toggle.toggle-right + label {
		  margin-left: -5px;
		}

		input[type="radio"].toggle.toggle-right + label:after {
		  left: -100%;
		}
		input[type="radio"].toggle:checked + label {
		  cursor: default;
		  color: #fff;
		}
		input[type="radio"].toggle.toggle-right + label:after {
		  left: 0;
		}

		input[type="radio"].toggle.toggle-left + label:after {
		  left: 0;
		}

		
	</style>

<h1>Grid Switch Auto fit</h1>

<div data-maxwidth="300" class="gd-items gd-card-col auto-fit col-items sm-col-items p-3 bg-dark-blue grid-switchable" style="--bg-items:#FFFFFF;" >
	<div class="item">
		<!-- <div><div class="bundle-img"><img src="../assets/img/product-5.jpg"></div></div> -->
		<div class="bundle-img">
			<img src="../assets/img/product-5.jpg">
		</div>
		<div class="bundle-hr">
			<hr class="gd-hr" style="--hr-color:#00263afa">
		</div>
		<div class="bundle-content">
			<div class="bundle-header">
				<div class="bundle-libelle">
					<p class="libelle">At vero eos et accusamus et iusto odio dignissimos</p>
				</div>
			</div>
			<div class="bundle-list">
				<ul>
					<li>debitis aut rerum necessitatibus saepe </li>
					<li>vel illum qui dolorem</li>
					<li>quidem rerum facilis est et expedita</li>
					<li>tenetur a sapiente delectus</li>
				</ul>
			</div>
			<div class="bundle-footer">
				<div class="bundle-star-count">
	                <i class="fa fa-star"></i>
	                <i class="fa fa-star"></i>
	                <i class="fa fa-star"></i>
	                <i class="fa fa-star"></i>
	                <i class="fa fa-star" style="color: #ccc;"></i>
	                <span>5 avis</span>
	            </div>
	            <div class="bundle-price">
					<p class="price">64,90 €</p>
				</div>
				<div class="bundle-btn">
					<button class="btn-addtocart" href="#" >
						<span>Ajouter au panier</span>
					</button>
				</div>
			</div>	
		</div>		
	</div>

	<div class="item-gd p-2">
		<div class="bundle-content v-center text-white bg-dark-blue">
			<div class="bundle-header">
				<div class="bundle-libelle">
					<p class="libelle text-center">Esse quam nihil molestiae hudro kolina Esse quam nihil molestiae hudro kolina</p>
				</div>	
		   	</div>	
		</div> 
		<div class="bundle-content">
			<div class="bundle-img">
				<img src="../assets/img/product-2.jpg">
			</div>	
		</div> 	
	</div>

	<div class="item-gd p-2">
		<div class="bundle-content">
			<div class="bundle-img">
				<img src="../assets/img/product-3.jpg">
			</div>	
		</div> 
			<div class="bundle-content">
				<div class="bundle-header">
					<div class="bundle-libelle">
						<p class="libelle">Ut enim ad minima veniam, quis nostrum exercitationem</p>
					</div>
					<hr class="hr">
				</div>
				<div class="bundle-list">
					<ul>
						<li>quidem rerum facilis</li>
						<li>omnis voluptas assumenda est, omnis dolor </li>
						<li> harum quidem rerum</li>
					</ul>
				</div>
				<div class="bundle-footer">
					<div class="bundle-star-count">
		                  <i class="fa fa-star"></i>
		                  <i class="fa fa-star"></i>
		                  <i class="fa fa-star"></i>
		                  <i class="fa fa-star"></i>
		                  <i class="fa fa-star" style="color: #ccc;"></i>
		                  <span>5 avis</span>
		            </div>
		            <div class="bundle-price">
						<p class="price">64,90 €</p>
					</div>
					<div class="bundle-btn">
						<button class="btn-addtocart" href="#" >
							<span>Ajouter au panier</span>
						</button>
					</div>
				</div>	
			</div>	
	</div>

		<div class="item">
			<div class="bundle-img"><img src="../assets/img/product-2.jpg"></div>
			<div class="bundle-content">
				<div class="bundle-header">
					<div class="bundle-libelle">
						<p class="libelle">Neque porro quisquam est, qui dolorem ipsum</p>
					</div>	
				</div>	
				<div class="bundle-list">
					<ul>
						<li>Style industriel affirmé</li>
						<li>quidem rerum facilis</li>
						<li>Se marie parfaitement avec une ampoule vintage</li>
					</ul>
				</div>
				<div class="bundle-footer">
					<div class="bundle-star-count">
		                  <i class="fa fa-star"></i>
		                  <i class="fa fa-star"></i>
		                  <i class="fa fa-star"></i>
		                  <i class="fa fa-star" style="color: #ccc;"></i>
		                  <i class="fa fa-star" style="color: #ccc;"></i>
		                  <span>5 avis</span>
		            </div>
		            <div class="bundle-price">
						<p class="price">64,90 €</p>
					</div>
					<div class="bundle-btn">
						<button class="btn-addtocart" href="#" >
							<span>Ajouter au panier</span>
						</button>
					</div>
				</div>	
			</div>	
		</div>	
		<div class="item">
			<div class="bundle-content">
				<div class="bundle-header">
					<div class="bundle-libelle">
						<p class="libelle">Ut enim ad minima veniam, quis nostrum exercitationem</p>
					</div>
				</div>

				<div class="bundle-footer">
		            <div class="bundle-price">
						<p class="price text-center">64,90 €</p>
					</div>
					<div class="bundle-list">
						<ul>
							<li>Style industriel affirmé</li>
							<li>Effet très décoratif</li>
						</ul>
					</div>
				</div>	

			</div>	
		</div>	
		<div class="item">
			<div class="bundle-img"><img src="../assets/img/product-1.jpg"></div>
			<div class="bundle-content">
				<div class="bundle-header">
					<div class="bundle-libelle">
						<p class="libelle">Esse quam nihil molestiae consequatur</p>
					</div>
				</div>
				<div class="bundle-list">
					<ul>
						<li>Style industriel affirmé</li>
						<li>Effet très décoratif</li>
						<li>Se marie parfaitement avec une ampoule vintage</li>
					</ul>
				</div>
				<div class="bundle-footer">
					<div class="bundle-star-count">
		                  <i class="fa fa-star"></i>
		                  <i class="fa fa-star"></i>
		                  <i class="fa fa-star"></i>
		                  <i class="fa fa-star"></i>
		                  <i class="fa fa-star" style="color: #ccc;"></i>
		                  <span>5 avis</span>
		            </div>
		            <div class="bundle-price">
						<p class="price">64,90 €</p>
					</div>
					<div class="bundle-btn">
						<button class="btn-addtocart" href="#" >
							<span>Ajouter au panier</span>
						</button>
					</div>
				</div>	
			</div>
		</div>	
		<div class="item">
			<div class="bg-green layer"></div>
			<!-- <div class="bundle-img"><img src="../assets/img/product-5.jpg"></div> -->
			<div class="bundle-content text-white">
				<div class="bundle-header">
					<div class="bundle-libelle">
						<p class="libelle">Sed ut perspiciatis unde omnis iste natus error</p>
					</div>
					<hr class="hr">
				</div> 
				<div class="bundle-text">
					<p class="text-center">Vos commandes bien préparées, vite emportées</p>
				</div>
				<div class="bundle-footer">
					<div class="bundle-more">
						<p class="text-right"><a class="more" href="#">En savoir plus <i class="fas fa-angle-double-right"></i></a></p>
					</div>
				</div>	
			</div>	
		</div>	
		<div class="item">
			<div class="bundle-img">
				<img src="https://rawcdn.githack.com/leroymerlin-lrm/media/v3/products/hp/79899890.jpg">
			</div>
			<div class="bundle-content row-items md-col">
				<div class="bundle-header">
					<div class="bundle-libelle">
						<p class="libelle">Chaise de bureau</p>
					</div>	
					<div class="bundle-star-adding">
			            <i class="far fa-star" style="color: #FFA300"></i>
			            <span>Déposer le premier avis</span>
			        </div>
			    </div> 
		        <div class="bundle-header">
					<div class="bundle-price">
						<p class="price">164,90 €</p>
						<p class="eco-price">
							dont 1.15€ éco-part. au recyclage des meubles
						</p>
					</div>	
				</div>	
			</div>
		</div>
	</div>

	<h1>Grid Switch</h1>
	<div class="gd-items gd-card-col col-items gd-4 xl-gd-4 lg-gd-3  md-gd-2 sm-gd-1 sm-col-items p-3 grid-switchable bg-dark-blue"  style="--bg-items:#FFFFFF;background-color: #00c775a8;" >
		<div class="item">
			<div class="bundle-img"><img src="../assets/img/product-4.jpg"></div>
			<div class="bundle-content">
				<div class="bundle-header">
					<div class="bundle-libelle">
						<p class="libelle">Ut enim ad minima veniam, quis nostrum exercitationem</p>
					</div>
				</div>
				<div class="bundle-list">
					<ul>
						<li>quidem rerum facilis</li>
						<li>omnis voluptas assumenda est, omnis dolor </li>
						<li> harum quidem rerum</li>
					</ul>
				</div>
				<div class="bundle-footer">
					<div class="bundle-star-count">
		                  <i class="fa fa-star"></i>
		                  <i class="fa fa-star"></i>
		                  <i class="fa fa-star"></i>
		                  <i class="fa fa-star"></i>
		                  <i class="fa fa-star" style="color: #ccc;"></i>
		                  <span>5 avis</span>
		            </div>
		            <div class="bundle-price">
						<p class="price">64,90 €</p>
					</div>
					<div class="bundle-btn">
						<button class="btn-addtocart" href="#" >
							<span>Ajouter au panier</span>
						</button>
					</div>
				</div>	
			</div>
		</div>	
		<div class="item">
			<div class="bundle-img"><img src="../assets/img/product-2.jpg"></div>
			<div class="bundle-content">
				<div class="bundle-header">
					<div class="bundle-libelle">
						<p class="libelle">Neque porro quisquam est, qui dolorem ipsum</p>
					</div>	
				</div>	
				<div class="bundle-list">
					<ul>
						<li>Style industriel affirmé</li>
						<li>quidem rerum facilis</li>
						<li>Se marie parfaitement avec une ampoule vintage</li>
					</ul>
				</div>
				<div class="bundle-footer">
					<div class="bundle-star-count">
		                  <i class="fa fa-star"></i>
		                  <i class="fa fa-star"></i>
		                  <i class="fa fa-star"></i>
		                  <i class="fa fa-star" style="color: #ccc;"></i>
		                  <i class="fa fa-star" style="color: #ccc;"></i>
		                  <span>5 avis</span>
		            </div>
		            <div class="bundle-price">
						<p class="price">64,90 €</p>
					</div>
					<div class="bundle-btn">
						<button class="btn-addtocart" href="#" >
							<span>Ajouter au panier</span>
						</button>
					</div>
				</div>	
			</div>	
		</div>	
		<div class="item">
			<div class="bundle-content">
				<div class="bundle-header">
					<div class="bundle-libelle">
						<p class="libelle">Ut enim ad minima veniam, quis nostrum exercitationem</p>
					</div>
				</div>

				<div class="bundle-footer">
		            <div class="bundle-price">
						<p class="price text-center">64,90 €</p>
					</div>
					<div class="bundle-list">
						<ul>
							<li>Style industriel affirmé</li>
							<li>Effet très décoratif</li>
						</ul>
					</div>
				</div>	

			</div>	
		</div>	
	<div class="item">
		<div class="bundle-img"><img src="../assets/img/product-1.jpg"></div>
		<div class="bundle-content">
			<div class="bundle-header">
				<div class="bundle-libelle">
					<p class="libelle">Esse quam nihil molestiae consequatur</p>
				</div>
			</div>
			<div class="bundle-list">
				<ul>
					<li>Style industriel affirmé</li>
					<li>Effet très décoratif</li>
					<li>Se marie parfaitement avec une ampoule vintage</li>
				</ul>
			</div>
			<div class="bundle-footer">
				<div class="bundle-star-count">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star" style="color: #ccc;"></i>
                    <span>5 avis</span>
	            </div>
	            <div class="bundle-price">
					<p class="price">64,90 €</p>
				</div>
				<div class="bundle-btn">
					<button class="btn-addtocart" href="#" >
						<span>Ajouter au panier</span>
					</button>
				</div>
			</div>	
		</div>
	</div>	
</div>


<h1>Grid Switch Grid Inner</h1>

<div class="gd-items gd-card-col col-items gd-4 xl-gd-4 lg-gd-3  md-gd-2 sm-gd-1 sm-col-items p-3 grid-switchable bg-dark-blue"  style="--bg-items:#FFFFFF;background-color: #00c775a8;" >
	<div class="item-gd p-2">
		<div class="item-gd">
			<div class="bundle-content">
				<div class="bundle-header">
					<div class="bundle-libelle">
						<p class="libelle">Esse quam nihil molestiae hudro kolina</p>
					</div>	
					<div class="bundle-star-adding">
			      		<i class="far fa-star" style="color: #FFA300"></i>
			       		<span>Déposer le premier avis</span>
			       	</div>
			    </div>
			    <div class="bundle-footer">
			        <div class="bundle-price">
						<p class="price">64,90 €</p>
					</div>
					<div class="bundle-btn">	
						<button class="btn-addtocart" href="#" >
							<span>Add to cart</span>
						</button>
					</div>
				</div>	
			</div> 
		</div>
		<div class="item bg-dark-blue">
			<div class="bundle-content v-center text-white">
				<div class="bundle-header">
					<div class="bundle-libelle">
						<p class="libelle text-center">Esse quam nihil molestiae hudro kolina</p>
					</div>	
		    	</div>	
		    </div> 
		</div>
	</div>
	<div class="item-gd p-2">
		<div class="bundle-content v-center text-white bg-dark-blue">
			<div class="bundle-header">
				<div class="bundle-libelle">
					<p class="libelle text-center">Esse quam nihil molestiae hudro kolina Esse quam nihil molestiae hudro kolina</p>
				</div>	
		   	</div>	
		</div> 
		<div class="bundle-content">
			<div class="bundle-img">
				<img src="../assets/img/product-2.jpg">
			</div>	
		</div> 	
		<div class="bundle-content">
			<div class="bundle-img">
				<img src="../assets/img/product-2.jpg">
			</div>	
		</div> 
	</div>	
</div>

<style type="text/css">
	.row-items .item-gd {grid-auto-flow: column;grid-template-rows: none;}

</style>
