<?php

    //echo '<pre>';
    //print_r($first_section);
    //echo '</pre>';


  //first section 
$first_section = get_field('first_section');
$hero_background = $first_section ['hero_background'];
$hero_title = $first_section ['hero_title'];
$hero_description = $first_section ['hero_description'];
$button = $first_section ['button'];

$first_group = get_field('first_group');
$first_group_icon = $first_group ['first_group_icon'];
$first_group_title = $first_group ['first_group_title'];
$first_group_text = $first_group ['first_group_text'];

//second section
$second_group = get_field('second_group');
$second_group_icon = $second_group ['second_group_icon'];
$second_group_title = $second_group ['second_group_title'];
$second_group_text = $second_group ['second_group_text'];

//third section

$third_group = get_field('third_group');
$third_group_icon = $third_group ['third_group_icon'];
$third_group_title = $third_group ['third_group_title'];
$third_group_text = $third_group ['third_group_text'];

$third_section = get_field ('third_section');
$third_section_background = $third_section ['third_section_background'];
$third_section_title = $third_section ['third_section_title'];
$third_section_text = $third_section ['third_section_text'];

$third_section_group1 = get_field ('third_section_group1');
$third_section_group1_image = $third_section_group1 ['3section_group1_image'];
$third_section_group1_numbers = $third_section_group1 ['3section_group1_numbers'];
$third_section_group1_text = $third_section_group1 ['3section_group1_text'];

$third_section_group2 = get_field ('third_section_group2');
$third_section_group2_image = $third_section_group2 ['3section_group2_image'];
$third_section_group2_numbers = $third_section_group2 ['3section_group2_numbers'];
$third_section_group2_text = $third_section_group2 ['3section_group2_text'];

$third_section_group3 = get_field ('third_section_group3');
$third_section_group3_image = $third_section_group3 ['3section_group3_image'];
$third_section_group3_numbers = $third_section_group3 ['3section_group3_numbers'];
$third_section_group3_text = $third_section_group3 ['3section_group3_text'];

$third_section_group4 = get_field ('third_section_group4');
$third_section_group4_image = $third_section_group4 ['3section_group4_image'];
$third_section_group4_numbers = $third_section_group4 ['3section_group4_numbers'];
$third_section_group4_text = $third_section_group4 ['3section_group4_text'];

//fourth section

$popular_distinaton_img = get_field ('popular_distinaton_img');

$popular_distination_1 = get_field ('popular_distination_1');
$popular_distination_1img = $popular_distination_1 ['popular_distination_1img'];
$popular_distination_1name = $popular_distination_1 ['popular_distination_1name'];
$popular_distination_1spot =  $popular_distination_1 ['popular_distination_1spot'];

$popular_distination_2 = get_field ('popular_distination_2');
$popular_distination_2img = $popular_distination_2 ['popular_distination_2img'];
$popular_distination_2name = $popular_distination_2 ['popular_distination_2name'];
$popular_distination_2spot =  $popular_distination_2 ['popular_distination_2spot'];

$popular_distination_3 = get_field ('popular_distination_3');
$popular_distination_3img = $popular_distination_3 ['popular_distination_3img'];
$popular_distination_3name = $popular_distination_3 ['popular_distination_3name'];
$popular_distination_3spot =  $popular_distination_3 ['popular_distination_3spot'];


//sixth section
$section_6 = get_field ('section_6');
$section_6_title = $section_6  ['section_6_title'];
$section_6_minititle = $section_6 ['section_6_minititle'];
$section_6_image = $section_6 ['section_6_image'];

$step_1 = get_field ('step_1');
$step_1_image = $step_1 ['step_1_image'];
$step_1_title = $step_1 ['step_1_title'];
$step_1_text = $step_1 ['step_1_text'];

$step_2 = get_field ('step_2');
$step_2_image = $step_2 ['step_2_image'];
$step_2_title = $step_2 ['step_2_title'];
$step_2_text = $step_2 ['step_2_text'];

$step_3 = get_field ('step_3');
$step_3_image = $step_3 ['step_3_image'];
$step_3_title = $step_3 ['step_3_title'];
$step_3_text = $step_3 ['step_3_text'];




    get_header();
?>

<main class="home-page">
    <section class="home-section-1">
        <?php  if($hero_background): ?>
          <img class_alias="home-section-image" src="<?php echo $hero_background['url'] ?>" alt="<?php $hero_background['alt'] ?>">
        <?php endif; ?>
              <div class="hero-content">
                    <h1 class="hero-title"><?php echo $hero_title ?></h1>
                    <p class="hero-text"> <?php echo $hero_description ?></p>
                    <a class="hero-button-a" href="#">
                          <div class="hero-button">
                              <div  class="hero-button-text">
                                  <?php echo $button ?>
                              </div>
                          </div>
                  </a>           
              </div>
    </section>

    <section class="home-section-2">
      <h3 class="our-service-title">Our Service</h3>
      <div class=" our-service">
                <div class="our-service-group-1">
                    <div class="our-service-group">
                        <a href="#">  <img src="<?php echo $first_group_icon ?>" alt=""> </a>
                        <h4 class="our-service-group-title"><?php echo $first_group_title ?></h4>
                        <p class="our-service-text"><?php echo $first_group_text ?></p>
                    </div>
                </div>   
                    <div class="our-service-group">
                      <a href="#"><img src="<?php echo $second_group_icon ?>" alt=""></a> 
                        <h4 class="our-service-group-title"><?php echo $second_group_title ?></h4>
                        <p class="our-service-text"><?php echo $second_group_text ?></p>
                    </div>      
                    <div class="our-service-group">
                        <a href="#"><img src="<?php echo $third_group_icon ?>" alt=""></a>
                        <h4 class="our-service-group-title"><?php echo $third_group_title ?></h4>
                        <p class="our-service-text"><?php echo $third_group_text ?></p>
                    </div>
      </div>
    </section>

    <section class="home-section-3">
      <div class="home-section-3-content">
                  <img class="home-section-3-content-image" src="<?php echo $third_section_background ?>" alt="">
                  <h3 class="our-service-title-3"><?php echo $third_section_title ?></h3>
                  <p class="our-service-text-3"><?php echo $third_section_title ?></p>
                          <div class="section-3-groups">
                              <div class="section-3-group-1">
                                    <img src="<?php echo $third_section_group1_image ?>" alt="">
                                    <h3 class="service-title-3" ><?php echo $third_section_group1_numbers ?></h3>
                                    <p class="service-text-1"><?php echo $third_section_group1_text?></p>
                              </div>
                              <div class="section-3-group-1">
                                    <img src="<?php echo $third_section_group2_image ?>" alt="">
                                    <h3 class="service-title-3" ><?php echo $third_section_group2_numbers?></h3>
                                    <p class="service-text-1"><?php echo $third_section_group2_text?></p>
                              </div>
                              <div class="section-3-group-1">
                                    <img src="<?php echo $third_section_group3_image?>" alt="">
                                    <h3 class="service-title-3" ><?php echo $third_section_group3_numbers?></h3>
                                    <p class="service-text-3"><?php echo $third_section_group3_text?></p>
                              </div>
                              <div class="section-3-group-1">
                                    <div class="section-3-group-image-3"><img src="<?php echo $third_section_group4_image?>" alt=""></div>
                                    <h3 class="service-title-3" ><?php echo $third_section_group4_numbers?></h3>
                                    <p class="service-text-3"><?php echo $third_section_group4_text?></p>
                              </div>
                          </div>
       </div>   
    </section>

    <section class="home-section-4">
          <h3 class="our-service-title">Our Popular Distinations</h3>
          <div class="home-section-4-content">
                <div class="home-section-4-main-img">
                    <img src="<?php echo $popular_distinaton_img ?>" alt="">
                </div>
                <div class="popular-distinations">
                  <div class="popular-distination-1">
                      <img src="<?php echo $popular_distination_1img?>" alt="">
                      <h3 class="distinaton-name"><?php echo $popular_distination_1name?></h3>
                      <h4 class="distination-spots-1"><?php echo $popular_distination_1spot?></h4>
                      <a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/images/metoba.png' ?>" alt=""></a>
                  </div>
                  <div class="popular-distination-1">
                      <img src="<?php echo $popular_distination_2img ?>" alt="">
                      <h3 class="distinaton-name"><?php echo $popular_distination_2name?></h3>
                      <h4 class="distination-spots-2"><?php echo $popular_distination_2spot?></h4>
                      <a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/images/metoba.png'  ?>" alt=""></a>
                  </div>
                  <div class="popular-distination-1">
                      <img src="<?php echo $popular_distination_3img?>" alt="">
                      <h3 class="distinaton-name"><?php echo $popular_distination_3name?></h3>
                      <h4 class="distination-spots-3"><?php echo $popular_distination_3spot?></h4>
                      <a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/images/metoba.png' ?>" alt=""></a>
                  </div>
                </div>
          </div>
    </section>

     
    <section class="home-section-6">
      <div class="section6-title">
          <h2 class="our-service-title-1"><?php echo $section_6_title ?></h3>
          <p class="section6-mini-title"><?php echo $section_6_minititle ?></p>
      </div>
 

      <div class="section-6-container">

                <div class="section-6-steps">
                    <div class="section-6-step">
                        <img src="<?php echo $step_1_image ?>" alt="">
                        <div class="section-6-step-content">
                          <h3 class="step-content-title"><?php echo $step_1_title ?></h3>
                          <p class="step-content-text"><?php echo $step_1_text ?></p>
                        </div>
                    </div>
                    <div class="section-6-step">
                        <img src="<?php echo $step_2_image ?>" alt="">
                        <div class="section-6-step-content">
                          <h3 class="step-content-title"><?php echo  $step_2_title ?></h3>
                          <p class="step-content-text"><?php echo $step_2_text ?> </p>
                        </div>
                    </div>
                    <div class="section-6-step">
                        <img src="<?php echo $step_3_image ?>" alt="">
                        <div class="section-6-step-content">
                          <h3 class="step-content-title"><?php echo $step_3_title ?></h3>
                          <p class="step-content-text"><?php echo $step_3_text ?> </p>
                        </div>
                    </div>
                </div>
               
                    <img class="container-img" src="<?php echo $section_6_image ?>" alt="">
              

      </div>


    </section>


    <section class="home-section-7">
      <h3 class="our-service-title-2">What People Say About Us</h3>
      <img src="<?php echo get_template_directory_uri() . '/assets/images/Group.svg' ?>" alt="">
    </section>

</main>
    
<?php get_footer() ?>













