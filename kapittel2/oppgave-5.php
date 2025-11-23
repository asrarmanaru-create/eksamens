<?php

$tall1 = $_POST["tall1"];
$tall2 = $_POST["tall2"];
$operasjon = $_POST["operasjon"];

print (" tall 1 er $tall1 <br/>");
print ("tall 2 er $tall2 <br/>");

if ($operasjon == 1) {
    print ("regneopperasjonen er addisjon <br/>");
    print (" resultatet av regneoperasjonene er" . ($tall1 + $tall2));

}
else if ($operasjon == 2) {
    print (" regneoperasjonene er subtraksjon <br/>");
    print (" resultatet av regneoperasjonen er " . ($tall1 - $tall2));

}
else if ($operasjon == 3) {
    print (" regneoperasjonen er multiplikasjon <br/>");
    print (" resultatet av regneoperasjonen er " . ($tall1 * $tall2));

}
else if ($operasjon == 4) {
    print (" regneoperasjonen er divisjon <br/>");
    print (" resultatet av regneoperasjonene er " . ($tall1 / $tall2));

}
else {
    print (" du har ikke angitt en gyldig regneoperasjon <br/>");

}
?>

    