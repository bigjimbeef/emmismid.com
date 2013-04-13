<?php

abstract class WidgetBase
{
	public function __construct()
	{
	}

	public function AddToPage()
	{
		$sContents = $this->Render();

		$sContents .= $this->BindEvents();

		return $sContents;
	}

	protected function Render()
	{
		// Do nothing.
	}

	protected function BindEvents()
	{
		// Do nothing.
	}
}