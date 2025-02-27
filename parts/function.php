<?php
function mytheme_enqueue_assets(){
    //load theme stylesheet
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());

    //load costum Javascript file
    wp_enqueue_script('mytheme-script', get_template_directory_uri().'/assets/js/script.js', array('jquery'),false,true);

    //enqueue comment reply script
}
?>