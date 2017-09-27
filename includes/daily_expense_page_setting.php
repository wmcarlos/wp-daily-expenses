<?php

	class daily_expense_page_setting{
		public function __construct(){
			add_action('admin_menu',array(__CLASS__,'daily_expense_add_setting_page'));
		}

		public function daily_expense_add_setting_page(){
			add_options_page(
				'Daily Expense Setting',
				'Daily Administration Setting',
				'options-general',
				'custom-admin-page',
				array(__CLASS__,'daily_expense_setting_page_render')
			);
		}

		public function daily_expense_setting_page_render(){
			print "<h1>Hello World</h1>";
		}
	}