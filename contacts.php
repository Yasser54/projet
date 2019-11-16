<?php
require('controller.php');
 ?>

    <div class="row">
        <div class="col-2" style="border:solid green 1px">
        <?php
            require('ecran-connexion.php');
        ?>
        </div>
        <div class="col-4 list-group" style="border:solid red 1px">
        <?php 
        foreach ($contacts as $contact) {
        echo '<a class="list-group-item list-group-item-action">' .strtoupper($contact['nom']). ' ' .ucfirst($contact['prenom']). '</a>';
        }; 
        ?>
            </div>
        </div>
        <div class="col-6" style="border:solid blue 1px">

        </div>
    </div>
