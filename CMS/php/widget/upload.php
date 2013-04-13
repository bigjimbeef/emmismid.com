<?php

class WidgetUpload extends WidgetBase
{
	// The file that holds the HTML content of the widget.
	protected $psWidgetContent;

	public function __construct()
	{
	}

	protected function Render()
	{
		$sWidget = file_get_contents("../HTML/widgets/uploader.html");
		return $sWidget;
	}

	protected function BindEvents()
	{
		echo "<script>Uploader.Init();</script>";
	}
}