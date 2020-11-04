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
            <a href="index.php">
                <img src="images/LYCEE-TW-RVB-BLEU@2x-ouqqzhaifqs0ecueqajd2l306gb31pbjc3bpoxcfrw.png" alt="Logo" style="padding-bottom: 12px;"/>
            </a>



            <!--        <div class="alert-success">Dropdown hover</div>-->
            <?php
            require_once './menu.php';
            ?>
        </div>
        <div class="boite container-fluid">
            <div class="container-fluid boite1">
                <h1 class="titre ">Mentions légales</h1>
                <div class="description2">
                    <p>
                        <br>
                        <br>
                        <br>
                        <a class="bold">
                            Proviseur:
                        </a>
                         Jean François Bourdon<br>
                        Lycée Polyvalent Touchard Washington<br>
                        <a class="bold">
                            Editeur:
                        </a>
                         Section SNIR du lycée Touchard Washington<br>
                         <a class="bold">
                            Hébergement des données:
                        </a>
                         Lycée Polyvalent Touchard Washington<br>
                        <br>
                        <br>
                        <a class="bold">
                            Protection des données:
                        </a>
                        <br>
                        Conformément à la réglementation, chaque personne dispose d'un droit d'accès, de rectification, d'éffacement, d'opposition et de portabilité aux <br> informations
                        qui le concernent. Elle peut demander une mise à jour ou une suppression des informations si elles s'avèrent inexactes, imcomplètes, <br>équivoques, 
                        périmées ou si leurs collectes ou leurs utilisations, communications ou conservations est interdite.<br>
                        Pour faire valoir ses droits, il faut contacter le lycée Touchard Washington de l'académie de nantes à l'adresse postale suivante : <br>
                        8, place Washington - CS 31937 - 72019 Le Mans CEDEX 02 - Tél. 02.43.50.16.20<br>
                        Ou directement par mail:<br>
                        <a href="mailto:ddfindus.touchardwashington@ac-nantes.fr">ddfindus.touchardwashington@ac-nantes.fr</a>
                        <br>
                        <br> 
                        





                        <!--                        Les données sont conservées pendant un maximum de 1 ans. <br>-->



<!--                        Si vous estimez, après nous avoir contactés, que vos droits ne sont pas respectés, vous pouvez adresser une réclamation à la CNIL.<br>
                        Consultez le site
                        <a href="https://www.cnil.fr">
                            cnil.fr 
                        </a>
                         pour plus d’informations sur vos droits.<br>-->


                        
                    </p>




                </div>

            </div>



        </div>
        <?php require_once 'footer.php';?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
