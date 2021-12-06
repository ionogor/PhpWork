<?php 
    include ('db.php');
    $getId=$_GET['id'];
    $sql="delete from persons where PersonID={$getId}";
    mysqli_query($CONNECT,$sql);
    
    //echo $getId;

    header("Location:index.php");

    
    ?>
