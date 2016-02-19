<?php

/***** Social Profile Widget *****/

class kerli_lite_social_widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'kerli_lite_social_widget', // Base ID
			__('[Kerli] Social Links', 'kerli-lite'), // Name
			array( 'description' => __( 'Social widget for displaying social icons in the siebar. Use this in siebar.', 'kerli-lite' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	function widget( $args, $instance ) {
		extract( $args );
		
		$title = apply_filters( 'widget_title', $instance['title'] );
		$fb = $instance['facebook'];
		$tw = $instance['twitter'];
		$yt = $instance['yt'];
		$gplus = $instance['gplus'];
		$ig = $instance['instagram'];
	?>
    
     <?php // esc_url( $url, $protocols, $_context ); Sanitize Urls ?> 
     
        <aside class="widget widget-social">
            <h4 class="widget-title"><?php echo $title; ?></h4>
            <span><a class="social social-facebook" href="<?php echo esc_url($fb); ?>" target="_blank"></a></span>
            <span><a class="social social-twitter" href="<?php echo esc_url($tw); ?>" target="_blank"></a></span>
            <span><a class="social social-youtube" href="<?php echo esc_url($yt); ?>" target="_blank"></a></span>
            <span><a class="social social-googleplus" href="<?php echo esc_url($gplus); ?>" target="_blank"></a></span>
            <span><a class="social social-instagram" href="<?php echo esc_url($ig); ?>" target="_blank"></a></span>
        </aside>

		<?php
	}
	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	function form( $instance ) {

	/* Set up some default widget settings. */
	$defaults = array( 'title' => '', 'rss' => '', 'facebook' => '', 'twitter' => '', 'yt' => '', 'gplus' => '', 'instagram' => '');
	$instance = wp_parse_args( (array) $instance, $defaults ); ?>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'kerli-lite' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr($instance['title']); ?>" />
					
			<label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e( 'Facebook:' , 'kerli-lite' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" type="text" value="<?php echo esc_attr($instance['facebook']); ?>" />

			<label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e( 'Twitter:' , 'kerli-lite' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" type="text" value="<?php echo esc_attr($instance['twitter']); ?>" />

			<label for="<?php echo $this->get_field_id( 'yt' ); ?>"><?php _e( 'Youtube:', 'kerli-lite' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'yt' ); ?>" name="<?php echo $this->get_field_name( 'yt' ); ?>" type="text" value="<?php echo esc_attr($instance['yt']); ?>" />

			<label for="<?php echo $this->get_field_id( 'gplus' ); ?>"><?php _e( 'Google+:', 'kerli-lite' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'gplus' ); ?>" name="<?php echo $this->get_field_name( 'gplus' ); ?>" type="text" value="<?php echo esc_attr($instance['gplus']); ?>" />

			<label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php _e( 'Instagram:', 'kerli-lite' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" type="text" value="<?php  echo esc_attr($instance['instagram']); ?>" />

		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	function update( $new_instance, $old_instance ) {
		//$instance = array();
		//$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance = $old_instance;
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['facebook'] = strip_tags( $new_instance['facebook'] );
		$instance['twitter'] = strip_tags( $new_instance['twitter'] );
		$instance['yt'] = strip_tags( $new_instance['yt'] );
		$instance['gplus'] = strip_tags( $new_instance['gplus'] );
		$instance['instagram'] = strip_tags( $new_instance['instagram'] );
		
		return $instance;
	}

} // class kerli_lite_social_widget
?>