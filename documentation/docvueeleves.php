<!--
Createur : Sabri Sofiane
Date de création : 13 octobre 2020
Description : Page de confirmation après envoi du formuliare
Powered with Bootstrap
-->
<html>
    <head>
        <title>Documentation vue élèves</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="styleFormulaire.css" rel="stylesheet" type="text/css"/>
        <link href="styleAccueil.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <a href="index.php" class="logo" >
            <img src="images/LYCEE-TW-RVB-BLEU@2x-ouqqzhaifqs0ecueqajd2l306gb31pbjc3bpoxcfrw.png" alt="Logo" class="logo" style="padding-left: 12px;padding-top: 12px;" />
        </a>
        <div class="container-fluid">
            <h1 class="titre" style="right: 600px;"  >Documentation</h1>
        </div>
        <div class="container-fluid "> 
            <a href="index.php">
                <img  style="padding-bottom: 12px;" />
            </a>



            <!--        <div class="alert-success">Dropdown hover</div>-->
            <?php
            require_once './menu.php';
            ?>
        </div>
        <div class="container-fluid description">
            

            <a class="btn btn-primary bouton" href="index.php" role="button">Revenir à l'accueil</a>
        </div>
        <?php require_once 'footer.php';?>
        
    </body>
</html>