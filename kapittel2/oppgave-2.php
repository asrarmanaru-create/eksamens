<?php
$Svar = $_POST["svar"];

if (!$Svar) {
    print("Du har ikke svart på spørsmålet ennå");
}
else if ($Svar == "j") {
    print("Du har svart ja på spørsmålet, og du er student");
}
else if ($Svar == "n") {
    print("Du har svart nei på spørsmålet, og du er ikke student");
}
else {
    print("Du har ikke svart ja eller nei på spørsmålet");
}
?>
    