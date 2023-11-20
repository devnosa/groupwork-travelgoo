<?php

get_header();
?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<main id="primary" class="home-page">
	<section class="home-section-4">
    <div class="container">
	<h2 class="secondary-title">Our Popular Destinations</h2>
		<div class="section-content">
		<img src="<?php echo get_template_directory_uri() . '/assets/images/world-map.png'?>" alt="WORLD MAP" >
		<div class="destinations-cards">

                    <?php
                    // Example array of destinations
                    $destinations = array(
                        array(
                            'name' => 'Thailand',
                            'image' => 'thailand.png',
                            'description' => '20+ Spots <br>2D & 3N',
                        ),
                        array(
                            'name' => 'Indonesia',
                            'image' => 'indonesia.png',
                            'description' => '25+ Spots<br>3D & 3N',
                        ),
                        array(
                            'name' => 'New Zealand',
                            'image' => 'new-zeland.png',
                            'description' => '20+ Spots<br>3D & 2N',
                        ),
                    );

                    // Loop through destinations
                    foreach ($destinations as $destination) {
                        ?>
                        <div class="destinations-card">
                            <div class="destinations-card-content">
                                <img src="<?php echo get_template_directory_uri() . '/assets/images/' . $destination['image']; ?>" alt="<?php echo $destination['name']; ?>">
                                <h4 class="destinations-card-title"><?php echo $destination['name']; ?></h4>
                                <p class="destinations-card-description"><?php echo $destination['description']; ?></p>
                                <p class="vector">></p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>