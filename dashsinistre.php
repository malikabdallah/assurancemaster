<?php

require_once ("includes/database.php");
require_once ("includes/function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>


</head>
<body>

<div>
    <a href="ajoutsinistre.php">ajout sinistre</a>
</div>


<div class="container">
    <div class="row mt-4">


        <div class="col-sm-8" style="min-height: 40px;  ">


            <h1> ensemble des sininstres</h1>


            <?php



                $sql = "SELECT * FROM sinistre";
                $stmt=$dbh->query($sql);


            while($data=$stmt->fetch()){


                $id=$data["idSinistre"];
                $num=$data["numSinistre"];



                ?>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $id ?> </h4>
                        <small class="text-muted">numero :  <?php echo $num ;?>  </small>


                        <a href="fullSinistre.php?id=<?php echo $id;?>" style="float:right">
                            <span class="btn btn-info">lire plus >></span>

                        </a>
                    </div>

                </div>

                <hr/>

            <?php } ?>




        </div>









    </div>

</div>
<br/>


</body>
