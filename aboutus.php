<?php
$_SERVER="localhost";
$username="root";
$password="";
$database="zalego";

$conn = mysqli_connect($_SERVER,$username,$password,$database);
if( isset($_POST['submitButton']))
{
    $email=$_POST['email'];
    $insertdata=mysqli_query($conn,"INSERT INTO subscribers(email)
    VALUES('email')");
    if($insertdata)
    {
        echo "data submitted succeessfully";
    }
    else{
        echo "error occured";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
     <!-- Navigation bar here
     <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
            </button>
        
         <div class="collapse navbar-collapse" id="navbarDisplayNavigations">
             <div class="navbar-nav">
                 <a href="#" class="nav-link active">home</a>
                 <a href="#" class="nav-link">about us</a>
                 <a href="#" class="nav-link">contact us</a>
             </div>
         </div>
        </div>
      
      </nav> -->
      <!-- End navigation bar -->
    <main class="p-5 mb bg-light">
        <h1>About Us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti provident excepturi accusantium porro facilis. Itaque harum veniam quaerat molestiae ducimus. Cum illo assumenda, dolore natus sunt officia eius. Fugit, quisquam.</p>
    </main>
    <div class="container">
        <div class="row">
            <h1>Our program</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum libero rem veritatis dolor accusamus debitis dolorem ad nisi officia natus?</p>
        </div>
        <div class="col-lg-6">
            <img src="images/images (1).jpg" alt="" class="img-fluid rounded">
        </div>
        <br>
        <div class="row">
            <h1>The Program</h1>
        </div>
            <br>
     <div class="col-lg-4">
                <div class="card text-center shadow">
                    <div class="card-body">
                        <h5 class="card-title" card-title="skill discovery">Skill Discovery</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita veritatis, ex sint itaque a doloremque praesentium? Possimus placeat, incidunt harum quis laudantium quisquam officiis aliquam.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-center shadow">
                    <div class="card-body">
                        <h5 class="card-title" card-title="upskilling program">Upskilling Program</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita veritatis, ex sint itaque a doloremque praesentium? Possimus placeat, incidunt harum quis laudantium quisquam officiis aliquam.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-center shadow">
                    <div class="card-body">
                        <h5 class="card-title" card-title="path finding program">Path Finding Program</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita veritatis, ex sint itaque a doloremque praesentium? Possimus placeat, incidunt harum quis laudantium quisquam officiis aliquam.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <form action="aboutus.php" method="POST">
            <div class="row">
                <p>subscribe to get information,latest news about zalego academy</p>
                <div class="mb-3 col-lg-6">
                    <label for="Email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="please enter your email"> 
                    <br>
                    <button class="btn btn-primary" type="submit" name="submitButton">subscribe</button>
                </div>
            </div>
</form>
    </div>
            
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script> -->
<script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>"></script>
</body>
</html>