<?php

get_header();
?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<main id="primary" class="home-page">
	<section class="home-section-4">
    <div class="container">
		<div class="section-content">
        <h2 class="secondary-title">Our Popular Destinations</h2>
		<img src="<?php echo get_template_directory_uri() . '/assets/images/world-map.png'?>" alt="WORLD MAP" >
		<div class="card">
			<div class="card-content">
			<img src="<?php echo get_template_directory_uri() . '/assets/images/thailand.png'?>" alt="THILAND" >	
			<h4 class="card-title">Thailand</h4>
			<p class="card-description">20+ Spots <br>2D & 3N</p>
			<img src="<?php echo get_template_directory_uri() . '/assets/images/Vector.png'?>" alt="VECTOR" >	
			</div>
		<div class="card">
			<div class="card-content">
			<img src="<?php echo get_template_directory_uri() . '/assets/images/indonesia.png'?>" alt="INDONESIA" >	
			<h4 class="card-title">Thailand</h4>
			<p class="card-description">25+ Spots<br>3D & 3N</p>
			<img src="<?php echo get_template_directory_uri() . '/assets/images/Vector.png'?>" alt="VECTOR" >	
			</div>
		<div class="card">
			<div class="card-content">
			<img src="<?php echo get_template_directory_uri() . '/assets/images/new-zeland.png'?>" alt="NEW ZELAND" >	
			<h4 class="card-title">Thailand</h4>
			<p class="card-description">20+ Spots<br>3D & 2N</p>
			<img src="<?php echo get_template_directory_uri() . '/assets/images/Vector.png'?>" alt="VECTOR" >	
			</div>	
		</div>

		
        </div>
		</div>
</section>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
