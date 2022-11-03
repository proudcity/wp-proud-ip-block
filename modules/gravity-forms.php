<?php

class Proud_GF_IP_Block extends Proud_IP_Block{

	private static $instance;

	/**
	 * Spins up the instance of the plugin so that we don't get many instances running at once
	 *
	 * @since 1.0
	 * @author SFNdesign, Curtis McHale
	 *
	 * @uses $instance->init()                      The main get it running function
	 */
	public static function instance(){

		if ( ! self::$instance ){
			self::$instance = new Proud_GF_IP_Block();
			self::$instance->init();
		}

	} // instance

	/**
	 * Spins up all the actions/filters in the plugin to really get the engine running
	 *
	 * @since 1.0
	 * @author SFNdesign, Curtis McHale
	 */
	public function init(){
        add_filter( 'gform_abort_submission_with_confirmation', array( $this, 'check_country' ) );
	} // init

    /**
     * Checks the country code for the form submission and stops saving of forms outside the US
     *
     * @since 1.0
     * @author ProudCity, Curtis McHale
     * @access public
     *
     * @param   bool        $do_abort       optional            GF supplied abort value
     * @uses    GFFormsModel::get_ip()                          Returns the IP for the current form submission
     * @uses    parent::check_ip_by_country()                   Returns true if the IP is in the allowed country array
     * @return  bool        $do_abort                           True if we want to blindly abort the form saving
     */
    public static function check_country( $do_abort ){

        if ( $do_abort ){
            return true;
        }

        $ip = GFFormsModel::get_ip(); // define this IP

        if ( parent::check_ip_by_country( $ip ) ){
            // from the US so we're good
            $do_abort = false;
        }

        return (bool) $do_abort;
    }

}

Proud_GF_IP_Block::instance();