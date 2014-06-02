<?php

class Radium_Theme_Demo_Data_Importer extends Radium_Theme_Importer {

    /**
     * Holds a copy of the object for easy reference.
     *
     * @since 2.2.0
     *
     * @var object
     */
    private static $instance;

    /**
     * Constructor. Hooks all interactions to initialize the class.
     *
     * @since 2.2.0
     */
    public function __construct() {

        self::$instance = $this;
		parent::__construct();

    }

	public function set_demo_menus(){

		//Import Menus
		$top_menu = get_term_by('name', 'Top Menu', 'nav_menu');
		$main_menu = get_term_by('name', 'Main Menu', 'nav_menu');
		$footer_menu = get_term_by('name', 'Main Menu', 'nav_menu');

		set_theme_mod( 'nav_menu_locations' , array('top-menu' => $top_menu->term_id, 'primary' => $main_menu->term_id, 'footer-menu' => $footer_menu->term_id ) );

	}

}

new Radium_Theme_Demo_Data_Importer;