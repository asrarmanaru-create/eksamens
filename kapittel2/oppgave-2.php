<?php
/* Oppgave 2 */
/*
/* Programmet mottar fra et HTML-skjema et svar på spørsmålet "Er du student (j/n) ?"
/* Programmet sjekker om det er svart j eller n på spørsmålet og skriver ut en passende melding
*/

if (!isset($_POST["svar"])) {
    print("Du har ikke svart p&aring; sp&oslash;rsm&aring;let om du er student <br/>");
} else {
    $svar = $_POST["svar"];
    if ($svar == "j") {
        print("Du har svart ja p&aring; sp&oslash;rsm&aring;let om du er student <br/>");
    } else if ($svar == "n") {
        print("Du har svart nei p&aring; sp&oslash;rsm&aring;let om du er student <br/>");
    } else {
        print("Du har ikke svart ja eller nei p&aring; sp&oslash;rsm&aring;let om du er student <br/>");
    }
}
?>