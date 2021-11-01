<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<title>project 2</title>
</head>

<body>
<div class="container">
  <h2>project 2</h2>
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="index.php">HOME</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">MORE</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="mental.php">Mental helath</a>
        <a class="dropdown-item" href="workship.php">Workship</a>
        <a class="dropdown-item" href="medtation.php">meditation</a></div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://www.google.com/search?q=HELATH+CLUB+NEAR+YOU&rlz=1C1CHBF_enIN976IN976&oq=HELATH+CLUB+NEAR+YOU+&aqs=chrome..69i57.20006j0j9&sourceid=chrome&ie=UTF-8">HEALTH CLUB</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="https://www.google.com/search?q=MWDICALS+NEAR+YOU&rlz=1C1CHBF_enIN976IN976&oq=MWDICALS+NEAR+YOU+&aqs=chrome..69i57j0i10i22i30i457j0i402.4504j0j7&sourceid=chrome&ie=UTF-8">MEDICALS</a>
    </li>
  </ul>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cc1.jpg" alt="" width="1100" height="500">
      <div class="">
        <h3></h3>
        <p></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cc2.jpg" alt="" width="1100" height="500">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cc3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class = "my-5">
  <div class="py-5">
    <h2 class="text-center">TECHNOLOGY THAT WE USE
    </h2>
  </div>
  <div class ="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/cc4.jpg" class="img-fluid aboutimg">

    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2 class = "display-5">Internet,SmartPhone,SmartGagdet</h2> 
        <p class="py-0">
       Never Condescend.</p>
       <p class="py-0">Take Existing Knowledge Into Account.</p>
       <p class="py-0"> Be Aware Of Physical Limitations.</p>
       <p class="py-0"> Explain Yourself.</p>
       <p class="py-0"> Chill With The Jargon. </p>
        </p>
        <a href="about.php"class="btn btn-success"> check more </a>
      
    </div>
    
    </div>
    
  </div>
  

</section>



  <section class = "my-5">
  <div class="py-5">
    <h2 class="text-center">Form</h2>
  </div>
  <div class ="w-50 m-auto ">
    <form action="userinfo.php" method = "post">
      <div class="form-group">
        <label>username</label>
        <input type="text" name="user" autocomplete ="off" class ="form-control">

      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" autocomplete ="off" class ="form-control">

      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="Mobile" autocomplete ="off" class ="form-control">

      </div>
      
      <div class="form-group">
        <label>Comment</label>
        <textarea class="form-control">

        </textarea>

      </div>
      <button type="submit" class="btn btn-success">submit 
        
      </button>
    </form>
  </div>

  </section>
<footer>
  <p class="p-3 bg-dark text-white text-center">@project2

  </p>
</footer>
</body>

</html>