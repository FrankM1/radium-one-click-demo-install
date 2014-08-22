One Click Demo Install for Wordpress Developers
==========================

This library works by importing wordpress content, widgets  and theme options with just one click.

**Requirements:**
* WordPress Theme
* Content.xml - generated using the Worpress Content Exporter plugin
* Widget.json - generated using the Widget Importer Exporter plugin
* theme_options.txt - generated using the theme options frameworks such as Redux Framework, NHP Options Framework or Radium Framework

##How to use:

Copy the files generated above into `demo-files/`. 

Include `init.php` in your theme's `functions.php`

Modify what menus need to be loaded in the `Radium_Theme_Demo_Data_Importer` class located in `init.php`

A new menu should appear under 

Appearance -> Import Demo Data

If you click  


That's it.

Follow me on Twitter. @Frankmg1

 
