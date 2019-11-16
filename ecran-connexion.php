<?php
    require('connection-controller.php');
 ?>
<!doctype html>
<html lang="en">

<head>
    <title>Gestion commerciale Hermanos-Sports</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>

    <div id="bloc-left">

        <div>
            <img src="img/H_logo.png" class="img-fluid">
            <ul>
                <li><a href="#">Courses / Évènements</a></li>
                <li><a href="#">Commandes</a></li>
                <li><a href="contacts.php">Contact</a></li>
            </ul>
        </div>

        <div id="thomas">
            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#Modal">
                <span aria-hidden="true">&times;</span>
                <?php echo $user['nom'].' H.' ?>
            </button>
        </div>

    </div>

    <div id="main-content" class="container">

    </div>


    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="ModalLabel">Déconnexion</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Êtes-vous certain de vouloir vous déconnecter ?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                  <!-- <button action="index.php" class="btn btn-primary">Se déconnecter</button> -->
                  <button type="button" class="btn btn-primary"><a href="index.php" class="text-white">Se déconnecter</a></button>
                </div>
              </div>
            </div>
          </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
        })
    </script> 
</body>

</html>