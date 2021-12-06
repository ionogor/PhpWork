<?php

include ('db.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style href="style.css"></style>
    <title>Insert Person</title>
</head>
<body>
    
<nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
            <a class="btn btn-primary" href="index.php">HOME</a>
    <form action="search.php" method="POST" class="d-flex">
      <input class="form-control me-2" type="search" name="search" placeholder="Enter nume..." aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container addClass">
    <form action="addElement.php" method="POST" class="row g-3"> 

<!-- <label for="name">Numele</label>
<input type="text" name="name" id="name">
<label for="lastname">Prenumele</label>
<input type="text" name="lastname" id="lastname">

<label for="address">Adresa</label>
<input type="text" name="address" id="address"> -->
        <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                <label for="floatingInput">Name</label>
        </div>

        <div class="form-floating mb-3">
        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="LastName">
        <label for="floatingInput">LastName</label>
        </div>

        <div class="form-floating mb-3">
        <input type="text" class="form-control" id="address" name="address" placeholder="Address">
        <label for="floatingInput">Address</label>
        </div>
    
<select class="form-select" name="city" id="city">
    <option value="Chisinau">Chisinau</option>
    <option value="Balti">Balti</option>
    <option value="Orhei">Orhei</option>
    <option value="Cahul">Cahul</option>
</select>
<button type='submit' class='btn btn-success'>Adauga</button>


    </form>

    
</body>
</html>