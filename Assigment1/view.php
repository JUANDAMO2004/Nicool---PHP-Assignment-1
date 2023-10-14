<?php
	require_once('database.php');
	$res = $database->read();
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
<table class="table table-striped">
            <tr>
				<th>#</th>
                <th>A.Race</th>
				<th>A.Name</th>
				<th>A.Age</th>
				<th>O.name</th>
                <th>O.Phone</th>
			</tr>
            <?php

				while($r = mysqli_fetch_assoc($res)){
			?>
					<tr>
						<td><?php echo $r['Animal race']; ?></td>
						<td><?php echo $r['Animal name'] . " " . $r['lname']; ?></td>
						<td><?php echo $r['Animal age'] ?></td>
						<td><?php echo $r['Owner name'] ?></td>
                        <td><?php echo $r['owner phone'] ?></td>
					</tr>
				<?php
				}
			?>

</table>
<footer>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </footer>
</body>
</html>