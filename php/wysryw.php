<?php

$hostname="localhost";
$password="";
$database="wysrajnik";
$username="root";

$nick=$_GET["nick"];
$tresc=$_GET["tresc"];

$connect=mysqli_connect($hostname,$username,$password,$database);
mysqli_set_charset($connect,"utf8");
$kwerenda="SELECT nick,wysryw,data FROM wysryw;";
$wynik=mysqli_query($connect,$kwerenda);

echo "<h1>JD</h1>";

while($row=mysqli_fetch_array($wynik)){
echo<<<END
    
    <div id="wpis">
    <div id="wpis-nick"><h4>$row[nick]</h4></div>
    <div id="wpis-data"><h4>$row[data]</h4></div>
        <div id="wpis-tresc"><p>$row[wysryw]</p></div>
        
    </div>
    
END;
}
    
    $input = "INSERT INTO wysryw (nick, wysryw) VALUES ('$nick','$tresc');";
    if ($nick==NULL OR $tresc==NUll){
    }
    else{
    $send=$connect->query($input);
    }   
    mysqli_close($connect);
?>