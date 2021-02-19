<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="ind">

    <?php 
    //affichage du message récupéré via l'URL s'il existe
        if(isset($_GET['message'])){
        echo $_GET['message'];
        }
    ?>
    <!--image-->
    <div id="monImage" >
    <img id="Image" src="smallfoto.jpg"alt="NARA">
    </div>
<!-- création du formulaire de connexion -->
    <div id="Form" >
    <div class="topnav">
      <a href="VIEWS/pageConnexion.php">Connexion</a>
      <a href="VIEWS/pageInscription.php">Inscription</a>
    </div>

    </div>
    <div class="snowflakes" aria-hidden="true">
        <div class="snowflake">
        ❅
        </div>
        <div class="snowflake">
        ❅
        </div>
        <div class="snowflake">
        ❆
        </div>
        <div class="snowflake">
        ❄
        </div>
        <div class="snowflake">
        ❅
        </div>
        <div class="snowflake">
        ❆
        </div>
        <div class="snowflake">
        ❄
        </div>
        <div class="snowflake">
        ❅
        </div>
        <div class="snowflake">
        ❆
        </div>
        <div class="snowflake">
        ❄
        </div>
    
</form>
        
        <div class="A"><img id="B" src="test.jpg" /></br></div>


</body>
    <?php
        include 'MDLS/footer.html';
    ?>

</html>