<!DOCTYPE html>
<html lang="en">
    <head>

        <?php include('master.php'); ?>

    </head>
    <body>
        <main class="connexion">
            <header>
                <img src="img/logo-liz.jpg" alt="logo">
            </header>

            <form action="<?php echo url("/auth")?>" method="post">
                

                <input type="text" id="pswd" name="pswd" required>
            </form>
        </main>
    </body>
</html>