<?php

class PageIllustrations extends PageBase
{
	public function __construct()
	{
	}

	public function Name()
	{
		return "Illustrations";
	}

	public function Render()
	{
		$cFilelist = new WidgetFilelist();
		$sLeft = $cFilelist->AddToPage();

		// We want a file upload widget here.
		$cFileUpload = new WidgetUpload();
		$sRight = $cFileUpload->AddToPage();

		return array($sLeft, $sRight);
	}
}