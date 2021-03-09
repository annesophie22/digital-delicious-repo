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
      
      <div class="card-dish__img-container">
         <img class="card-dish__img" src="<?php echo get_field("dish_img"); ?>" alt="">
      </div>
      <?php 

      $relatedDish = get_field("dishes_today");

      echo "<h3 class='heading-secondary card-dish__name'>";
         foreach($relatedDish as $dish) {
            echo get_the_title($dish);
            echo "<br>";
            echo get_field( "dish_price", $dish->ID );
            echo "<br>";
            echo get_field( "dish_desc", $dish->ID );
            echo "<br>";
            echo get_the_post_thumbnail($dish->ID);
         }
      echo "</h3>";
      ?>

      

      <p class="card-dish__price">Prix</p>
      <p class="card-dish__desc">Desc</p>
   </div> <!-- end card-dish --> 
</div> 