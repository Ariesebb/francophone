<?php
echo "<h4><a>" , $row["Compagnie"] ,"&nbsp;", $row["GB"] , "GB!!</a></h4><br><p>",$row["MinutesSms"]," minutes/sms par mois.&emsp; <br>&emsp;la sim coute:&emsp;------------>&emsp;",$row["PrixSim"] ,"₪&emsp;(paiment unique).&emsp;&emsp;<br>&emsp;appeles etranger inclue:&emsp;------->",$row["HUL"] ,"&emsp;(minutes/mois)&emsp;&emsp;</p> ";