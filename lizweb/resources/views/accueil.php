<!DOCTYPE html>
<html lang="en">
<head>

    <?php include('layout/master.php'); ?>

    <title>Liz Herrera</title>

</head>
<body>
    <a href="{{route('connexion')}}">Se connecter</a>

    <h1>ON EST DANS L'ACCUUUEIL</h1>

    <?php

    $url = "2";

    ?>



    <table class="large">
        <tr>
            <td style="background-image: url('img/<?php echo $url ?>.jpg')"></td>
            <td style="background-image: url('img/<?php echo $url ?>.jpg')"></td>
            <td style="background-image: url('img/<?php echo $url ?>.jpg')"></td>
        </tr>

    </table>

    <table class="etroit">
        <tr>
            <td>
                <img src="img/1.jpg" alt="1">
            </td>
            <td>
                <img src="img/2.jpg" alt="2">
            </td>
        </tr>

        <tr>
            <td>
                <img src="img/3.jpg" alt="3">
            </td>
            <td>
                <img src="img/4.jpg" alt="4">
            </td>
        </tr>

        <tr>
            <td>
                <img src="img/5.jpg" alt="5">
            </td>
            <td>
                <img src="img/6.jpg" alt="6">
            </td>
        </tr>

    </table>

</body>
</html>