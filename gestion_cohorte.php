<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Confirmation d'inscription</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/libs/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="js/gestion_form.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        require_once './fonction_formulaire.inc.php';
        $eleve = new stdClass();

        if ($_POST["action"] == "insert") {//insert
            $eleve->prenom = filter_input(INPUT_POST, 'prenom');
            $eleve->nom = filter_input(INPUT_POST, 'nom');
            $eleve->dateDeNaissance = filter_input(INPUT_POST, 'dateDeNaissance');
            $eleve->classeFrequentee = filter_input(INPUT_POST, 'classeFrequentee');
            $eleve->situationActuelle = filter_input(INPUT_POST, 'situationActuelle');
            $eleve->precisionSituation = filter_input(INPUT_POST, 'precisionSituation');
            $eleve->numeroTel = filter_input(INPUT_POST, 'numeroTel');
            $eleve->adresseEmail = filter_input(INPUT_POST, 'adresseEmail');
            $eleve->rgpd = filter_input(INPUT_POST, 'rgpd');
            
            $retour = ajouterUtilisateur($eleve);
            if ($retour) {
                echo "Votre suivi à été pris en compte.";
                header("Location: confirmation.php?conf=OK");
                return;
            }
            echo "Erreur dans l'ajout de l'utilisateur";
            header("Location: confirmation.php?conf=NOK");
            return;
        }
        if ($_POST["action"] == "update") { //update
            $eleve->prenom = filter_input(INPUT_POST, 'prenom');
            $eleve->nom = filter_input(INPUT_POST, 'nom');
            $eleve->dateDeNaissance = filter_input(INPUT_POST, 'dateDeNaissance');
            $eleve->classeFrequentee = filter_input(INPUT_POST, 'classeFrequentee');
            $eleve->situationActuelle = filter_input(INPUT_POST, 'situationActuelle');
            $eleve->precisionSituation = filter_input(INPUT_POST, 'precisionSituation');
            $eleve->numeroTel = filter_input(INPUT_POST, 'numeroTel');
            $eleve->adresseEmail = filter_input(INPUT_POST, 'adresseEmail');
            $eleve->idUtilisateurs = filter_input(INPUT_POST, 'idUtilisateurs');
            $eleve->rgpd = 1;
            $retour = modifierUtilisateur($eleve);
            if ($retour) {


                header("Location: vue_eleves.php?conf=OK");
            } else {

                header("Location: vue_eleves.php?conf=NOK");
            }
        }
        ?>

    </body>
</html>
