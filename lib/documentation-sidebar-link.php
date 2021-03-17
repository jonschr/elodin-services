<?php

add_action( 'admin_menu', 'elodin_servicesadd_documentation_sidebar_link');
function elodin_servicesadd_documentation_sidebar_link() {
    
    global $submenu;
    $menu_slug = "edit.php?post_type=services"; // used as "key" in menus
   
    $submenu[$menu_slug][] = array(
        'Documentation', 
        'manage_options', 
        'https://github.com/jonschr/elodin-services',
    );
}

add_action( 'admin_footer', 'elodin_servicesadmin_menu_open_new_tab' );    
function elodin_servicesadmin_menu_open_new_tab() {
    ?>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#menu-posts-services li a').each(function () {
            if ($(this).text() == 'Documentation') {
                $(this).css('color', 'yellow');
                $(this).attr('target','_blank');
            }
        });
    });
    </script>
    <?php
}