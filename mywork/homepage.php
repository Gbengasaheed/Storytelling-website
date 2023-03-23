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

	<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
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
           <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="About.php">About</a>
        </li>
         
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
	<div class="bgimage" style="background-image: url('./image/Valencia.jpg'); alt:cityscape of the city arts and sciences in valencia, Spain;">
	<div
		class="color-overlay d-flex justify-content-center align-items-center">
		<h1>"You don't have to be rich to travel well.."<br>Pictures and Stories of some beautiful places in Valencia, Spain. </h1>
		
	</div>
</div>
	<div class="container-fluid  bg-dark-subtle py-5">
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel"  data-bs-touch="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <iframe class="card-img-top" width="560" height="315" src="https://www.youtube.com/embed/U715qK0Q54I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <div class="card-body">
        <h5 class="card-title">Valencia City guide</h5>
        <p class="card-text">Valencia is the capital of the autonomous community of Valencia and the third-most populated municipality in Spain, with 800.000 inhabitants. Valencia is also a major travel destination in Spain. The wider urban area also comprising the neighboring municipalities has a population of around 1.6 million, constituting one of the major urban areas on the European side of the Mediterranean Sea. Valencia is located on the banks of the river Turia, on the east coast of the Iberian Peninsula, at the Gulf of Valencia, north of the Albufera lagoon.</p>
        </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="image/Thomas.jpg" class="card-img-top" alt="Church of Saint Thomas and Saint Phillip">
      <div class="card-body">
        <h5 class="card-title">Church of Saint Thomas and Saint Phillip</h5>
        <p class="card-text">Designed in 1725, this masterful structure was registered as a National Historic Monument later in 1982. The external façade of this church is designed using Baroque influences and is modelled around the Il Gesu Church in Rome. The distinct blue dome is the standout feature of this structure. It is one of the best places to visit due to the daily mass that is held here, which is a meditative experience for curious visitors.</p>
         <a href="ReadAllStories.php#S8" class="btn btn-primary text-center">Read Story</a>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src="image/lonja.jpg" class="card-img-top" alt="La Lonja de Seda">
      <div class="card-body">
        <h5 class="card-title">La Lonja de Seda</h5>
        <p class="card-text">One of the finest examples of Gothic architecture in the city, this structure was created way back in the 15th century and served as the major hub for the silk trade in Valencia. It looks like an ancient fortress with its notched facade and has a massive bell tower as its neighbour. Visitors can climb up to the top of the tower and enjoy the surrounding views on offer. This is one of the best places to visit.</p>
         <a href="ReadAllStories.php#S4" class="btn btn-primary text-center">Read Story</a>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
    </div>
    <div class="carousel-item">
      <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <iframe  class="card-img-top" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98647.11787774278!2d-0.36151130000000004!3d39.407785249999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604f4cf0efb06f%3A0xb4a351011f7f1d39!2sValencia%2C%20Spain!5e0!3m2!1sen!2suk!4v1678665534468!5m2!1sen!2suk" width="600" height="315" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div class="card-body">
        <h5 class="card-title text-center">Planning A Trip To Valencia? </h5>
        <p class="card-text text-center"><b>Follow the map!</b></p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      
      <img src="image/Central.jpg" class="card-img-top" alt="Mercado Central">
      <div class="card-body">
        <h5 class="card-title">Mercado Central</h5>
        <p class="card-text">The central market of the city, this is one of the most enjoyable spots to visit for foodies and hungry tourists alike. Built in the Art Nouveau style in 1928, this marketplace is a lavishly decorated space that is home to hundreds of local and international vendors selling some of the freshest and most delicious food items in the world. It is a great place to have a meal or just shop for some locally produced ingredients.</p>
         <a href="ReadAllStories.php#S5" class="btn btn-primary text-center">Read Story</a>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src="image/Saint.jpg" class="card-img-top" alt="Church of Saint Nicholas of Bari and Saint Peter the martyr">
      <div class="card-body">
        <h5 class="card-title">Church of Saint Nicholas of Bari and Saint Peter the martyr</h5>
        <p class="card-text">Its local name is Parroquia de San Nicolás de Bari y San Pedro Mártir. This church serves as another prime example of Gothic and Baroque styles of architecture. Created in the 13th century, the gorgeous stained-glass, intricate carvings and charming chapels make it one of the most popular tourist spots in the city.</p>
         <a href="ReadAllStories.php#S6" class="btn btn-primary text-center">Read Story</a>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
    </div>
    <div class="carousel-item">
      <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="image/valencia.jpg" class="card-img-top" alt="Cathedral of Valencia and Miguelete Tower">
      <div class="card-body">
        <h5 class="card-title">Cathedral of Valencia and Miguelete Tower</h5>
        <p class="card-text">This Gothic masterpiece along with its neighbouring tower are both must-visit places in Valencia. Work on this Roman Cathedral began as early as the 13th century and the design involves influences from the Baroque era as well. Additionally, important historical artefacts like the Holy Chalice and works of art from some of Spain’s most influential artists like Goya and Maella can be found here. It is a dream for historians and design lovers alike.</p>
         <a href="ReadAllStories.php#S7" class="btn btn-primary float-end mx-5 ">Read Story</a>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="image/Aquarium.jpg" class="card-img-top" alt="Oceanographic Aquarium">
      <div class="card-body">
        <h5 class="card-title">Oceanographic Aquarium</h5>
        <p class="card-text">Félix Candela’s masterful work is one of the best places to visit in the city. The aquarium is the largest in Europe and forms a part of the City of Arts and Sciences. This is an incredible place for visitors of all ages and interests as it houses an incredible 500 diverse marine species and nearly 45,000 different creatures. There is also an underwater café here that is a great place to stop off for a coffee and bite to eat. </p>
         <a href="ReadAllStories.php#S3" class="btn btn-primary text-center">Read Story</a>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src="image/lonja.jpg" class="card-img-top" alt="La Lonja de Seda">
      <div class="card-body">
        <h5 class="card-title">La Lonja de Seda</h5>
        <p class="card-text">One of the finest examples of Gothic architecture in the city, this structure was created way back in the 15th century and served as the major hub for the silk trade in Valencia. It looks like an ancient fortress with its notched facade and has a massive bell tower as its neighbour. Visitors can climb up to the top of the tower and enjoy the surrounding views on offer. This is one of the best places to visit.</p>
         <a href="ReadAllStories.php#S4" class="btn btn-primary text-center">Read Story</a>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon btn btn-success" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon btn btn-success" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>


</main>

<footer>
	<div class="container text-center fst-italic">
	<h2>“Travelling is like flirting with life. It’s like saying, ‘I would stay and love you, but I have to go; this is my station.'” – Lisa St. Aubin de Teran</h2>
	
</div>

</footer>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>