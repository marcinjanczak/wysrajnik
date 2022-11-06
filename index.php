<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wysrajnik</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="photos/kupa.png">
</head>
<body>
    <div id="content">
        <header>
           <div id="header-logo"><img id="logo" src="photos/kupa.png"></div>
           <div id="header-name"><h1>Wysrajnik</h1></div>
            <div id="header-logo"></div>
        </header>
    
    <div id="wysrywy">
    <?php
    include 'php/wysryw.php';
    ?>
    </div>
    
    <div id="wprowadzanie">
            <h3>Napisz swój wysryw</h3>
                <form action="" method="get" id="form">
                    <p>Nick</p>
                    <input type="text" name="nick"><br>
                    <p>Wysryw</p>
                    <textarea name="tresc"></textarea><br><br>
                    <button onclick="wyslij()">Wyślij</button> <br><br>
                </form>
    </div>
</div>

<script type="text/javascript">

function wyslij(){
    document.getElementById("form").subbmit();
    document.getElementById("form").reset();
    document.location.reload();

}


</script>


</body>
</html>