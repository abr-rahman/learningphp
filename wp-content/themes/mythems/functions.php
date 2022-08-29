<?Php

function calling_resources(){
    // Calling stylesheet
    wp_enqueue_style('style',get_stylesheet_uri(), '', '1.0.1' );
}
add_action('wp_enqueue_scripts', 'calling_resources');



function our_theme_setup(){
//Rehister Nav
register_nav_menus(array(
    'primary' =>__('Primary Menu'),
    'footer' =>__('Footer Menu'),
));

//Thumbnail image
add_theme_support('post-thumbnails');

}
add_action('after_theme_setup','our_theme_setup');


// Sidebar Reg
function ourWidegetInt(){
    register_sidebar(array(
        'name' => 'Prinary Sidebar',
        'id' => 'sidebar1',
        'before_widget' => '<div class="sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="sidebar_head">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init' , 'ourWidegetInt');
