<?php


// Represents a page on the site.
// This contains a list of all information that the page
// will need in order to be set up for pushing live.
abstract class PageBase
{
	// The name of the page.
	protected $psName;

	public function __construct()
	{
	}

	public function CreateThumbnail()
	{
		// Creates the little thumbnail for
		// the page from an HTML fragment.
		$sThumb = file_get_contents("../HTML/pagethumb.html");
		echo $sThumb;
	}
}