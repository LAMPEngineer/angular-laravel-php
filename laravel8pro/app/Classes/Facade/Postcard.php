<?php

namespace App\Classes\Facade;


class Postcard
{


	protected static function resolveFacades($name)
	{
		return app()[$name];

	}


	public static function __callStatic($method, $arguments)
	{

		return (self::resolveFacades(name: 'Postcard'))->$method(...$arguments);
		
	}


}