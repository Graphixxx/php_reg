#!/usr/bin/php
<?php
    function trimming($str)
    {
        $str = trim($str);
        $str = preg_replace("/\s+/", " ", $str);
        return ($str);
    }

    if ($argc > 1)
        echo (trimming($argv[1]));
?>