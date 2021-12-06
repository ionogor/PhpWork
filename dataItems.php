<?php

include ("db.php");

$sql="select * from persons";
$result=mysqli_query($CONNECT,$sql);

while ($row=mysqli_fetch_assoc($result)){

    echo "
    <div class='date'>
    <table class='table table-dark'>
  <thead>
    <tr>
      <th scope='col'class='idcol'>ID</th>
      <th scope='col'>Nume</th>
      <th scope='col'>Prenume</th>
      <th scope='col'>Adresa</th>

      <th scope='col'>Oras</th>
      <th scope='row'>  </th>
      <th scope='row'>  </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope='row' class='idcol'>{$row['PersonID']}</th>
      <td>{$row['LastName']}</td>
      <td>{$row['FirstName']}</td>
      <td>{$row['Address']}</td>
      <td>{$row['City']}</td>
     <td><a class='edit btn btn-primary' href=edit.php?id={$row['PersonID']}>Editeaza</a></td>
     <td><a class='delete btn btn-danger' href=delete.php?id={$row['PersonID']}>Sterge</a></td>
  
    </tr>
   
  </tbody>
</table>
    </div>

    ";
}


?>

