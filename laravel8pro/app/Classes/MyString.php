<?php

namespace App\Classes;


class MyString
{
	// Function to convert string into slug format
	public function slugify($text)
	{
		//replace non letter or digit by ~
		$text = preg_replace('~[^\pL\d]+~u', '-', $text);

		// transliterate
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

		// remove unwanted characters
		$text = preg_replace('~[^-\w]+~','',$text);

		// trim
		$text = trim($text, '-');

		// remove duplicate -
		$text = preg_replace('~-+~', '-', $text);

		// lowercase
		$text = strtolower($text);

		if(empty($text)){
			echo 'n-a';
		}

		echo $text;

	}
	
}