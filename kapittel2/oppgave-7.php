<?php

$tall1 = $_POST["tall1"];
$tall2 = $_POST["tall2"];
$tall3 = $_POST["tall3"];

print(" tall 1 er $tall1 <br/>");
print(" tall 2 er $tall2 <br/>");
print(" tall 3 er $tall3 <br/>");

if ($tall1 < $tall2) {
    print(" tall 1 er mindre enn tall 2<br/>");
}
else if ($tall1 == $tall2) {
    print(" tall 1 er lik tall 2");
}
else {
    print(" tall 1 er st&oslash;rre enn tall 2<br/>");
}

if ($tall1 < $tall3) {
    print(" tall 1 er mindre enn tal 3<br/>");
}
else if ($tall1 == $tall3) {
    print(" tall 1 er like tall 3<br/>");
}
else {
    print(" tall 1 er st&oslash;rre enn tall 3<br/>");
}


if ($tall2 < $tall3) {
    print(" tall 2 er mindre enn tall 3<br/>");
}
else if ($tall2 == $tall3) {
    print (" tall 2 er lik tall 3<br/>");
}
else {
    print (" tall 2 er st&oslash;rre enn tall 3<br/>");
}
?>