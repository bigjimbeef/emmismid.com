<?php

class WidgetFilelist extends WidgetBase
{
	public function __construct()
	{
	}

	protected function Render()
	{
		$sFileList = file_get_contents("../HTML/widgets/filelist.html");

		// Get all the files.

		// DEBUG LOL
		$aFiles = array("File 1", "File 2", "Mr. Potato", "Carrotman");
		$sFiles = "";
		foreach( $aFiles as $sFile )
		{
			$sLi = file_get_contents("../HTML/widgets/file.html");
			supplant($sLi, array($sFile));

			$sFiles .= $sLi;
		}
		
		supplant($sFileList, array($sFiles));

		return $sFileList;
	}
}