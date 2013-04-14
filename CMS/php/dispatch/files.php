<?php

class DispatchFiles extends DispatchBase
{
	public function __construct()
	{
		
	}

	protected function GetResponse()
	{
		$cFileList = new WidgetFilelist();
		$sTest = $cFileList->AddToPage();

		return $sTest;
	}
}
