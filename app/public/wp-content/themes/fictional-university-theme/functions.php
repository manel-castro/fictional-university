<?php



function university_files() {

        // first argument: Import JS File
        // second argument: for if the first script depends on an other scripts (the dependencies)
        // third argument: version number of our script
        // fourth argument: do you want to load this file just below the body tag (instead of the head section), much better for performance
        wp_enqueue_script('main-university-js', get_theme_file_uri("/build/index.js"), array('jquery'), '1.0', true); 

        // Font awesome (it's the link without "https:")
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 

        // Google Fonts (it's the link without "https:")
        wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i'); 

        wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css')); 
        wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css')); 

    }
    
    // first argument: what type of instructions we're giving, in this case we want to load a file
    // second argument: the name of the function that we want to run 
    add_action('wp_enqueue_scripts', 'university_files');

?>