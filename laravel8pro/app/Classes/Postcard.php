<?php

namespace App\Classes;


class Postcard
{

	/*public static function any()
	{
		dump(var: "inside");
	}*/

	public static function __callStatic($method, $arguments)
	{
		dd(vars: $arguments);
	}


}