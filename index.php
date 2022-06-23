<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>BOOTSTRAP GRID LAYOUT</title>

</head>
<body>
    <!-- Navigation bar here -->
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
    
    </nav>
    <!-- End navigation bar -->
    <main class="p-5 mb bg-light">
        <h1>Welcome Gracy</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Neque, labore necessitatibus. Nesciunt, repudiandae omnis doloremque temporibus id eius illum voluptate!
            </p>
            <button class="btn btn-primary">learn more</button>
    </main>
     <div class="container">
         
         <div class="row">
             <div class="col-lg-4">
                 <h1>Header 1</h1>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium veritatis commodi nisi 
                     corporis laboriosam modi. Corporis tempore consequatur assumenda maiores deleniti. Nisi facilis tempora consequatur.</p>
                     <button class="btn btn-primary">learn more</button>
             </div>
             <div class="col-lg-4">
             <h1>Header 2</h1>
             <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid aperiam et dicta dolorum! Provident nihil natus ipsam
                 consectetur voluptatem, sunt unde quaerat! Sunt, incidunt libero? </p>
                 <button class="btn btn-primary">learn more</button> 
             </div> 
             <div class="col-lg-4">
                 <h1>Header 3</h1>
                 <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae error, molestias eius debitis sed, odio et, omnis quaerat distinctio incidunt tempore magnam at est dolor!</P>
                 <button class="btn btn-primary">learn more</button>
                </div>              
         </div>
        
        <!-- Contact us page here -->
        <div class="row pt-5">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Iusto alias soluta architecto libero quasi atque 
               similique rerum, ipsa distinctio reiciendis illo consequuntur
                unde ipsam nihil repellat in cumque? Cupiditate, vel?
            </p>

            <form>
              
                    <div class="mb-3 col-lg-6">
                        <label for="FirstName" class="form-label">FirstName</label>
                        <input type="text" class="form-control" placeholder="please enter your name">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="LastName" class="form-label">LastName</label>
                        <input type="text" class="form-control" placeholder="please enter your name">
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="please enter your email adress">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="phone number" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" placeholder="please enter your phone number">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea  cols="30" rows="10"  class="form-control" ></textarea>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">send a message</button>
            </form>
        </div>
       <!-- End contact us page -->
         <hr>
           <footer>
                 &copy;company 2022
            </footer>
     </div>
     <br>
      

     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script> -->
     <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
</body>
</html>