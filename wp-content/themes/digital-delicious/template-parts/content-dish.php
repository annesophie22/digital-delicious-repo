<?php

/**
 * Template part for displaying dishes that are planned to be cooked for the current week
 *
 *
 * @package Digital_Delicious
 */

?>

<!-- INDIVIDUAL DISH ITEM -->
<div class="alldishes-grid__item u-center-text">
   <div class="alldishes-grid__img-container">
      <?php the_post_thumbnail(); ?>
   </div>
   <div class="alldishes-grid__label">
      <h3 class="heading-secondary alldishes-grid__label-title"><?php the_title(); ?></h3>
      <p class="alldishes-grid__label-desc"><?php echo get_field('dish_desc'); ?></p>
   </div>
</div> <!-- end individual dish item -->