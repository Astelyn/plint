<?php
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
		// Pull data and do whatever
	}
	
	function display()
	{
		// TODO: use a class to manage themes; this is a placeholder
		include("themes/default/templates/header.html");
?>
		<p>Test</p>
<?php		
		include("themes/default/templates/footer.html");
	}
}
