<?php
/* Oppgave 1 - funksjon validerPostnr */

/*
   Funksjonen validerer at postnummer:
   - er fylt ut
   - består av nøyaktig 4 tegn
   - alle tegnene er siffer
*/

function validerPostnr($postnr)
{
    $lovligPostnr = true;

    if (!$postnr) /* postnr er ikke fylt ut */
    {
        $lovligPostnr = false;
        print("Postnr er ikke fylt ut <br />");
    }
    else if (strlen($postnr) != 4) /* postnr består ikke av 4 tegn */
    {
        $lovligPostnr = false;
        print("Postnr består ikke av 4 tegn <br />");
    }
    else
    {
        if (!ctype_digit($postnr)) /* minst ett av tegnene er ikke et siffer */
        {
            $lovligPostnr = false;
            print("Postnr består ikke bare av siffer <br />");
        }
    }

    if ($lovligPostnr) /* postnr er korrekt fylt ut */
    {
        print("Postnr er korrekt fylt ut <br />");
    }

    return $lovligPostnr; // returnerer true/false
}

/* Eksempel på bruk */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $postnr = $_POST["postnr"];
    validerPostnr($postnr);
}
?>