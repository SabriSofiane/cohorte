<!DOCTYPE html>
<!--
Createur : Sabri Sofiane
Date de création : 13 octobre 2020
Description : Site web de suivi de cohorte pour le Lycée Touchard Washington
Powered with Bootstrap v4.5.3
-->
<html>
    <head>
        <title>Suivi de réinscription - Lycée Gabriel Touchard-Washington</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="styleAccueil.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container-fluid touchard"> 
            

            <?php require_once 'menu.php'; ?>
            <a href="index.php">
                
                <img src="images/LYCEE-TW-RVB-BLEU@2x-ouqqzhaifqs0ecueqajd2l306gb31pbjc3bpoxcfrw.png" alt="Logo" style="padding-top: 30px;"/>
                
            </a>

            <!--        <div class="alert-success">Dropdown hover</div>-->
            
        </div>
        <div class="boite container-fluid">
            <div class="container-fluid  boite1">
                <h1 class="titre">Suivi de parcours après votre bac</h1>
                <div class="description">
                    <p>
                        
                        Le Lycée polyvalent Touchard Washington accueille 1900 élèves en prébac et 600 étudiants de post bac<br>
                        dans des filières professionnelles, technologiques et générales. Si vous voulez réinscrire votre enfant <br>
                        dans l'établissement, le Lycée assure un suivi de cohorte à trois et six mois.
                    </p>
                    <a href="formulaire.php" class="col-md-8 col-sm-8 col-xs-12">
                        <button type="button" class="btn btn-primary btn-lg bouton">Effectuer son suivi</button>
                    </a>



                </div>
                
            </div>
            
            

        </div>
        <?php require_once 'footer.php';?>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
