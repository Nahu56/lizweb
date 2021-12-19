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
        //var_dump($tabx);
    ?>

    
    <table class="large">
        <?php
        $loop = 0;

        foreach($tabx as $tableau){
            
            if($loop == 0){
                echo "<tr>";
            }
            ?>
                <td>
                    <div style="background-image: url('img/<?php echo $tableau->id ?>.jpg')"></div>
                    <div class="titre">
                        <strong><?php echo $tableau->nom ?></strong>
                        </br><?php echo $tableau->infos ?>
                    </div>
                </td>
            <?php

            $loop += 1;

            if($loop == 3){
                echo "</tr>";
                $loop = 0;
            }
        }
        ?>
    </table>


    <table class="etroit">

        <?php
            $loop = 0;

            foreach($tabx as $tableau){
                
                if($loop == 0){
                    echo "<tr>";
                }
                ?>
                    <td>
                        <div style="background-image: url('img/<?php echo $tableau->id ?>.jpg')"></div>
                        <div class="titre">
                            <strong><?php echo $tableau->nom ?></strong>
                            </br><?php echo $tableau->infos ?>
                        </div>
                    </td>
                <?php

                $loop += 1;

                if($loop == 2){
                    echo "</tr>";
                    $loop = 0;
                }
            }
        ?>

    </table>




</body>
</html>