<?php

// Move the uploaded file to the storage area.
static $BASE_PATH = "/opt/emmisite/uploads/";

static $IMG_REGEX = "/[.*](gif|jpg|tiff|tif|png)/";

$sUploaded = basename($_FILES['file']['name']);

// If the match fails, or returns no results, it's not an image.
$bImage = preg_match_all($IMG_REGEX, $sUploaded);

$sDirPath = $bImage ? "images/" : "books/";

$sImageName = str_replace(" ", "", $sUploaded);
$sFilePath = $BASE_PATH . $sDirPath . $sImageName;

if (move_uploaded_file($_FILES['file']['tmp_name'], $sFilePath)) 
{
	echo "Success!";
	return;
}

echo "FAILURE";