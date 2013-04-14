<?php
	include_once("stdfunctions.php");

	// Create everything necessary in one handy function.
	$cCms = new Cms();
	$cCms->InitBase();
	$cCms->InitPageNav();
	$cCms->InitBody();

	$cCms->AddEvents();
?>