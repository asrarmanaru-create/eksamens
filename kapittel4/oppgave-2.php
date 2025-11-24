<?php

$klassekode = $_POST["klassekode"];
$lovligKlassekode = true;

if (!$klassekode) // klassekoden ikke er fylt ut 
{  
    $lovligKlassekode = false;
    print (" klassekode er ikke fylt ut <br/>");

}
else if (strlen($klassekode) != 3) // klasse kode består ikke av 3 tegn
{  
    $lovligKlassekode = false;
    print (" klassekode består ikke av 3 ten <br/>");

}
else 
{
    $bokstav1 = substr($klassekode,0,1); // første tegn
    $bokstav2 = substr($klassekode,1,1); // andre tegn 
    $siffer = substr($klassekode,2,1); // tredje tegn 

    if (!ctype_alpha($bokstav1) || !ctype_alpha($bokstav2)) // om første to er ikke bokstaver 
    {  
        $lovligKlassekode = false;
        print(" De to første tegnene må være bokstaver <br/>");

    }
    else if (!ctype_digit($siffer)) // om siste tegn er ikke siffer 
    {  
        $lovligKlassekode = false;
        print(" Det siste tegnet må være et siffer <br/>");

    }
    if ($lovligKlassekode) // om klasse koden er korrekt fylt ut 
    { 
        print (" Klassekoden er fylt ut rikitg <br/>");

    }
}
?>