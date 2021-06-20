<?php
/*
Plugin Name: Loading While Add to cart
Description: This shows loading on click Add to cart button
Author: Mohamed Youssef (egsyntax.com)
Author URI: https://t.me/egSyntax
Version: 1.2
licence: GPLv2 or later
*/
/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

defined ( 'ABSPATH' ) or die( 'Hey, You can\'t access this file!' );
    
    add_action('wp_footer', 'add_my_code');
    function add_my_code() {
    ?>
    <script>
        jQuery(document).ready(function(){
            jQuery(".single_add_to_cart_button").click(function(){
                jQuery(this).text("Loading...");
                setTimeout(function () { jQuery('.single_add_to_cart_button').text('Add to Cart')}, 5000);
            });
        });
    </script>
    <?php
    }
