<?php
/**
 * @Author: Bernard Hanna
 * @Date:   2022-10-20 16:06:39
 * @Last Modified by:   Bernard Hanna
 * @Last Modified time: 2023-01-04 13:02:07
 */
if ( ! function_exists( 'crb_initilize_carbon_fields' ) ) {
  function mh_common_improvements() {
    /**
     * Modify excerpt length
      * @since  1.0.0
    */
    function mh_excerpt_length( $length ) {
        return carbon_get_theme_option( 'crb_modify_excerpt' );
      }
      add_filter( 'excerpt_length', 'mh_excerpt_length', 999 );
    /**
     * Update login page image link URL
      * @since  1.0.0
    */
    $update_login_link = carbon_get_theme_option( 'crb_update_login_link' );
    if ( $update_login_link == true ) {  
      function mh_login_url(): string {
          return home_url();
      }
      add_filter('login_headerurl', 'mh_login_url');
    }
  }
add_action( 'carbon_fields_register_fields', 'mh_common_improvements' );
} 


