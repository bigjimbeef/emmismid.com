<?php
	// I love PHP.
	function __autoload($sClassName) {
    	// Split the class name by caps.
    	preg_match_all('/[A-Z][^A-Z]*/', $sClassName, $aResults	);

    	foreach( $aResults as $aResult )
    	{
    		$sPath = "";
    		$iLen = count($aResult);
    		for( $i = 0; $i < $iLen; ++$i )
    		{
    			$sPath .= $aResult[$i];
    			if ( $i < $iLen - 1 )
    			{
    				$sPath .= DIRECTORY_SEPARATOR;
    			}
    		}

    		$sFileName =
    			dirname(__FILE__) .
    			DIRECTORY_SEPARATOR .
    			strtolower($sPath) .
    			".php";

    		include_once($sFileName);
    	}
	}

	function supplant(&$sString, array $aFragments)
	{
		foreach( $aFragments as $iIdx => $sFragment )
		{
			$sTarget = "{" . $iIdx . "}";
			$sString = str_replace($sTarget, $sFragment, $sString);
		}
	}

	// Create everything necessary in one handy function.
	$cCms = new Cms();
	$cCms->InitBase();
	$cCms->InitPageNav();
	$cCms->InitBody();

	$cCms->AddEvents();
?>