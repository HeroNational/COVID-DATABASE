<?php
    require("../../../controllers/dbconnection.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../..//css/tacit.min.css">
    <link rel="stylesheet" href="../..//css/main.css">
    <link rel="stylesheet" href="../..//css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../images/covid-icon.png" type="image/x-icon">
    <title>Base de données COVID 19 Php</title>
</head>
<body class="text-center">
    <?php
        if(isset($message)){
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Fermer</span>
            </button>
            <strong>Ouppss....!!!</strong> <?php echo $message; ?>.
        </div>
    <?php } ?>
    <form class="form-signin container" method="POST">
        <img class="mb-4" src="../../../views/images/hand.jpg" alt="" width="72" height="72" style="border-radius: 50%;">
        <h1 class="h3 mb-3 font-weight-normal">Connexion à la base de donnée</h1>
        <div class="row text-left">
            <div class="form-group col-6 col-md">
                <label for="">Nom de l'hôte</label>
                <input type="text" name="host" id="" class="form-control" placeholder="Nom de l'hôte de la base de données" required>
            </div>
            <div class="form-group col-6 col-md">
                <label for="">Nom de la base de données</label>
                <input type="text" name="dbname" id="" class="form-control col-12" placeholder="Nom de la base de données à utiliser" required>
            </div>
        </div>
        <div class="row  text-left">
            <div class="form-group col-6 col-md">
                <label for="">Nom d'utilisateur</label>
                <input type="text" name="user" id="" class="form-control" placeholder="Nom d'utilisateur de la base de données" required>
            </div>
            <div class="form-group col-6 col-md">
                <label for="">Mot de passe utilisateur</label>
                <input type="text" name="pass" id="" class="form-control col-12" placeholder="Mot de passe de l'utilisateur de la base de données.">
            </div>
        </div>
        <hr class="divider">
        <div class="row  text-left">
            <div class="form-group col-12 col-md">
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" checked name="driver" id="" value="pdo"> Utiliser PDO |
                        <input class="form-check-input" type="radio" name="driver" id="" value="mysqli"> Utiliser MySQLi
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <input class="btn btn-primary col-12" type="submit" value="Connecter"/>
        </div>
    </form>
</body>
<script src="../..//js/jquery.js"></script>
<script src="../..//js/bootstrap.js"></script>

</html>