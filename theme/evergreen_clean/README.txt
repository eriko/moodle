Evergreen Clean is a clone of the Clean theme, a child of bootstrapbase.

Files modified:

Replaced 'clean_theme' with 'evergreen_clean_theme'
	config.php
	general.php
	lib.php
	settings.php
	version.php
	
Config.php	changes:
	moodle.css and editor.css are excluded from bootstrapbase theme
	theme local versions of moodle.css and editor.css and evergreen.css are added
	
/less directory copied from bootstrap base
moodle.less and editor.less are recompiled local to the evergreen_clean theme to generate moodle.css and editor.css
	moodle.less - set {padding-top: 0}
	bootstrap/breadcrumb.less - set .breadcrumb {background:none}
	
	To recompile less files
		cd theme/evergreen_archive/less/
		recess --compile --compress moodle.less > ../style/moodle.css	
	
layout/general.php
	added <div class="evergreen"> for evergreen topbar with logo linked to www.evergreen.edu

style/evergreen.css
	.evergreen class styles evergreen topbar
	
/pix
	evergreenlogo.png added
	favicon.ico - evergreen favicon added
	screenshot.jpg - theme screenshot added
	