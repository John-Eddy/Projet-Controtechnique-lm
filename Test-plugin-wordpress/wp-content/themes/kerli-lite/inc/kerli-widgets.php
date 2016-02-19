<?php

/***** Register Widgets *****/

function kerli_lite_register_widgets() {
	register_widget('kerli_lite_about_widget');
	register_widget('kerli_lite_custom_posts_widget');
	register_widget('kerli_lite_social_widget');
}
add_action('widgets_init', 'kerli_lite_register_widgets');

/***** Include Widgets *****/

require_once('widgets/kerli-about-widget.php');
require_once('widgets/kerli-custom-posts.php');
require_once('widgets/kerli-social-widget.php');

?>