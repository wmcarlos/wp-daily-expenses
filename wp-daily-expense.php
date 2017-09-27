<?php
/**
 * Plugin Name:     Daily Expense
 * Plugin URI:      
 * Description:     This plugin is designed to take better control of your daily expenses.
 * Version:         1.0.0
 * Author:          frontuari C.A
 * Author URI:      frontuari.com
 * Text Domain:     daily_expense
 *
 * @package        	frontuari\Daily Expense
 * @author          Carlos Vargas
 * @copyright       Copyright (c) 2017
 *
 *
 * - Find all instances of @todo in the plugin and update the relevant
 *   areas as necessary.
 *
 * - All functions that are not class methods MUST be prefixed with the
 *   plugin name, replacing spaces with underscores. NOT PREFIXING YOUR
 *   FUNCTIONS CAN CAUSE PLUGIN CONFLICTS!
 */


// Plugin version
/*if ( ! defined('DAILY_EXPENSES_VERSION' ) ) define('DAILY_EXPENSES_VERSION', '1.0' ); 

if ( ! class_exists( 'DAILY_EXPENSES' ) ) :

class DAILY_EXPENSES {
	private static $instance = null;
	public static function getInstance() {
		if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
	}
	function __construct() {

		$this->setupGlobals();
		$this->includes();
		$this->loadTextDomain();
	}

	private function includes() {

		require_once DAILY_EXPENSES_PLUGIN_DIR . 'includes/daily_expense_page_setting.php';

		//require_once DAILY_EXPENSES_PLUGIN_DIR.'includes/voices_postype_assistence.php';
		//require_once DAILY_EXPENSES_PLUGIN_DIR.'includes/scripts.php';
		//Shortcode
		//require_once DAILY_EXPENSES_PLUGIN_DIR.'includes/voices_shortcode_assistence.php';
	}
	
	private function setupGlobals() {
		// Plugin Folder Path
		if (!defined('DAILY_EXPENSES_PLUGIN_DIR')) {
			define('DAILY_EXPENSES_PLUGIN_DIR', plugin_dir_path( __FILE__ ));
		}

		// Plugin Folder URL
		if (!defined('DAILY_EXPENSES_PLUGIN_URL')) {
			define('DAILY_EXPENSES_PLUGIN_URL', plugin_dir_url(__FILE__));
		}

		// Plugin Root File
		if (!defined('DAILY_EXPENSES_PLUGIN_FILE')) {
			define('DAILY_EXPENSES_PLUGIN_FILE', __FILE__ );
		}
		
		// Plugin text domain
		if (!defined('DAILY_EXPENSES_TEXT_DOMAIN')) {
			define('DAILY_EXPENSES_TEXT_DOMAIN', 'daily_expense' );
		}
		 // Plugin URL
            if(!defined('DAILY_EXPENSES_URL')) {
                define('DAILY_EXPENSES_URL', plugin_dir_url( __FILE__ ) );
            }

	}
	public function loadTextDomain() {
		// Set filter for plugin's languages directory
		$lang_dir = dirname( plugin_basename( __FILE__ ) ) . '/languages/';
		$lang_dir = apply_filters('wpemails_cpve_languages_directory', $lang_dir );

		// Traditional WordPress plugin locale filter
		$locale        = apply_filters( 'plugin_locale',  get_locale(), 'DAILY_EXPENSES' );
		$mofile        = sprintf( '%1$s-%2$s.mo', 'DAILY_EXPENSES', $locale );

		// Setup paths to current locale file
		$mofile_local  = $lang_dir . $mofile;
		$mofile_global = WP_LANG_DIR . '/DAILY_EXPENSES/' . $mofile;

		if ( file_exists( $mofile_global ) ) {
			// Look in global /wp-content/languages/TESTPRO/ folder
			load_textdomain( 'DAILY_EXPENSES', $mofile_global );
		} elseif ( file_exists( $mofile_local ) ) {
			// Look in local /wp-content/plugins/TESTPRO/languages/ folder
			load_textdomain( 'DAILY_EXPENSES', $mofile_local );
		} else {
			// Load the default language files
			load_plugin_textdomain( 'DAILY_EXPENSES', false, $lang_dir );
		}
		
	}
}

endif; // End if class_exists check

$daily_expense = null;

function getClassDailyExpenses() {
	global $daily;
	if (is_null($daily_expense)) {
		$daily_expense = DAILY_EXPENSES::getInstance();
	}
	return $daily_expense;
}

getClassDailyExpenses();*/


/*class option_page{
	public function __construct(){
		add_action('admin_menu',array($this,'admin_menu'));
	}

	public function admin_menu() {
		add_options_page(
			'Page Title',
			'Circle Tree Login',
			'manage_options',
			'options_page_slug',
			array(
				$this,
				'settings_page'
			)
		);
	}

	public function  settings_page() {
		print plugin_dir_path(__FILE__)."<br/>";
		print plugin_dir_url(__FILE__)."<br/>";
		print __FILE__;
	}
}

new option_page();*/

class menu_page{
	public function __construct(){
		add_action('admin_menu',array($this,'menu_pages'));
	}

	public function menu_pages(){
		//add_menu_page('Daily Expense','Daily Expense','manage_options','my-menu','my_menu_output');
		//add_submenu_page('my-menu','Bank','bank','manage_options','my-menu');

		add_menu_page('Daily Expense', 'Daily Expense', 'manage_options', 'my-menu', 'my_menu_output' );
    	add_submenu_page('my-menu', 'Banks', 'Banks', 'manage_options', 'my-menu', 'my_menu_output' );
    	add_submenu_page('my-menu', 'Expense Category', 'Expense Category', 'manage_options', 'my-menu' );
	}

	public function my_menu_output(){
		print "Hello World";
	}
}

new menu_page();