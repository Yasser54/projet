<?php
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Gestion commerciale Hermanos-Sports</title>

</head>

<body>
    <br>
    <img src="img/Hermanos_logo.png" alt="logo_hermanos-sports">

    <br>

    <div class="container">
        <div class="form-group">

            <form action="ecran-connexion.php" method="post">
                <fieldset>
                    <legend> &nbsp; Connectez-vous à la gestion commerciale &nbsp; </legend>

                    <div class="form-group" id="idEmail">
                        <label for="adrEmail" class="col-5">Identifiant</label>
                        <input type="text" class="form-control" name="pseudo" placeholder="Entrer votre identifiant"">
                    </div>

                    <br>

                    <div class="form-group" id="idMdp">
                            <label for="MDP" class="col-5">Mot de passe</label>
                            <input type="password" class="form-control" name="mdp" placeholder="Entrer votre mot de passe">
                            
                        </div>
                        <?php if(isset($_GET['error'])) {
                                echo '<strong style="color:red"> Mauvais identifiant ou MDP </strong>';
                            } ?>
                    <br>

                    <div id=buttons>
                        <button type="reset" class="btn btn-secondary">Effacer</button>
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                    </div>

                </fieldset>
            </form>

        </div>
    </div>
</body>

</html>