<?php
$svar=$_POST["svar"];
if (!$svar)
{
    print (" Du har ikke svart på spørmålet om du er student <br/>");
}
else if ($svar== "j") 
{
    print (" du har svart ja på spørsmålet, om du er student <br/>");

}
else if ($svar == "n")
{
    print (" du har svart nei på spørmålet, om du er sstudent <br/>");

}
else
{
    print (" du har ikke svart ja eller nei på spørmålet om du er student <br/>");

}
?> 
    