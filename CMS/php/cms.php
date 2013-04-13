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
		$aPages = array(
			new PageIllustrations(),
			new PageProjects(),
			new PageBooks(),
			new PageCv(),
			new PageContacts()
		);
		
		$sNavBarHTMLPath = "../HTML/navbar.html";
		$sNavBar = file_get_contents($sNavBarHTMLPath);

		$sNavBarContents = "";
		foreach($aPages as $cPage)
		{
			$sNavBarContents .= $cPage->CreateThumbnail();
		}

		supplant($sNavBar, array($sNavBarContents));

		echo $sNavBar;
	}

	public function AddEvents()
	{
		$sJsPath = "../js/init.js";
		echo file_get_contents($sJsPath);
	}

	public function InitBody()
	{
		/*
		$sTest = "<div id='content'>";

		$sBody = 
		'<form action="/file-upload"
      	class="dropzone clickable"
      	id="my-awesome-dropzone"></form>';

      	$sTest .= $sBody;

		echo $sTest;
		*/
	}
}