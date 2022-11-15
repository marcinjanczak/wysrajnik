<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wysrajnik</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="photos/kupa.png">
</head>


<body>
    <div id="content">
        <header>
           <div id="header-logo"><img src="photos/kupa.png" class="logo"></div>
           <div id="header-name"><h1>Wysrajnik</h1></div>
           <div id="header-logo"></div>
        </header>
        
        <div id="wprowadzanie">
                <h3>Napisz swój wysryw</h3>
                    <form action="php/send.php" method="post" id="form">
                        <label name="nick"><strong>  Nick</strong></label><br>
                        <input type="text" name="nick"><br>
                        <label id="wysryw"><strong> Wysryw</strong></label>
                        <textarea name="tresc"></textarea><br><br>
                        <button onclick="wyslij()" name="wyslij"><strong>Wyślij</strong></button> <br><br>
                    </form>
        </div>
    <div id="wysrywy">
    <?php
    include 'php/wysryw.php';
    ?>
    </div>
    <footer>
       <a href="https://github.com/marcinjanczak/wysrajnik" target="_blank"> <img class="github"src="photos/github.png"></a>
    </footer>    
</div>


<script type="text/javascript">
function wyslij(){
     document.getElementById("form").subbmit();
     document.getElementById("form").reset();
}
</script>



</body>
</html>
