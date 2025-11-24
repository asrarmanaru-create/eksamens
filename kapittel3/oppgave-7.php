<?php 

if (isset($_POST["navn"])) {
    $navn = trim($_POST["navn"]); 

    $deler = explode(" ", $navn);

    if (count($deler) <= 2) {
        $fornavn = $deler[0];
        $etternavn = $deler[count($deler) - 1]; 

        print "fornavnet er $fornavn<br>"; 
        print "etternavnet er $etternavn<br>";
        }  else {
            print "vennligvist skriv inn både fornavn og etternavn. "; 
        }
        } 
        else {
            print "ingen navn mottatt. "; 
        }
        ?> 