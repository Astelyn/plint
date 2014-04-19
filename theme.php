<?php
class Theme
{
	public static $name;
	public static $path;

	static function load($name)
	{
		self::$name = $name;
		self::$path = "themes/" . $name . "/";
	}
	
	function display_header()
	{
		include(self::$path . "templates/header.html");
	}
	
	function display_footer()
	{
		include(self::$path . "templates/footer.html");
	}
}