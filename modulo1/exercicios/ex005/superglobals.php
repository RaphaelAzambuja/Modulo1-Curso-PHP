<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">

    <title>SuperGlobals</title>
</head>
<body>
    <div class="main-box">
        <div class="content-box">
            <pre> 
            <?php
                $_REQUEST["password"] = sha1($_POST["password"]);
                $_POST["password"] = sha1($_POST["password"]);  //sha1 para encriptar os valores da senha nos arrays, claro que um 
                $_GET["password"] = sha1($_POST["password"]);   //ssl ou tsl resolve a questão de segurança então encriptei só de meme
                
                setcookie("dia-da-semana", "SEGUNDA", time()+3600);
                session_start();
                $_SESSION["teste"] = "funfou";  

                echo "<h1>SuperGlobal GET</h1>";  
                var_dump($_GET);

                echo "<h1>SuperGlobal POST</h1>";  
                var_dump($_POST);

                echo "<h1>SuperGlobal REQUEST</h1>";  
                var_dump($_REQUEST);

                echo "<h1>SuperGlobal COOKIE</h1>";  
                var_dump($_COOKIE);

                echo "<h1>SuperGlobal FILES</h1>";  
                var_dump($_FILES);

                echo "<h1>SuperGlobal SESSION</h1>";  
                var_dump($_SESSION);

                echo "<h1>SuperGlobal ENV</h1>";  
                var_dump($_ENV);

                echo "<h1>SuperGlobal SERVER</h1>";  
                var_dump($_SERVER);

                echo "<h1>SuperGlobal GLOBALS</h1>";  
                var_dump($GLOBALS);

            ?>
            </pre>
        </div>
    </div>
</body>
</html>