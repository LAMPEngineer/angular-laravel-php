<?php

namespace App\Classes\Facade;

class Twitter
{
	protected $curl;

	public function __construct(Curl $curl)
	{
		$this->curl = $curl;

	}

	public function publish($status)
	{
		$this->curl->post($status);
	}
}