<?php
	namespace App\Billing;

	/**
	 * 
	 */
	class Stripe 
	{
		protected $key;

		public function __construct($key)
		{
			$this->key = $key;
		}

		public function getKey()
		{
			return $this->key;
		}
	}