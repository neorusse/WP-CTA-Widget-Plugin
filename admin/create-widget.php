<?php // Ecod Widget - Create Widget



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}


class ecod_Cta_Widget extends WP_Widget {
	//widget constructor function
	function __construct() {
		$widget_options = array(
			'classname' => 'ecod_cta_widget',
			'description' => 'Add a Call to Action box encouraging people to get in touch.'
		);
		parent::__construct( 'ecod_cta_widget', 'Call to Action', $widget_options );
	}

	//function to define the form in the Widgets screen
	function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : '';
		$tel = ! empty( $instance['tel'] ) ? $instance['tel'] : 'Telephone number';
		$email = ! empty( $instance['email'] ) ? $instance['email'] : 'Email address';
	?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			<input class="widefat" type ="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'tel' ); ?>">Your telephone number:</label>
			<input class="widefat" rows="10" type="text" id="<?php echo $this->get_field_id( 'tel' ); ?>" name="<?php echo $this->get_field_name( 'tel' ); ?>" value="<?php echo esc_attr( $tel ); ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'email' ); ?>">Your email address:</label>
			<input class="widefat" rows="10" type="text" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" value="<?php echo esc_attr( $email ); ?>" />
		</p>

	<?php }

 	//function to define the data saved by the widget
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
		$instance[ 'tel' ] = strip_tags( $new_instance[ 'tel' ] );
		$instance[ 'email' ] = strip_tags( $new_instance[ 'email' ] );
		return $instance;
	}

 	//function to display the widget in the site
	function widget( $args, $instance ) {
		echo $args ['before_widget'];
		$title = apply_filters( 'widget_title', $instance[ 'title' ] );
		$tel = $instance['tel'];
		$email = $instance['email'];
	?>
		<div class="cta">
			<?php if ( ! empty( $title ) ) {
				echo $before_title . $title . $after_title;
			}; ?>
		<?php echo 'Call us on ' . $tel . ' or email <a href="' . $email . '">' . $email . '</a>'; ?>
	</div>

		<?php echo $args['after_widget'];

	}

}