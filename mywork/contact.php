<?php

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Storytelling Application</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<header>

	<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="homepage.php"><img id="logo" src="image/Storytelling.jpg" alt="Storytelling Website"   style="width:20px;height:20px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Homepage.php">Home</a>
        </li>
        <li class="nav-item">
         <a class="nav-link active" aria-current="page" href="UploadStory.php">Upload Story</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link  dropdown-toggle" href="ReadAllStories.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Read All Stories
          </a>
         <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="ReadAllStories.php#S1">City of Arts and Sciences</a></li>
            <li><a class="dropdown-item" href="ReadAllStories.php#S2">Las Fallas Festival</a></li>
            <li><a class="dropdown-item" href="ReadAllStories.php#S3">Oceanographic Aquarium</a></li>
            <li><a class="dropdown-item" href="ReadAllStories.php#S4">La Lonja de Seda</a></li>
            <li><a class="dropdown-item" href="ReadAllStories.php#S5">Meracado Central</a></li>
            <li><a class="dropdown-item" href="ReadAllStories.php#S6">Church of Saint Nicholas of Bari and Saint Peter the Martyr</a></li>
            <li><a class="dropdown-item" href="ReadAllStories.php#S7">Cathedral of Valencia and Miguelete Tower</a></li>
            <li><a class="dropdown-item" href="ReadAllStories.php#S8">Church of Saint Thomas and Saint Philip</a></li>
         
          </ul>
           
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="About.php">About</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
      <div class="d-flex">  
        <a class="btn btn-outline-success" href="logout.php" role="button">Logout</a>
      </div>
    </div>
  </div>
</nav>
</header> 
<main>
  <div class="bgimage" style="background-image: url('./image/contact.jpg'); alt:cityscape of the city arts and sciences in valencia, Spain;">
  <div class="container my-2 float-start w-75 bg-light border border-light-subtle rounded-start-pill">
    <h1 class=" w-50 text-white my-4 p-4 bg-dark border border-dark-subtle rounded-start-pill" style="font-size: 2rem;">Contact Us</h1>
  </div>
</div>
  </main>
  <footer>
  <div class="container-fluid text-center bg-dark border border-dark-subtle text-white w-100 p-4">
    <h5>STAY CONNECTED!</h5><br><br>
   <p><img src="image/email.jpg" id = "email" alt="email"> Email: g.akande@gmail.com</p><br>
   <p><img src="image/phone.jpg" id = "phone" alt="phone"> Phone Number: +4423456789</p><br>
   <p><img src="image/address.jpg" id = "address" alt="address"> Address: Robert Gordon University</p><br><br>

  </div>

  </footer>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>