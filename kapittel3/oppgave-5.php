<?php

$sum = 0; 

for ($i = 1; $i <= 10; $i++) {
    $sum += $i; 
}

$antall = 10; 
$gjennomsnitt = $sum / $antall; 

print " summen av tallene fra 1 til 10 er $sum<br>"; 
print " gjennomsnittet av tallene fra 1 til 10 er $gjennomsnitt";
?>