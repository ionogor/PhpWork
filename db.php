
<?php
    $CONNECT=mysqli_connect("localhost","root","","users");

    if(!$CONNECT){
      echo  mysqli_connect_error();
    }