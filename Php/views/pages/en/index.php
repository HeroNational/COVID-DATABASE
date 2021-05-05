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
    <title>Php Covid 19 database</title>
</head>
<body class="text-center">
    <?php
        if(isset($message)){
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong>Ouppss....!!!</strong> <?php echo $message; ?>.
        </div>
    <?php } ?>
    <form class="form-signin container" method="POST">
        <img class="mb-4" src="../../../views/images/hand.jpg" alt="" width="72" height="72" style="border-radius: 50%;">
        <h1 class="h3 mb-3 font-weight-normal">Database connection</h1>
        <div class="row text-left">
            <div class="form-group col-6 col-md">
                <label for="">Host name</label>
                <input type="text" name="host" id="" class="form-control" placeholder="Name of the database host" required>
            </div>
            <div class="form-group col-6 col-md">
                <label for="">Name of the database</label>
                <input type="text" name="dbname" id="" class="form-control col-12" placeholder="Name of the data base to use" required>
            </div>
        </div>
        <div class="row  text-left">
            <div class="form-group col-6 col-md">
                <label for="">User name</label>
                <input type="text" name="user" id="" class="form-control" placeholder="User name of the database" required>
            </div>
            <div class="form-group col-6 col-md">
                <label for="">User password</label>
                <input type="text" name="pass" id="" class="form-control col-12" placeholder="User password of the database connection">
            </div>
        </div>
        <hr class="divider">
        <div class="row  text-left">
            <div class="form-group col-12 col-md">
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" checked name="driver" id="" value="pdo"> Use PDO |
                        <input class="form-check-input" type="radio" name="driver" id="" value="mysqli"> Use MySQLi
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <input class="btn btn-primary col-12" type="submit" value="Connect"/>
        </div>
    </form>
</body>
<script src="../..//js/jquery.js"></script>
<script src="../..//js/bootstrap.js"></script>

</html>