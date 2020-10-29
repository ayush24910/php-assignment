<?php
    //Set default timezone
        date_default_timezone_set('UTC');

    //set timezone for New Zealand
        date_default_timezone_set('NZ');
        echo "<b/>The time in New Zealand : ".date("h:i:sa")."<br><hr/><b/>"; 

    //set timezone for Australia
        date_default_timezone_set("Australia/Sydney");
        echo "<b/>The time in Australia : ".date("h:i:sa")."<br><hr/>";

    //set timezone for America
        date_default_timezone_set("America/New_York");
        echo "<b>The time in America :<b/>".date("h:i:sa")."<br><hr/>";
        
    //set timezone for Europe
        date_default_timezone_set("Europe/Berlin");
        echo "<b/>The time in Germany :".date("h:i:sa")."<br><hr/>";

    //set timezone for India
        date_default_timezone_set("Asia/kolkata");
        echo "<b/>The time in India : ".date("h:i:sa")."<br><hr/>";

?>