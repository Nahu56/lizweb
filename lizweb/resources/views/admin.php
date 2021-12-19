<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Administration</title>

    <link href="<?php echo url(("/css/styleAdmin.css")) ?>" rel="stylesheet" type="text/css" />


</head>
<body>

    <main>
        <h1>Espace d'administration</h1>

        <section>
            <a href=""><h2>Tableaux</h2></a>
            <a href=""><h2>Sculptures</h2></a>
        </section>

        <a href="<?php echo url('create') ?>">Ajouter un tableau</a>


        <table>
            <tr>
                <th>Image</th>
                <th>Nom</th>
                <th>Infos</th>
                <th>Actions</th>
            </tr>

            <?php
            
            foreach($tabx as $tab){

                ?>
                <tr>
                    <td> <img src='img/<?php echo $tab->id ?>.jpg' alt='tableau'> </td>
                    <td> <p> <?php echo $tab->nom ?> </p> </td>
                    <td> <p> <?php echo $tab->infos ?> </p> </td>

                    <td>
                        <a href="">Modifier</a>
                        <button class="suppr">Supprimer</button>

                        <a onclick="if(confirm('Voulez-vous vraiment supprimer ce tableau ?'))
                            {document.getElementById('form-{{$personnage->id}}').submit() }">Supprimer</a>
                    </td>
                </tr>

                <?php
            }
            
            ?>
        </table>
    </main>
</body>
</html>

<script src="js/scriptAdmin.js"></script>
