<?php
include'../modele/clients.php';
include'../controller/controller5.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../assets/css/style.css" />
        <link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <title>Exercice PDO</title>
    </head>
    <body id="bg5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" id="bg-nav" href="http://exo-pdo/exo1/navBar/nav.php#">PDO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://exo-pdo/exo1/view/view1.php">Exercice 1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="http://exo-pdo/exo1/view/view2.php">Exercice 2</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="http://exo-pdo/exo1/view/view3.php">Exercice 3</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="http://exo-pdo/exo1/view/view4.php">Exercice 4</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="http://exo-pdo/exo1/view/view5.php">Exercice 5</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="http://exo-pdo/exo1/view/view6.php#">Exercice 6</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Exercice 7</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Partis
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">partie 1</a>
                            <a class="dropdown-item" href="#">partie 2</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <!---->
                <div class="firstTest offset-4 col-4 text-center">
                    <h1>5- Affichage des clients ayant le nom commencant par la lettre M</h1>
                    <!---->
                    <table class="col-12 text-center">
                        <thead>
                            <tr>
                                <th>Nom</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($clientListOrder as $clientDetail) { ?>
                                <tr>
                                    <td><?= $clientDetail->lastName ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>