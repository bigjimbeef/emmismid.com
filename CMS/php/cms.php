<?php

class Cms
{
	// The pages for the CMS.
	private $paPages;

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
		$this->paPages = array(
			new PageIllustrations(),
			new PageProjects(),
			new PageBooks(),
			new PageCv(),
			new PageContacts()
		);
	}

	public function InitBody()
	{
		$cCurrent = null;
		foreach($this->paPages as $cPage)
		{	
			if ( strcmp($_GET['page'], strtolower($cPage->Name())) == 0 )
			{
				$cCurrent = $cPage;
			}
		}

		if ( isset($cCurrent) )
		{
			// Render the page.
			list($sLeft, $sRight) = $cCurrent->Render();

			$sBodyHTMLPath = "../HTML/body.html";
			$sBody = file_get_contents($sBodyHTMLPath);

			supplant($sBody, array($sLeft, $sRight));

			echo $sBody;
		}
	}
}