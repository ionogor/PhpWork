<?php

include ("db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style href="style.css"></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <style>

        th,td{
            width:20%;
            text-align:center;
        }
        .idcol{
            width:10%;
            text-align:left;
        }
      
       
        
    </style>
</head>
<body>
    <div class="container">
        <header>

        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
            <a class="btn btn-primary" href="add.php">Adauga</a>
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

    </div>

    <script>
    $(document).ready(()=>{
        $(".main").load("dataItems.php");
    })
</script>


  
</script>
</body>
</html>