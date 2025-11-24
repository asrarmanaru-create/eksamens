<?php

$emnekode = $_POST["emnekode"];
$lovligEmnekode = true;

if (!$emnekode)
{  
    $lovligEmnekode = false;
    print (" emnekode er ikke fylt ut <br/>");

}
else if (strlen($emnekode) != 7) // om emne koden ikke består av 7 tegn 
{   
    $lovligEmnekode = false;
    print (" emnekoden består ikke av 7 tegn <br/>");

}
else 
{ 
    $bokstav1 = substr($emnekode,0,1);
    $bokstav2 = substr($emnekode,1,1);
    $bokstav3 = substr($emnekode,2,1);

    $siffer1 = substr($emnekode,3,1);
    $siffer2 = substr($emnekode,4,1);
    $siffer3 = substr($emnekode,5,1);

    $siste = substr($emnekode,6,1);

    if (!ctype_alpha($bokstav1) || !ctype_alpha($bokstav2) || !ctype_alpha($bokstav3))
    {   
        $lovligEmnekode = false;
        print (" de tre første tegnene må være bokstaver <br/>");

    }
    else if (!ctype_digit($siffer1) || !ctype_digit($siffer2) || !ctype_digit($siffer3))
    {    
        $lovligEmnekode = false;
        print(" de tre neste tegn må være siffer <br/>");

    }
    else if (!ctype_alnum($siste)) 
    {    
        $lovligEmnekode = false;
        print(" det siste tegnet må være bokstav eller siffer <br/>");

    }

    if ($lovligEmnekode)
    {   
        print (" emnekoden er korrekt fylt ut <br/>");

    }

}
?> 
