<?php
/**
 * Template part for displaying dishes that are planned to be cooked for the current week
 *
 *
 * @package Digital_Delicious
 */

?>

<!-- WEEK MENU GRID -->
<div class="week-menu__dish-grid week-menu__dish-grid--1">
   <p class="week-menu__day"><mark class="highlighted"><?php the_title(); ?></mark></p>

   <!-- CARD DISH -->
   <div class="card-dish">
      <?php 
      $relatedDish = get_field("dishes_today");
         foreach($relatedDish as $dish) {
      ?>
         <div class="card-dish__img-container">
            <img class="card-dish__img" src="<?php echo get_the_post_thumbnail($dish->ID); ?>">
         </div>
         <h3 class="heading-secondary card-dish__name"><?php echo get_the_title($dish); ?></h3>
         <p class="card-dish__price"><?php echo get_field( "dish_price", $dish->ID ); ?></p>
         <p class="card-dish__desc"><?php echo get_field( "dish_desc", $dish->ID ); ?></p>
   </div> <!-- end card-dish --> 
      <?php
         } // end foreach()
      ?>
   
</div> 