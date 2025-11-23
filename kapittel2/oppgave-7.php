<?php

$tall1 = $_POST["tall1"];
$tall2 = $_POST["tall2"];
$tall3 = $_POST["tall3"];

print("Tall 1 er $tall1 <br/>");
print("Tall 2 er $tall2 <br/>");
print("Tall 3 er $tall3 <br/><br/>");

// Sammenligning: tall 1 og tall 2
if ($tall1 < $tall2) {
    print("Tall 1 er mindre enn Tall 2<br/>");
} elseif ($tall1 == $tall2) {
    print("Tall 1 er lik Tall 2<br/>");
} else {
    print("Tall 1 er større enn Tall 2<br/>");
}

// Sammenligning: tall 1 og tall 3
if ($tall1 < $tall3) {
    print("Tall 1 er mindre enn Tall 3<br/>");
} elseif ($tall1 == $tall3) {
    print("Tall 1 er lik Tall 3<br/>");
} else {
    print("Tall 1 er større enn Tall 3<br/>");
}

// Sammenligning: tall 2 og tall 3
if ($tall2 < $tall3) {
    print("Tall 2 er mindre enn Tall 3<br/>");
} elseif ($tall2 == $tall3) {
    print("Tall 2 er lik Tall 3<br/>");
} else {
    print("Tall 2 er større enn Tall 3<br/>");
}
?>