<?php

require_once 'connect.php';

$connect=mysqli_connect($hostname,$username,$password,$database);
mysqli_set_charset($connect,"utf8");
$kwerenda = "SELECT nick, data, wysryw FROM wysryw ORDER BY id DESC;";

$wynik=mysqli_query($connect,$kwerenda);

while($row=mysqli_fetch_array($wynik)){
echo<<<END
    <div id="wpis">
    <div id="wpis-nick"><h4>$row[nick]</h4></div>
    <div id="wpis-data"><h4>$row[data]</h4></div>
    <div id="wpis-tresc"><p>$row[wysryw]</p></div>
    <hr>
    </div>
    
END;
}  
?>