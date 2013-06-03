<?php
require_once('config.php');
require_once($CFG->libdir.'/blocklib.php');
$context = get_context_instance(CONTEXT_COURSE,1808);
$roles = get_user_roles($context,4, $checkparentcontexts = true);
print_r($roles);