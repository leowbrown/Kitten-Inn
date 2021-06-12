<?php wp_footer(); ?>

<footer>
    <div class="social-con">
        <a href="https://www.facebook.com/KittenInn/"><i class="fab fa-facebook-square"></i></a>
    </div>
    <div class="link-con">
        <?php

        // getting wordpress primary nav menu
        $args = array 
            ('title_li' => "" ); 
            wp_list_pages($args);
        ?>
    </div>
</footer>
