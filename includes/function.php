<?php

function redirect_to($location){
    header("Location:".$location);
    exit;
}



function totalposte($dbh){



    $sql="SELECT COUNT(*) FROM `sinistre` ";
    $stmt=$dbh->query($sql);

    $data=$stmt->fetch();
    $total=array_shift($data);

    echo $total;
}

