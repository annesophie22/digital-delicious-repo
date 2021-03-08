<?php
/**
 * Template part for displaying dishes that are planned to be cooked for the current week
 *
 *
 * @package Digital_Delicious
 */

?>

   <div class="card-dish__img-container">
      <img class="card-dish__img" src="<?php echo get_theme_file_uri("/images/bo_bun-sq.jpg") ?>" alt="">
   </div>
   <h3 class="heading-secondary card-dish__name"><?php the_title(); ?></h3>
   <p class="card-dish__price">CHF <?php echo get_field("week_dish_price"); ?></p>
   <p class="card-dish__desc"><?php echo get_field("week_dish_desc"); ?></p>