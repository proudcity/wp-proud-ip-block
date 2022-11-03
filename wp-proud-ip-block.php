<?php
/*
Plugin Name: ProudCity IP Block
Plugin URI: http://proudcity.com
Description: Provides IP blocking for sites
Version: 1.0
Author: ProudCity, Curtis McHale
Author URI: http://proudcity.com
License: GPLv2 or later
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
*/

require_once( 'vendor/autoload.php' );
use GeoIP2\WebService\Client;

class Proud_IP_Block{

	private static $instance;

	/**
	 * Spins up the instance of the plugin so that we don't get many instances running at once
	 *
	 * @since 1.0
	 * @author ProudCity, Curtis McHale
	 *
	 * @uses $instance->init()                      The main get it running function
	 */
	public static function instance(){

		if ( ! self::$instance ){
			self::$instance = new Proud_IP_Block();
			self::$instance->init();
		}

	} // instance

	/**
	 * Spins up all the actions/filters in the plugin to really get the engine running
	 *
	 * @since 1.0
	 * @author ProudCity, Curtis McHale
	 *
	 * @uses $this->constants()                 Defines our constants
	 * @uses $this->includes()                  Gets any includes we have
	 */
	public function init(){

		$this->constants();
		$this->includes();

		add_filter( 'pc_admin_integration_settings', array( $this, 'wpp_ipblock_maxmind_key' ) );
		add_filter( 'pc_admin_integration_options', array( $this, 'wpp_ip_block_maxmind_options' ) );

		// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.s
		register_activation_hook( __FILE__, array( $this, 'activate' ) );
		register_deactivation_hook( __FILE__, array( $this, 'deactivate' ) );
		register_uninstall_hook( __FILE__, array( __CLASS__, 'uninstall' ) );

	} // init

	public static function wpp_ip_block_maxmind_options( $options ){

		$options['maxmind_api_key'] = '';

		return $options;
	}

	/**
	 * Adds settings to the ProudCity Integrations page for this API Key
	 *
	 * @since 2022.11.03
	 * @author Curtis
	 * @access public
	 *
	 * @param 	array 			$settings_array 				Array of existing settings data
	 * @return 	array 			$settings_array 				Updated settings array
	 */
	public static function wpp_ipblock_maxmind_key( $settings_array ){

		$settings_array['maxmind_title'] = array(
          '#type' => 'html',
          '#html' => '<h3>' . __pcHelp('MaxMind IP Block Key') . '</h3>',
		);

		$settings_array['maxmind_api_key'] = array(
				'#type' => 'text',
				'#title' => __pcHelp('MaxMind API Key'),
				'#description' => __pcHelp(
					'This is use for IP blocking requests'
				)
		);

		return $settings_array;

	} // wpp_ipblock_maxmind_key

    /**
     * Returns true if the IP provided is in the allowed country array
     *
     * @since 1.0
     * @author ProudCity, Curtis McHale
     * @access public
     *
     * @param   string      $ip                 required                    IP address to test against
     * @param   array       $allowed_country    optional                    Array of ISO country codes that you want to check against
     * @return  bool        $allowed                                        True if the IP is from a country code that matches the array of allowed country codes
     */
    public static function check_ip_by_country( $ip = NULL, $allowed_country = null ){

        $allowed = false;
        $allowed_country = (null == $allowed_country ) ? self::get_allowed_countries() : $allowed_country;

        if ( null != $ip ){

			$maxmind_api_key = get_option( 'maxmind_api_key' );

            $client = new Client( '10', $maxmind_api_key, ['en'], ['host' => 'geolite.info'] );
            $record = $client->country( $ip );

            if ( in_array( $record->country->isoCode, $allowed_country ) ){
                $allowed = true;
            }

        }

        return (bool) $allowed;

    }

    /**
     * Returns array of allowed countries
     *
     * @since 1.0
     * @author ProudCity, Curtis McHale
     * @access private
     *
     * @filter      proud_ip_block_allowed_countries            Allows you to set the allowed country codes
     *
     * @return      array                                       Array of allowed countrie codes
     */
    private static function get_allowed_countries(){

        $countries = array(
            'US'
        );

        return apply_filters( 'proud_ip_block_allowed_countries', $countries );
    }

	/**
	 * Gives us any constants we need in the plugin
	 *
	 * @since 1.0
	 */
	public function constants(){

		define( 'PROUD_ID_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

	}

	/**
	 * Includes any externals
	 *
	 * @since 1.0
	 * @author ProudCity, Curtis McHale
	 * @access public
	 */
	public function includes(){

        require_once( PROUD_ID_PLUGIN_DIR . 'modules/gravity-forms.php' );

	}

	/**
	 * Fired when plugin is activated
	 *
	 * @param   bool    $network_wide   TRUE if WPMU 'super admin' uses Network Activate option
	 */
	public function activate( $network_wide ){

	} // activate

	/**
	 * Fired when plugin is deactivated
	 *
	 * @param   bool    $network_wide   TRUE if WPMU 'super admin' uses Network Activate option
	 */
	public function deactivate( $network_wide ){

	} // deactivate

	/**
	 * Fired when plugin is uninstalled
	 *
	 * @param   bool    $network_wide   TRUE if WPMU 'super admin' uses Network Activate option
	 */
	public function uninstall( $network_wide ){

	} // uninstall

} // Proud_IP_Block

Proud_IP_Block::instance();