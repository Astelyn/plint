<?php
class Config
{
	private static $data;

	static function load()
	{
		self::$data = parse_ini_file("config.ini", true);
	}
	
	static function get($section, $key)
	{
		return self::$data[$section][$key];
	}
	
	static function set($section, $key, $value)
	{
		self::$data[$section][$key] = $value;
	}
	
	static function save()
	{
		// Write out to config.ini
	}
}