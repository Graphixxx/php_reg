#!/usr/bin/php
<?php
    function month_convert($month)
    {
        $months = array(
                "Janvier" => 1,
                "Fevrier" => 2,
                "Mars" => 3,
                "Avril" => 4,
                "Mai" => 5,
                "Juin" => 6,
                "Juillet" => 7,
                "Aout" => 8,
                "Septembre" => 9,
                "Octobre" => 10,
                "Novembre" => 11,
                "Decembre" => 12);
        return ($months[$month]);
    }

    if ($argc > 1)
    {
        $str = trim($argv[1]);
        if (substr_count($str, ' ') == 4)
        {
            if (preg_match("/((l|L)undi|(M|m)ardi|(M|m)ercredi|(J|j)eudi|(V|v)endredi|(S|s)amedi|(D|d)imanche) (\d\d?) ((J|j)anvier|(F|f)evrier|(M|m)ars|(A|a)vril|(M|m)ai|(J|j)uin|(J|j)uillet|(A|a)out|(S|s)eptembre|(O|o)ctobre|(N|n)ovembre|(D|d)ecembre) (\d{4}) (\d\d?):(\d\d):(\d\d)/", $str, $matches))
            {
                date_default_timezone_set("Europe/Paris");
                echo (mktime($matches[24], $matches[25], $matches[26],
                    month_convert($matches[10]), $matches[9], $matches[23])."\n");
            }
        }
        else
            echo "Wrong Format\n";
    }
?>