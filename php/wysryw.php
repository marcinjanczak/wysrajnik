<?php

$hostname="localhost";
$password="";
$database="wysrajnik";
$username="root";

$nick=$_POST["nick"];
$tresc=$_POST["tresc"];

$connect=mysqli_connect($hostname,$username,$password,$database);
mysqli_set_charset($connect,"utf8");
$kwerenda="SELECT nick,wysryw,data FROM wysryw;";
$wynik=mysqli_query($connect,$kwerenda);

echo<<<END
    <table>
    <tr>
        <td>Wysryw</td>
        <td>pseudonim</td>
        <td>Data wstawienia</td>
    </tr>
END;
while($row=mysqli_fetch_array($wynik)){

echo<<<END
    <tr> 
         <td>$row[wysryw] </td>
         <td><strong>$row[nick] </strong></td>
         <td>$row[data] </td>
    </tr>
END;
}
    echo "</table>";

    $input = "INSERT INTO wysryw (nick, wysryw) VALUES ('$nick','$tresc');";
    if ($nick==NULL OR $tresc==NUll){
    }
    else{
    $send=$connect->query($input);
    }

    mysqli_close($connect);
?>