<?php
	require_once 'includes/header.php';
?>
<script src="assets/snow.js"></script>
<div class="arriere-plan">
	<canvas id="sky"></canvas>
	<div class="navbar">
		<div class="navitem"><img class="logo" src="images/Logo.png" /></div>
		<div class="espace"></div>
		<div class="active navitem">Home</div>
		<div class="navitem">Site Web</div>
		<div class="navitem">Hebergement</div>
		<div class="navitem">Application</div>
		<div class="navitem">referencement</div>
		<div class="navitem">Contact</div>
	</div>
	<div class="slider">
		<div class="owl-carousel owl-theme">
			 <div class="item">
			 	<h1>Créer ton site en 3 étapes</h1>
			 </div>
			 <div class="item">
			 	<h1>Créer ton site en 3 étapes</h1>
			 	
			 	
			 </div>
			 <div class="item">
			 	<h1>Créer ton site en 3 étapes</h1>
			 	
			 	
			 </div>			 
		</div>
	</div>
		<img class="clouds" src="images/header-clouds.png">
</div>
<div class="actions">
	<div class="action">
		<img src="images/votresite.svg">
		<h1>Votre site</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<p>
		<a href="#">En savoir plus</a>
	</div>
	<div class="action">
		<img src="images/responsive.svg">
		<h1>responsive</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<p>
		<a href="#">En savoir plus</a>
	</div>
	<div class="action">
		<img src="images/hebergement.svg">
		<h1>hebergement</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<p>
		<a href="#">En savoir plus</a>
	</div>
	<div class="action">
		<img src="images/graphisme.svg">
		<h1>graphisme</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<p>
		<a href="#">En savoir plus</a>
	</div>
	<div class="action">
		<img src="images/referencement.svg">
		<h1>referencement</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<p>
		<a href="#">En savoir plus</a>
	</div>
	<div class="action">
		<img src="images/maintenance.svg">
		<h1>maintenance</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<p>
		<a href="#">En savoir plus</a>
	</div>
</div>
<script type="text/javascript">
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    autoplay:true,
    items:1,
    nav:false,

});
</script>