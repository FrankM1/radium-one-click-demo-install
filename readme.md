One Click Demo Install for Wordpress Developers
==========================

This library works by importing wordpress content, widgets  and theme options with just one click.

**Requirements:**
* WordPress Theme
* Content.xml - generated using the Worpress Content Exporter plugin
* Widget.json - generated using the Widget Importer Exporter plugin. Rename it from .wie to .json
* theme_options.txt - generated using the theme options frameworks such as Redux Framework, NHP Options Framework or Radium Framework

##How to use:
Add  `require get_template_directory() .'/radium-one-click-demo-install/init.php';` to your theme's function.php

Copy the files generated above into `demo-files/`.

Modify what menus need to be loaded in the `Radium_Theme_Demo_Data_Importer` class located in `init.php` as well as the theme options name to be used.

A new menu should appear under

Appearance -> Import Demo Data

Click the import button 


That's it.

Follow me on Twitter. [twitter](http://twitter.com/Frankgm1 "@Frankgm1") 


