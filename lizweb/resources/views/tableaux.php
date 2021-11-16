<!DOCTYPE html>
<html lang="en">
<head>

    <?php include('layout/master.php'); ?>

    <title>Tableaux | Liz Herrera</title>

</head>
<body>
    <?php 
        include('layout/menu.php');
    ?>

    <?php
        $nbTabx = count($tabx);
        //echo $nbTabx;
    ?>


    <table class="large">
        <?php
        for($i = 1; $i <= $nbTabx; $i += 3){
            ?>

                <tr>
                    <td style="background-image: url('img/<?php echo $i ?>.jpg')"></td>
                    <td style="background-image: url('img/<?php echo $i+1 ?>.jpg')"></td>
                    <td style="background-image: url('img/<?php echo $i+2 ?>.jpg')"></td>
                </tr>

            <?php
        };?>
    </table>

    <hr>

    
    <table class="large">
        <?php
        for($i = 1; $i <= $nbTabx; $i += 3){
            ?>
                <tr>
                    <td>
                        <div style="background-image: url('img/<?php echo $i ?>.jpg')">zz</div>
                    </td>
                    <td>
                        <div style="background-image: url('img/<?php echo $i+1 ?>.jpg')">zz</div>
                    </td>
                    <td>
                        <div style="background-image: url('img/<?php echo $i+2 ?>.jpg')">zz</div>
                    </td>
                </tr>

            <?php
        };?>
    </table>



    <hr>



    <table class="etroit">

        <?php
            for($i = 1; $i <= $nbTabx; $i += 2){

                //echo $i;
                ?>

                    <tr>
                        <td style="background-image: url('img/<?php echo $i ?>.jpg')"></td>
                        <td style="background-image: url('img/<?php echo $i+1 ?>.jpg')"></td>
                    </tr>

                <?php
            };
        ?>

    </table>

</body>
</html>