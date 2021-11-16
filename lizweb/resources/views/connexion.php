<!DOCTYPE html>
<html lang="en">
    <head>

        <?php include('layout/master.php'); ?>

    </head>
    <body>
        <main class="connexion">
            <header>
                <img src="img/logo-liz.jpg" alt="logo">
            </header>

            <form action="<?php echo url("auth")?>" method="post">
                <?php csrf_token(); ?>

                <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <input type="text" id="pswd" name="pswd" required>
                <input type="submit" value="Valider">
            </form>
        </main>
    </body>
</html>