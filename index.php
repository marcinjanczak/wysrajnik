<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wysrajnik</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="photos/kupa.png">
    <script src="javascript/skrypt.js" defer></script>
</head>
<body>

       <header>
        <img src="photos/kupa.png" alt="gówno">
           <h1>Wysrajnik</h1>
           <button>Wyślij formularz</button>
        </header>
        
        <div id="form">
             <div class="form-content">
                <h3>Napisz swój wysryw</h3>
                    <form action="php/send.php" method="post">
                        <label>Nick</label><br>
                        <input type="text" name="nick"><br>
                        <label>Wysryw</label><br>
                        <textarea name="tresc"></textarea><br><br>
                        <input type="submit" value="wyślij">
                    </form>                 
            </div>    
        </div> 
<main>
    <div class="wysrywy">
        <?php
        include 'php/wysryw.php';
        ?>
        <footer>
           <a href="https://github.com/marcinjanczak/wysrajnik" target="_blank"> <img class="github"src="photos/github.png"></a>
        </footer>  

    </div>
</main> 

</body>

</html>
