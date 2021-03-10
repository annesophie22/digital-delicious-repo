<?php

/**
 * Template part for displaying dishes that are planned to be cooked for the current week
 *
 *
 * @package Digital_Delicious
 */
?>

<div>

   <p class="week-menu__day"><mark class="highlighted"><?php the_title(); ?></mark></p>

   <?php
   $relatedDish = get_field("dishes_today");
   if ($relatedDish) {
      foreach ($relatedDish as $dish) {
   ?>
         <div>
            <!-- card dish -->
            <div class="card-dish__img-container">
               <?php echo get_the_post_thumbnail($dish->ID, "", array(
                  "class" => "card-dish__img",
                  "alt" => ""
               )); ?>
            </div>
            <h3 class="heading-secondary card-dish__name"><?php echo get_the_title($dish); ?></h3>
            <p class="card-dish__price"><?php echo get_field("dish_price", $dish->ID); ?></p>
            <p class="card-dish__desc"><?php echo get_field("dish_desc", $dish->ID); ?></p>
         </div> <!-- end card dish -->
   <?php
      }
   } else {
      echo "<p>Exceptionally, no dish will be cooked on that day this week</p>";
   }

   ?>
</div>

<hr class="week-menu__hr">