<?php

/**
 * Template part for displaying dishes that are planned to be cooked for the current week
 *
 *
 * @package Digital_Delicious
 */
?>

<?php
// Retrieving the date and spliting it with "Name of the day", "Day number", "Month", "Year"
$relatedCalendar = new DateTime(get_field('calendar_day'));

$relatedTextDay = $relatedCalendar->format('l');
$relatedNumDay = $relatedCalendar->format('j');
$relatedMonth = $relatedCalendar->format('F');
$relatedYear = $relatedCalendar->format('Y');

?>

<p class="day-grid__title"><mark class="highlighted">
      <span><?php esc_html_e($relatedTextDay, 'digital-delicious'); ?></span>
      <span><?php esc_html_e($relatedNumDay, 'digital-delicious'); ?></span>
      <span><?php esc_html_e($relatedMonth, 'digital-delicious'); ?></span>
      <span><?php esc_html_e($relatedYear, 'digital-delicious'); ?></span>
   </mark></p>

<div class="day-grid">
   <?php
   // Retrieving and displaying the dish(es) associated with the calendar day, through ACF
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
            <h3 class="heading-secondary card-dish__name"><?php esc_html_e(get_the_title($dish), 'digital-delicious'); ?></h3>
            <p class="card-dish__price">CHF <?php esc_html_e(get_field('dish_price', $dish->ID), 'digital-delicious'); ?></p>
            <p class="card-dish__desc"><?php esc_html_e(get_field('dish_desc', $dish->ID), 'digital-delicious'); ?></p>
         </div> <!-- end card dish -->
   <?php
      }
   } else {
      echo '<p class="heading-block__subtitle" style="margin: 1.6rem 0 0;">Sorry, no dish will be cooked today</p>';
   }

   ?>
</div> <!-- end day grid -->

<hr class="day-grid__hr">