<?php

include_once("../stdfunctions.php"); 

class DispatchBase
{
	public function __construct()
	{
		$this->RouteRequest();
	}

	private function RouteRequest()
	{
		$aPostData = $_POST;

		if ( !isset($aPostData['route']) )
		{
			echo "No route specified!";
			return;
		}

		$sResponse = "";
		switch( $aPostData['route'] )
		{
			case "files":
				$cDispatch = new DispatchFiles();
				$sResponse = $cDispatch->GetResponse();
				break;
			default:
				break;
		}

		$this->SendResponse($sResponse);
	}

	protected function GetResponse()
	{
		// Do nothing.
	}

	private function SendResponse($sRes)
	{
		$sJSResponse = $sRes;

		echo $sJSResponse;
	}
}

// Handle the dispatching.
$cDispatchBase = new DispatchBase();