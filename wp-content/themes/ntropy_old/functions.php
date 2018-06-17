<?php
function bootstrap_script_with_jquery()
{
    wp_register_script('custom-script', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.js', array('jquery'));
    wp_enqueue_script('custom-script');
}
add_action('wp_enqueue_scripts','bootstrap_script_with_jquery');

?>