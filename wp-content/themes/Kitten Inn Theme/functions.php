<?php

// theme support
add_theme_support('woocommerce');

// linking custom style sheets

function custom_theme_assets() {
    wp_enqueue_style('kitten_inn_stylesheet', get_stylesheet_uri());
    wp_register_script('kiiten-inn-js-file', get_template_directory_uri() . '/js/script.js', false, null, true);
    wp_enqueue_script('kiiten-inn-js-file');
}

add_action('wp_enqueue_scripts', 'custom_theme_assets');

// register nav menu
register_nav_menus( [ 'primary' => __( 'Primary Menu' )]);

// generate special css
function generate_special_css(){
    $color_picker = get_theme_mod('color_picker');
    $color_picker_sec = get_theme_mod('color_picker_sec');
    $color_picker_tri = get_theme_mod('color_picker_tri');

    ?>
        <style type="text/css" id="custom-style-from-customiser">
           :root {
                --pri:<?php echo $color_picker; ?>;
                --dark:<?php echo $color_picker_sec; ?>;
                --light:<?php echo $color_picker_tri; ?>;
            }
        </style>
    <?php
}
add_action('wp_head', 'generate_special_css');

function mytheme_customize_register($wp_customize) {
    $wp_customize->add_section("my_custom_section", array(
        "title" => __("Theme Colours", "customizer_custom_section"),
        "priority" => 20,
    ));

    // ------------settings
    $wp_customize->add_setting("color_picker", array(
        "default" => "#52b788",
        "transport" => "refresh"
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, "color_picker", array(
        'label' => 'Primary Colour',
        'section' => 'my_custom_section',
        'settings' => 'color_picker'
        )
    ));

      // ------------settings
      $wp_customize->add_setting("color_picker_sec", array(
        "default" => "#081c15",
        "transport" => "refresh"
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, "color_picker_sec", array(
        'label' => 'Secondary Colour',
        'section' => 'my_custom_section',
        'settings' => 'color_picker_sec'
        )
    ));


      // ------------settings
      $wp_customize->add_setting("color_picker_tri", array(
        "default" => "#fff",
        "transport" => "refresh"
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, "color_picker_tri", array(
        'label' => 'Third Colour',
        'section' => 'my_custom_section',
        'settings' => 'color_picker_tri'
        )
    ));

    

    
}

add_action("customize_register", "mytheme_customize_register");