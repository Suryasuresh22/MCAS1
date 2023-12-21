<?php

$cricket = array("GILL", "ROHIT", "KOHLI","SANJU","JADEJA");
?>
<html>
<head><title>cricket</title></head>
<body>
<h1>INDIAN CRICKET TEAM</H1>
<table border="1">
<tr><th>SL N0</th><th>NAME</th><tr>
<?php
for($i=1;$i<6;$i++)
   {

      echo"<tr><td>" .$i ."</td>";
     echo"<td>" .$cricket[$i-1] ."</td></tr>";

   }
?>
</table>
</body>
</html>