<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oppgave 8</title>
</head>
<body>
    <h2> skriv inn tre tall</h2> 
    <form method="post" 
    Tall 1: <input type="number" name="tall1" required><br/>
    Tall 2: <input type="number" name="tall2" required><br/>
    Tall 3: <input type="number" name="tall3" required><br/>
    <input type="submit" value="sammenling"><br/> 
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tall1 = $_POST["tall1"];
        $tall2 = $_POST["tall2"];
        $tall3 = $_POST["tall3"];

        print("<h3> Resultat : </h3>");
        print("Tall 1 er $talll<br>");
        print("Tall 2 er $tall2<br>");
        print("Tall 3 er $tall3<br><br>");

        // sammenligning tall 1 og tall 2
        if ($tall1 < $tall2) {
            print ("tall 1 er mindre enn tall 2<br>");
            } 
            else if ($tall1 == $tall2) {
                print ("tall 1 er lik tall 2<br>");
            }
            else {
                print(" tall 1 er større enn tall 2<br>");
            }

            //sammenligning tall 1 og tall 3
            if ($tall1 < $tall3) {
                print (" tall 1 er mindre enn tall 3<br>");
                } 
                else if ($tall1 == $tall3) {
                    print ("talle 1 er lik tall 3<br>");
                }
                else {
                    print(" tall 1 er større enn tall 3<br>");
                }

                //sammenligning tall 2 og tall 3
                if ($tall2 < $tall3) {
                    print(" tall 2 er mindre enn tall 3<br>");
                    } 
                    else if ($tall2 == $tall3) {
                        print (" tall 2 er lik tall 3<br>");

                }
                    else {
                        print (" tall 2 er større enn tall 3<br>");
                    }

    }
    ?>
</body>
</html>