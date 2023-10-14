<?php 
include 'database.php'
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>veterinary | CRUD in OOP PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
  </head>
  <div class="container_fluid bg-dark p-2 mb-3">
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                <a class="navbar-brand" href="#">CRUD</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">

                    <ul class="navbar-nav">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="index.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Home
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index.php">Add New Patient</a></li>
                                <li><a class="dropdown-item" href="view.php">Patients View</a></li>
                            </ul>
                        </li>
                    </ul>
                    </div>
                </div>
        </nav>
        </div>
        <div class= "container-fluid">
        
    </header>
    <body>
    <form method = "post">
        <div class="mb-3">
            <label for="AnimalRace" class="form-label">Animal Race</label>
            <input type="text" name="Animal race" class="form-control" id="AnimalRace" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="AnimalName" class="form-label">Animal Name</label>
            <input type="text" name="Animal name" class="form-control" id="AnimalName" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="AnimalAge" class="form-label">Animal Age</label>
            <input type="age" name="Animal age" class="form-control" id="exampleInpuAnimalAgetEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="OwnerName" class="form-label">Owner's Name</label>
            <input type="text" name="Owner name" class="form-control" id="OwnerName" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="OwnerPhone" class="form-label">Owner's Phone</label>
            <input type="phone" name="owner phone" class="form-control" id="OwnerPhone" aria-describedby="emailHelp">
        </div>
        
        <button type="create" name = "create" class="btn btn-primary">create</button>
        <a class = "btn btn-danger" href="index.php">Cancel</a>
    </form>
    <?php
					 	require_once('database.php');
						
						if(!empty($_POST['create'])){
							$an_race = $_POST['Animal race'];
							$an_name = $_POST['Animal name'];
							$an_age = $_POST['Animal age'];
							$owner_name = $_POST['Owner name'];
                            $owner_phone = $_POST['owner phone'];
							$res   = $database->create($an_race, $an_name, $an_age, $owner_name, $owner_phone);
							if($res){
								echo "<p>Successfully inserted data</p>";
							}else{
								echo "<p>Failed to insert data</p>";
							}
						}
					 ?>
    <footer>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </footer>
</body>
</html>
