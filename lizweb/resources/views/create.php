<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="<?php echo url(("/css/styleAdmin.css")) ?>" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body id="create">

    <h1>Ajouter un tableau</h1>

    <form method="post" action="<?php echo url('/store') ?>">
        <!-- toast tableau ajouté -->
        <?php 
            if(isset($message)){
                echo "<h3>". $message ."</h3>";
            }
        ?>

        <input type="file" name="image" required="required">

        <div class="mb-3">
            <label for="nom" class="form-label">Nom du tableau</label>
            <input type="text" class="form-control" name="nom" id="nom" required="required">
        </div>

        <div class="mb-3">
            <label for="infos" class="form-label">Informations</label>
            <input type="text" class="form-control" name="infos" id="infos">
        </div>

        <div>
            <a href="<?php echo url("admin")?>" class="btn btn-danger"> Retour</a>

            <?php csrf_token(); ?>

            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
            <button type="submit" class="btn btn-primary">Valider</button>
        </div>
        
    </form>
    
</body>
</html>