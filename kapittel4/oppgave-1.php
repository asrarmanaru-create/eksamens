<?php

$postnr = $_POST["postnr"];
$lovligPostnr = true;

if (!$postnr) // postnr er ikke fult ut 
{ 
    $lovligPostnr = false;
    print (" Postnr er ikke fult ut <br />");
}
else if (strlen($postnr) != 4) // postnr består ikke av 4 tegn
{ 
    $lovligPostnr = false;
    print (" Postnr består ikke av 4 tegn <br/>");
}
else if (!ctype_digit($postnr)) // minst ett av tegnene er ikke et siffer
{
    $lovligPostnr = false;
    print (" Postnr består ikke bare av siffer <br/>");

}
if ($lovligPostnr)
{
    print(" Postnr er korrekt fult ut <br/>");

}
?>
     
        
    