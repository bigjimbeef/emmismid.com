<?php

class WidgetFilelist extends WidgetBase
{
	public function __construct()
	{
	}

	protected function Render()
	{
		//$sTest = file_get_contents("http://localhost/CMS/HTML/widgets/filelist.html");

		$sFileList = file_get_contents("http://localhost/CMS/HTML/widgets/filelist.html");

		// TODO: File types
		$sFileType = "images";

		// Read all the files in the directory.
		$sDir = "/opt/emmisite/uploads/" . $sFileType;
		
		if ($hDir = opendir($sDir)) {
			$aFiles = array();

			while (false !== ($sEntry = readdir($hDir))) {
				if ($sEntry != "." && $sEntry != "..") 
				{
	        		$aFiles[] = $sEntry;
	        	}
	    	}

	    	$sFiles = "";
			foreach( $aFiles as $sFile )
			{
				$sLi = file_get_contents("http://localhost/CMS/HTML/widgets/file.html");
				supplant($sLi, array($sFile));

				$sFiles .= $sLi;
			}
			
			supplant($sFileList, array($sFiles));
    	}

		return $sFileList;
	}
}