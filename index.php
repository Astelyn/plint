<?php
require("config.php");
require("theme.php");

Config::load();
Theme::load(Config::get("theme", "name"));

$uri = explode('/', $_SERVER['REQUEST_URI']);

switch ($uri[count($uri) - 2])
{
	case "forum":
	{

	}
	
	case "thread":
	{

	}
	
	case "user":
	{

	}
	
	default:
	{
		$index = new Index();
		$index->display();
	}
}

class Index
{
	function __construct()
	{

	}
	
	function display()
	{
		// TODO: use a class to manage themes; this is a placeholder
		Theme::display_header();
?>
		<p>Test</p>
<?php		
		Theme::display_footer();
	}
}