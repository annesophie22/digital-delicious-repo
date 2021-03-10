<?php

/**
 * Template part for displaying dishes that are planned to be cooked for the current week
 *
 *
 * @package Digital_Delicious
 */
?>

<div>
   <!-- card dish -->
   <p class="week-menu__day"><mark class="highlighted"><?php the_title(); ?></mark></p>

   <?php
   $relatedDish = get_field("dishes_today");
   foreach ($relatedDish as $dish) {
   ?>
      <div class="card-dish__img-container">
         <?php echo get_the_post_thumbnail($dish->ID, "", array(
            "class" => "card-dish__img",
            "alt" => ""
         )); ?>
      </div>
      <h3 class="heading-secondary card-dish__name"><?php echo get_the_title($dish); ?></h3>
      <p class="card-dish__price"><?php echo get_field("dish_price", $dish->ID); ?></p>
      <p class="card-dish__desc"><?php echo get_field("dish_desc", $dish->ID); ?></p>
   <?php
   }
   ?>
</div> <!-- end card dish -->

<hr class="week-menu__hr">