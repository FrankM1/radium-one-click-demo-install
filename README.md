One Click Demo Install for WordPress Developers
==========================

*Note: original script written by https://github.com/FrankM1/radium-one-click-demo-install.*

This library works by importing wordpress content, widgets  and theme options with just one click.

### Requirements:

* WordPress Theme
* `content.xml` - generated using the Worpress Content Exporter plugin
* `widgets.json` - generated using the Widget Importer Exporter plugin. Rename it from .wie to .json
* `theme_options.txt` - generated using the theme options frameworks such as Redux Framework, NHP Options Framework or Radium Framework

### How to use:

Add `locate_template( 'radium-one-click-demo-install/example.php', true, true );` to your theme's `function.php`.

Copy the files generated above into `demo-files/`.

Modify what menus need to be loaded in the `Radium_Theme_Demo_Data_Importer` class located in `examle.php` as well as the theme options name to be used.

A new menu should appear under ***Appearance &raquo; Import Demo Data***.

Click the import button.

That's it!