<?php

abstract class WidgetBase
{
	public function __construct()
	{
	}

	public function AddToPage()
	{
		$this->Render();

		$this->BindEvents();
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