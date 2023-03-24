<?php

session_start();

include("connection.php");
include("functions.php");


//check if the user has clicked on the post button
if($_SERVER['REQUEST_METHOD'] == "POST")
{
  //something was posted
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];

  if(!empty($user_name)  && !empty($password) && !is_numeric($user_name))
  {
    //read from database to database
    $user_id = random_num(20);
    $query = "select * from log where user_name = '$user_name' limit 1"; 
    $result = mysqli_query($con, $query);

    if($result)
    {
      if($result && mysqli_num_rows($result) > 0)
      {
        $user_data = mysqli_fetch_assoc($result);
        if($user_data['password'] === $password)
        {
          $_SESSION['user_id'] = $user_data['user_id'];
          header("Location: uploadstory.php");
          die;
        }
        
        
          
      }
        
    }
    
        
   header("Location: wrongdetails.php");
   die;
  }else
  {
    echo "Please enter some valid information!";
  }
}

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class= bg-info-subtle >
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
          <a class="nav-link dropdown-toggle" href="ReadAllStories.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

<div class=" container my-5">
<form  method = "post" class="container justify-content-center border border-dark-subtle p-5 border-opacity-10 rounded-5 w-50 my-5  bg-dark-subtle text-emphasis-dark login">
  <h2 class="text-center">Please Login</h2>
  <div class="mb-3">
    <label for="usr" class="form-label">Username</label>
    <input type="text" class="form-control" id="usr" name="user_name" placeholder="username">
    <div id="usr" class="form-text">We'll never share your username with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Login</button><br><br>
  <p>Or</p>
  <a class="btn btn-success" href="mysignup.php" role="button">Sign Up</a>
</form>

</main>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>