<?php



    function university_files() {
        wp_enqueue_style('university_main_styles', get_stylesheet_uri()); 
    }
    
    // first argument: what type of instructions we're giving, in this case we want to load a file
    // second argument: the name of the function that we want to run 
    add_action('wp_enqueue_scripts', 'university_files');

?>