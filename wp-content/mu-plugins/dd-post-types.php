<?php 
function digital_delicious_post_types() {
   /* Week menu dish */
   $labels = array(
      "name"   => _x( "Week Dishes", "digital-delicious" ),
      "singular_name" => _x( "Week Dish", "digital-delicious" ),
      "add_new_item" => __( "Add New Week Dish", "digital-delicious" ),
      "edit_item" => __( "Edit Week Dish", "digital-delicious" ),
      "all_items" => __( "All Week Dishes", "digital-delicious" ),
   );
   $args = array(
      "labels" => $labels,
      "public" => true,
      "show_ui" => true,
      "show_in_menu" => true,
      "show_in_rest" => true,
      "menu_icon" => "dashicons-calendar",
      "description" => "Week Dishes custom post type",
   );

   register_post_type("week-dish-menu", $args);

    /* Event post type */
    register_post_type("event",
        array(
            "rewrite" => array(
                "slug" => "events"
            ),
            "has_archive" => true,
            "show_in_rest" => true,
            "supports" => array( "title", "editor", "excerpt"),
            "public"=> true,
            "menu_icon" => "dashicons-calendar",
            "labels" =>
                array(
                    "name" => "Events",
                    "singular_name" => "Event",
                    "add_new_item" => "Add New Event",
                    "edit_item" => "Edit Event",
                    "all_items" => "All Events",
                )
            )
        ); 
       
    /* Professor post type */
    register_post_type("professor",
        array(
            "show_in_rest" => true,
            "supports" => array( "title", "editor", "thumbnail"),
            "public"=> true,
            "menu_icon" => "dashicons-welcome-learn-more",
            "labels" =>
                array(
                    "name" => "Professors",
                    "singular_name" => "Professor",
                    "add_new_item" => "Add New Professor",
                    "edit_item" => "Edit Professor",
                    "all_items" => "All Professors",
                )
            )
        );
}

add_action("init", "digital_delicious_post_types");