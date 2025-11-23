<?php
$svar = $_POST["svar"];
if (!$svar) {
    print ("du har ikke svart p&aring; sp&oslash;rsm&aring;let om du er student <br/>");
}
else if ($svar == "j"  || $svar == "J" || $svar == "ja" || $svar == "JA" || $svar == "Ja") {
    print ("du har svart ja p&aring; sp&oslash;rsm&aring;let om du er student <br/>");
}
else if ($svar == "n" || $svar == "N" || $svar=="nei" || $svar == "NEI" || $svar == "Nei") {
    print (" du har svart nei p&aring; sp&oslash;rsm&aring;let om du er student <br/>");
}
else {
    print (" du har ikke svart ja eller nei p&aring; sp&oslash;rsm&aring;let om du er student <br/>");

}
?>