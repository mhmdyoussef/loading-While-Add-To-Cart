<?php
/*
*Plugin Name: Loading While Add to cart
*Description: This shows loading on click Add to cart button
*Author: Mohamed Youssef (egsyntax.com)
*Author URI: https://egsyntax.com
*Version: 1.0
*/

    add_action('wp_footer', 'add_my_code');
    function add_my_code() {
    ?>
    <script>
        jQuery(document).ready(function(){
            jQuery(".single_add_to_cart_button").click(function(){
                jQuery(this).text("Loading...");
            });
        });
    </script>
    <?php
    }