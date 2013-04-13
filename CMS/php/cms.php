<?php

class Cms
{
	public function __construct()
	{
	}

	public function InitBase()
	{
		$sIndexHTMLPath = "../HTML/index.html";

		// Get the basic HTML structure.
		$sContents = file_get_contents($sIndexHTMLPath);
		echo $sContents;
	}

	public function InitPageNav()
	{
		$cPage = new PageIllustrations();
	}

}