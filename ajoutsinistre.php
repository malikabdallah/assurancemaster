<?php


include ("includes/database.php");
require_once ("includes/function.php");



if(isset($_POST["submit"])) {

    $day1 = strtotime($_POST["date1"]);
    $day1 = date('Y-m-d', $day1);


    $etats=$_POST["etats"];
    $type=$_POST["categorie"];

    $num=$_POST["numero"];

    $sql="INSERT INTO `poste`( `date`, `title`, `categories`, `author`, `image`, `poste`) VALUES (?,?,?,?,?,?)";


    $sql="INSERT INTO `sinistre`( `dateDeclarationSinistre`, `etatSinistre`, `numSinistre`, `typeSinistre`
) VALUES (?,?,?,?)";
    $stmt=$dbh->prepare($sql);
    $stmt->bindValue(1,$day1,PDO::PARAM_STR);
    $stmt->bindValue(2,$etats,PDO::PARAM_STR);
    $stmt->bindValue(3,$num,PDO::PARAM_INT);
    $stmt->bindValue(4,$type,PDO::PARAM_STR);

    $res=$stmt->execute();


    if($res){
        $_SESSION["success"]="ajout avec succes ";
        redirect_to("dashsinistre.php");


    }else{
        echo "res ".$res;
        $_SESSION["erreur"]="malheureuse l ajout n a pas eu lieu ";
        redirect_to("echec.php");
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<!--

<h1 class="display-1">hello world 1</h1>
<h1 class="display-2">hello world 1</h1>

-->
<header class="bg-dark text-white py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><i class="fas fa-edit" style="color: #27aae1"></i>ajout nouveau sinistres</h1>
            </div>
        </div>
    </div>
</header>



<!-- -->



<section class="container py-2 mb-4">

    <div class="row">


        <div class="offset-lg-1 col-lg-10" style="min-height: 400px;" >




            <form enctype="multipart/form-data" method="post">
                <div class="card bg-secondary text-light mb-3">


                    <div class="card-body bg-dark">-
                        <div class="form-group">
                            <label for="title"><span class="FieldInfo">  numero sinistre</span></label>
                            <input class="form-control" type="text" id="title" name="numero"/>

                        </div>
                        <div>
                            Date d enregistrement <input type="date" name="date1"> <br />

                        </div>
                        <div class="form-group">
                            <label for="categorietitre"><span class="FieldInfo"> choisir une categorie</span></label>




                            <select class="form-control" id="categorietitre" name="categorie">
                                <?php

                                $sql="SELECT * FROM sinistre_type ";
                                $stmt=$dbh->query($sql);
                                while($data=$stmt->fetch()){
                                    $id=$data["id"];
                                    $title=$data["type"];




                                    ?>
                                    <option value="<?php echo $title ?>"> <?php echo $title ?> </option>


                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="etats"><span class="FieldInfo"> etat</span></label>


                            <?php
                            $array = array("recours", "reglements", "expertise", "ouvert",  "clos");
                            ?>

                            <select class="form-control" id="etats" name="etats">

                                <?php
                                foreach ($array as $value){
                                    ?>

                                    <option value="<?php echo $value ?>"> <?php echo $value ?> </option>

                                    <?php
                                }
                                ?>

                            </select>



                        </div>




                        <div class="row">

                            <div class="col-lg-6 mb-2">
                                <button type="submit" name="submit" class="btn btn-success btn-block">
                                    <i class="fas fa-check">enregistre </i>
                                </button>
                            </div>

                            <div class="col-lg-6 mb-2">
                                <a href="dashsinistre.php" class="btn btn-warning btn-block"><i class="fas fa-arrow-left"> </i> retourn au tableau de bord </a>
                            </div>

                        </div>
                    </div>

                </div>

            </form>

        </div>

    </div>
</section>









</body>
</html>