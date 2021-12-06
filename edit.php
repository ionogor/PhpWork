<?php

include ('db.php');
$getId=$_GET['id'];
$sql="select * from persons where PersonID={$getId}";
$result=mysqli_query($CONNECT,$sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user</title>
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
<?php

while ($row=mysqli_fetch_assoc($result)){
    echo "
    <div class='form-floating mb-3'>
    <input type='hidden' name='id' id='id' value={$row['PersonID']}>
    <label for='floatingInput'>Name</label>
    </div>

    <div class='form-floating mb-3'>
    <input type='text'class='form-control' name='lastname' id='lastname' value={$row['LastName']}>
    <label for='floatingInput'>LastName</label>
    </div>
    <div class='form-floating mb-3'>
    <input type='text' class='form-control' name='firstname' id='firstname' value={$row['FirstName']}>
    <label for='floatingInput'>Address</label>
    </div>

    <div class='form-floating mb-3'>
    <input type='text' class='form-control' name='address'id='address' value='{$row['Address']}'>
    <label for='floatingInput'>City</label>
    <input type='text' class='form-control' name='city'id='city' value={$row['City']}>
    </div>
    <button class='btn btn-primary' id='save-data'>Salveaza</button>
    
    ";

   
}

?>
    
    <script src="saveUpdateData.js"></script>
</body>
</html>