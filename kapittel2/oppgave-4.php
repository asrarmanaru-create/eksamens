<?php
$gift = $_POST["gift"];
$barn = $_POST["barn"];

if (!$gift || !$barn){
    print (" du har ikke svart p&aring; begge sp&oslash;rsm&aring;lene <br/>");
} elseif ($gift == "j" && $barn == "j"){
    print (" du er gift og har barn <br/>");
    
} elseif ($gift == "j" && $barn == "n"){
    print (" du er gift og ikke barn <br/>");
} elseif ($gift == "n" && $barn == "n") {
    print (" du er ikke gift og ikke har barn <br/>");
} else  {
    print (" du har ikke svart ja eller nei p&aring; begge sp&oslash;rsm&aring;lene <br/>");
}
?>