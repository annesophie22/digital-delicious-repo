<?php

/**
 * Template part for displaying dishes that are planned to be cooked for the current week
 *
 *
 * @package Digital_Delicious
 */
?>

<?php
$relatedCalendar = new DateTime(get_field('calendar_day'));

$relatedTextDay = $relatedCalendar->format('l');
$relatedNumDay = $relatedCalendar->format('j');
$relatedMonth = $relatedCalendar->format('F');
$relatedYear = $relatedCalendar->format('Y');
?>

<p class="day-grid__title"><mark class="highlighted">
      <span><?php echo $relatedTextDay; ?></span>
      <span><?php echo $relatedNumDay; ?></span>
      <span><?php echo $relatedMonth; ?></span>
      <span><?php echo $relatedYear; ?></span>
   </mark></p>

<div class="day-grid">
   <?php
   $relatedDish = get_field('dishes_today');
   if ($relatedDish) {
      foreach ($relatedDish as $dish) {
   ?>
         <div class="card-dish">
            <!-- card dish -->
            <div class="card-dish__img-container">
               <?php echo get_the_post_thumbnail($dish->ID, '', array(
                  'class' => 'card-dish__img',
                  'alt' => '',
               )); ?>
            </div>
            <h3 class="heading-secondary card-dish__name"><?php echo get_the_title($dish); ?></h3>
            <p class="card-dish__price">CHF <?php echo get_field('dish_price', $dish->ID); ?></p>
            <p class="card-dish__desc"><?php echo get_field('dish_desc', $dish->ID); ?></p>
         </div> <!-- end card dish -->
   <?php
      }
   } else {
      echo esc_html_e('Exceptionally, no dish will be cooked today');
   }

   ?>
</div>

<hr class="day-grid__hr">