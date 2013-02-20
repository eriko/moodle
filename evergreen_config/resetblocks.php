<?php
require_once('config.php');
require_once($CFG->libdir.'/blocklib.php');
$courses = get_courses(49);//can be feed categoryid to just effect one category
echo("<p>about to reset blocks on ".count($courses). " courses</p>");
foreach($courses as $course) {
	//$page = page_create_object(PAGE_COURSE_VIEW, $course->id);
	echo("<p>about to reset blocks on ".$course->fullname . "</p>");
	$context = get_context_instance(CONTEXT_COURSE,$course->id);
	blocks_delete_all_for_context($context->id);
	blocks_add_default_course_blocks($course);
	order_default_course_blocks($course);
}
echo('<p>Done!</p>');

function order_default_course_blocks($course) {
	$contextid = get_context_instance(CONTEXT_COURSE,$course->id)->id;
    global $DB;
    $instances = $DB->get_recordset('block_instances', array('parentcontextid' => $contextid));
    foreach ($instances as $instance) {
		switch ($instance->blockname)	{
			case "fac_help";
				$instance->defaultweight = -6;
				break;
			case "stu_help";
				$instance->defaultweight = -5;
				break;
			case "participants";
				$instance->defaultweight = -4;
				break;
			case "messages";
				$instance->defaultweight = 5;
				break;
			case "staff";
				$instance->defaultweight = 6;
				break;
		}
		$DB->update_record('block_instances', $instance);
    }
    $instances->close();
}

?>