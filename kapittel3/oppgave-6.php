<?php

if (isset($_POST["angittTall"])) {
    $angittTall = (int)$_POST["angittTall"];

    if ($angittTall <= 0) {
        print "tallet $anfittTall er ikke positivt heltall.<br/>";
        } 
        else {
            print " tallene fra 1 til $angittTall er:<br/>";
            for ($tall = 1; $tall <= $angittTall; $tall++) {
            print $tall . "<br/>";
            }
        }
        } 
        else {
            print " ingen tall motatt.";
        }
?>
