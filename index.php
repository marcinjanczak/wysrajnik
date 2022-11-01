<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wysrajnik</title>
    <link rel="stylesheet" href="text/style.css">
    <link rel="icon" href="photos/kupa.png">
</head>
<body>
    <div id="content">
        <header>
           <div id="header-logo"><img id="logo" src="photos/kupa.png"></div>
           <div id="header-name"><h1>Wysrajnik</h1></div>
           <div id="addvertise"></div>
        </header>

         <div id="wysrywy">
            
<?php
    include 'php/wysryw.php';
?>
         </div>
         <div id="wprowadzanie">
            <p>Napisz swój wysryw</p>
                <form action="" method="POST" name="form1">
                    <p>Nick</p>
                    <input type="text" name="nick"><br>
                    <p>Wysryw</p>
                    <input id="form" type="text" name="tresc"><br><br>
                    <button type="submit">Wyślij</button><br><br>
                </form>

         </div>
    </div>
</body>
</html>