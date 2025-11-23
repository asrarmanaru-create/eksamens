<?php

$tall1 = $_POST["tall1"];
$tall2 = $_POST["tall2"]; 

print(" tall 1 er $tall1 <br/>"); 
print(" tall 2 er $tall2 <br/>"); 

if ($tall1 < $tall2) {
    print(" tall 1 er mindre enn tall 2 <br/>");

}
else if ($tall1 > $tall2){
    print(" tall 1 er st&oslash;rre enn tall 2 <br/>");
}
else if ("tall1 == tall2") {
    print(" tall 1 er  lik tall 2 <br/>");

}
else  {
    print( " tall 1 er st&oslash;rre enn tall 2 <br/>"); 
}
?> 