<?php

namespace App\Classes;

	/**
	 * 
	 */
	class Page
	{

		public static function all()
		{
			$contents = array('blog','about','contact');
			foreach ($contents as $key => $content) {
				$pages[$key]['title'] = ucfirst($content). ' Page';
				$pages[$key]['slug'] = $content;
			}

			return $pages;
		}

	}