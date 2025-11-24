<?php

function validerKlassekode($klassekode) {
    //antar at klassekode er lovlig til vi finner feil
    $lovligKlassekode = true;

    // skjekke im feltet er fylt ut 
    if (!$klassekode) {
        $lovligKlassekode = false;

    }
    // skjekk lengden ( må være nøyaktig 3 tegn )
    else if (strlen($klassekode) != 3) {
        $lovligKlassekode = false;

    }
    else {
        //hent ut vert tegn 
        $tegn1 = $klassekode[0];
        $tegn2 = $klassekode[1];
        $tegn3 = $klassekode[2];
        
        // første og andre tegn må være bokstaver
        if (!ctype_alpha($tegn1)) {
            $lovligKlassekode = false;

        }
        if (!ctype_alpha($tegn2)) { 
            $lovligKlassekode = false;

        }
        // siste tegn må være siffer 
        if (!ctype_digit($tegn3)) {
            $lovligKlassekode = false;

        }

    }

    return $lovligKlassekode;

}
$klassekode = $_POST["klassekode"];

$lovligKlassekode = validerKlassekode($klassekode);

if ($lovligklassekode) {
    print ("klassekode er korrekt fylt ut <br/>");

}
else {
    print (" klassekode er ikke korrekt fylt ut <br/>");

}
?>
