<?php
/**
 * Adds Social_Bar widget.
 */
 class Social_Bar_Widget extends WP_Widget {
  
    /**
     * Register widget with WordPress.
     */
    function __construct() {
      parent::__construct(
        'socialbar_widget', // Base ID
        esc_html__( 'Social Bar', 'sb_domain' ), // Name
        array( 'description' => esc_html__( 'Widget de réseaux sociaux', 'sb_domain' ), ) // Args
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
    public function widget( $args, $instance ) {
      echo $args['before_widget']; // Whatever you want to display before widget (<div>, etc)

      /*
      if ( ! empty( $instance['title'] ) ) {
        echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
      }
      */

      // Widget Content Output
      
      echo '<div id="slap_socialbar" style="display: none; z-index:1000000 !important;"><script type="text/javascript" src="http://surlapage.fr/script/social-bar?facebook='.$instance['facebook'].'&amp;twitter='.$instance['twitter'].'&amp;pinterest='.$instance['pinterest'].'&amp;youtube='.$instance['youtube'].'&amp;instagram='.$instance['instagram'].'&amp;tumblr='.$instance['tumblr'].'&amp;position='.$instance['position'].'"></script><a href="http://surlapage.fr/widget/facebook-slider" title="module sociale facebook">module sociale facebook</a></div>';

      echo $args['after_widget']; // Whatever you want to display after widget (</div>, etc)
    }
  
    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
      $facebook = ! empty( $instance['facebook'] ) ? $instance['facebook'] : esc_html__( '', 'sb_domain' );
      
      $twitter = ! empty( $instance['twitter'] ) ? $instance['twitter'] : esc_html__( '', 'sb_domain' );

      $pinterest = ! empty( $instance['pinterest'] ) ? $instance['pinterest'] : esc_html__( '', 'sb_domain' );

      $youtube = ! empty( $instance['youtube'] ) ? $instance['youtube'] : esc_html__( '', 'sb_domain' );

      $instagram = ! empty( $instance['instagram'] ) ? $instance['instagram'] : esc_html__( '', 'sb_domain' );

      $tumblr = ! empty( $instance['tumblr'] ) ? $instance['tumblr'] : esc_html__( '', 'sb_domain' );

      // Sélection de la position du Widget
      $position = ! empty( $instance['position'] ) ? $instance['position'] : esc_html__( 'left', 'sb_domain' );
  
      ?>

      <!-- Facebook -->
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>">
          <?php esc_attr_e( 'Facebook URL', 'sb_domain' ); ?>
        </label> 

        <input 
          class="widefat" 
          id="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>" 
          name="<?php echo esc_attr( $this->get_field_name( 'facebook' ) ); ?>" 
          type="text" 
          value="<?php echo esc_attr( $facebook ); ?>">
      </p>

      <!-- Twitter -->
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>">
          <?php esc_attr_e( 'Twitter URL', 'sb_domain' ); ?>
        </label> 

        <input 
          class="widefat" 
          id="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>" 
          name="<?php echo esc_attr( $this->get_field_name( 'twitter' ) ); ?>" 
          type="text" 
          value="<?php echo esc_attr( $twitter ); ?>">
      </p>

      <!-- Pinterest -->
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'pinterest' ) ); ?>">
          <?php esc_attr_e( 'Pinterest URL', 'sb_domain' ); ?>
        </label> 

        <input 
          class="widefat" 
          id="<?php echo esc_attr( $this->get_field_id( 'pinterest' ) ); ?>" 
          name="<?php echo esc_attr( $this->get_field_name( 'pinterest' ) ); ?>" 
          type="text" 
          value="<?php echo esc_attr( $pinterest ); ?>">
      </p>

      <!-- Youtube -->
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>">
          <?php esc_attr_e( 'Youtube URL', 'sb_domain' ); ?>
        </label> 

        <input 
          class="widefat" 
          id="<?php echo esc_attr( $this->get_field_id( 'youtube' ) ); ?>" 
          name="<?php echo esc_attr( $this->get_field_name( 'youtube' ) ); ?>" 
          type="text" 
          value="<?php echo esc_attr( $youtube ); ?>">
      </p>

      <!-- Instagram -->
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>">
          <?php esc_attr_e( 'Instagram URL', 'sb_domain' ); ?>
        </label> 

        <input 
          class="widefat" 
          id="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>" 
          name="<?php echo esc_attr( $this->get_field_name( 'instagram' ) ); ?>" 
          type="text" 
          value="<?php echo esc_attr( $instagram ); ?>">
      </p>

      <!-- Tumblr -->
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'tumblr' ) ); ?>">
          <?php esc_attr_e( 'Tumblr URL', 'sb_domain' ); ?>
        </label> 

        <input 
          class="widefat" 
          id="<?php echo esc_attr( $this->get_field_id( 'tumblr' ) ); ?>" 
          name="<?php echo esc_attr( $this->get_field_name( 'tumblr' ) ); ?>" 
          type="text" 
          value="<?php echo esc_attr( $tumblr ); ?>">
      </p>

      <!-- Select Widget Position -->
      <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'position' ) ); ?>">
          <?php esc_attr_e( 'Position', 'sb_domain' ); ?>
        </label> 

        <select 
          class="widefat" 
          id="<?php echo esc_attr( $this->get_field_id( 'position' ) ); ?>" 
          name="<?php echo esc_attr( $this->get_field_name( 'position' ) ); ?>">
          <option value="left" <?php echo ($position == 'left') ? 'selected' : ''; ?>>
            Gauche
          </option>
          <option value="right" <?php echo ($position == 'right') ? 'selected' : ''; ?>>
            Droite
          </option>
          <option value="top" <?php echo ($position == 'top') ? 'selected' : ''; ?>>
            En haut
          </option>
          <option value="bottom" <?php echo ($position == 'bottom') ? 'selected' : ''; ?>>
            En bas
          </option>
        </select>
      </p>

      <?php 
    }
  
    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
      $instance = array();

      $instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';

      $instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';

      $instance['pinterest'] = ( ! empty( $new_instance['pinterest'] ) ) ? strip_tags( $new_instance['pinterest'] ) : '';

      $instance['youtube'] = ( ! empty( $new_instance['youtube'] ) ) ? strip_tags( $new_instance['youtube'] ) : '';

      $instance['instagram'] = ( ! empty( $new_instance['instagram'] ) ) ? strip_tags( $new_instance['instagram'] ) : '';

      $instance['tumblr'] = ( ! empty( $new_instance['tumblr'] ) ) ? strip_tags( $new_instance['tumblr'] ) : '';

      $instance['position'] = ( ! empty( $new_instance['position'] ) ) ? strip_tags( $new_instance['position'] ) : '';
  
      return $instance;
    }
  
  } // class Foo_Widget