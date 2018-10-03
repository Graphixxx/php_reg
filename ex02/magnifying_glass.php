#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$str = file_get_contents($argv[1]);
		print_r($str);
	}
#preg_match_all("/(?:\stitle=(\")?)/", $file, $title, PREG_OFFSET_CAPTURE);
?>

