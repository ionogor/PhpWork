<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<div class="container">
        <header>

        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
            <a class="btn btn-primary" href="index.php">HOME</a>
    <form action="search.php" method="POST" class="d-flex">
      <input class="form-control me-2" type="search" name="search" placeholder="Enter nume..." aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
        
    
        </nav>
    </header>

    <div class ="main">

    
</div>
    
</body>
</html>

<?php

include ("db.php");
$q=$_POST['search'];
$sql="select * from persons where FirstName='$q' ";
$result=mysqli_query($CONNECT,$sql);

if($q !=="" || !empty($q)){

  while ($row=mysqli_fetch_assoc($result)){
    if($row !=="" || !empty($q)){

    
    echo "
    <div class='container'>
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
    </div> ";
    }//end if of while
    else{
      echo "NU sunt date!";
    }
}

}else{
  echo "Nu s-a gasit nimic!";
}


?>

