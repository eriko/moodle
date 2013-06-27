evergreen_clean is a clone of the Clean theme, a child of bootstrapbase.

Files modified:
Rename /lang/en/theme_clean.php to theme_evergreen_clean.php

Replaced 'clean_theme' with 'evergreen_clean_theme'
	theme_evergreen_clean.php
	config.php
	columns1.php
	columns2.php
	columns3.php
	lib.php
	settings.php
	version.php
	
Config.php	changes:
	moodle.css and editor.css are excluded from bootstrapbase theme
	theme local versions of moodle.css and editor.css and evergreen.css are added
	
/less directory copied from bootstrap base
moodle.less and editor.less are recompiled local to the evergreen_clean theme to generate moodle.css and editor.css
	moodle.less - set {padding-top: 0}
	bootstrap/breadcrumb.less - set .breadcrumb {background-color:none}
	bootstrap/variables.less - changed @headings color to lighten 
	bootstrap/type.less - change multiplier for headings to reduce size
	moodle/modules.less - .breadcrumb-button {margin-top: 10px;}
	
	
	To recompile less files
		cd theme/evergreen_archive/less/
		recess --compile --compress moodle.less > ../style/moodle.css	
		recess --compile --compress editor.less > ../style/editor.css
	
layout/columns[1-3].php, secure.php
	added <div class="evergreen"> for evergreen topbar with logo linked to www.evergreen.edu
	added "/my/" to set brand to link to moodle/my at <a class="brand" href="<?php echo $CFG->wwwroot;?>/my/"><?php echo $SITE->shortname; ?></a>

style/evergreen.css
	.evergreen class styles evergreen topbar
	
/pix
	evergreenlogo.png added
	favicon.ico - evergreen favicon added
	screenshot.jpg - theme screenshot added