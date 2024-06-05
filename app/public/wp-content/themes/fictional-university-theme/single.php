<?php

    get_header();


    while(have_posts()){
        the_post();
        // enter to HTML mode 
        // still inside the while loop: 
        ?>  
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        <?php
    }

    get_footer();

?>