<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./font-awesome/css/all.css">
  <link rel="stylesheet" href="./font-awesome/css/fontawesome.css">
  <link rel="stylesheet" href="./font-awesome/css/brands.css">
  <link rel="stylesheet" href="./font-awesome/css/solid.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <title>CO</title>
    <style>
    #myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  color: 0; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
  background-color: 0;
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}
      .navbar-nav {
        padding-right: 80px;
      }

      .nav-item {
        padding-right: 10px;
      }

      .bg-light {
        background-color: rgba(0,0,0,0) !important ;
      }

      .bg-nontrans {
        background-color: rgba(255,255,255,1) !important ;
      }

      @media screen and (max-width: 576px){
        .bg-light {
          background-color: rgba(255,255,255,1) !important ;
        }
        #home{
          margin-top: 55px;
        } 
      }

      #mycarousel{
        height: 100vh;
        padding-top : -150px;
      }
      
      .carousel-item {
        height: 100vh;
      
      }

      section{
        padding-top : 50px;
        padding-bottom : 50px;
      }

      #home{
        padding-top : 0px;
        padding-bottom : 0px;
      }

      #about, #gallery, #contact {
        height : 700px;
        text-align : center;
      }

      html{
        scroll-behavior : smooth;
      }

      .parallax{
        background-image : url("image/bg.jpg");
        
        background-attachment : fixed;
        background-position : center;
        background-repeat : no-repeat;
        background-size : cover;
      }
      .parallax2{
        background-image : url("image/3.jpg");
        
        background-attachment : fixed;
        background-position : center;
        background-repeat : no-repeat;
        background-size : cover;
      }

      footer{
        background-color : #004479;
      }
      .col-sm-4{
        color : white;
      }
      .footer-copyright {
        padding : 30px;
        margin : 10px;
        color : white;
      }
      .col-4 {
    width: 25%;
    height: 320px;
    border: 1px solid #ccc;
    float: left;
    padding: 10px;
    box-sizing: border-box;
}
.box {
    background-color: white;
    border: 1px solid #ccc;
    padding: 15px;
    box-sizing: border-box;
    margin: 30px 0 25px 0;
    transition: all .5s ease;
}
.containers {
    display:grid;
    grid-template-columns: 66% auto;
    padding: 4em 1em;
}
.isi {
    display:grid;
    list-style-type:none;
    margin:0;padding:0;
    grid-template-columns: repeat(3, auto);
    grid-template-rows: repeat(2, auto);
}
.isian{ 

  margin-left : 25px;
    width:150p0x;
    justify-self:center;

}
.abouttext {
  color : white;
  margin-top 30px;
  padding : 30px;
}
.card {
  margin-right : 0px;
  margin-top: 75px;
  padding : 0px;
}
    </style>
    </head>
    <body data-spy="scroll" data-target="#navbar">
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <a class="navbar-brand font-weight-bolder" href="#">Catalog Otomotif</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto font-weight-bolder">
    <li class="nav-item ">
            <a class="nav-link" href="#home">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
    </ul>
  </div>
</nav>
<section id="home">
<div id="mycarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/6.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/7.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/8.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
    </div>
  </section>

  <section id="gallery" class="parallax">
  <h1>Gallery</h1>
    <div class="containers">
      <div class="row">
        <div class="col-md-8 mx-auto text-center">
          <ul class="isi">
                <li class="isian">
                <img src="image/fortuner.jpg" alt="">
                <p>Toyota Fortuner</p>
                </li>
                <li class="isian">
                <img src="image/agya.jpg" alt="">
                <p>Toyota Agya</p>
                </li>
                <li class="isian">
                <img src="image/rush.jpg" alt="">
                <p>Toyota Rush</p>
                </li>
                <li class="isian">
                <img src="image/avanza.jpg" alt="">
                <p>Toyota Avanza</p>
                </li>
                <li class="isian">
                <img src="image/veloz.jpg" alt="">
                <p>Toyota Veloz</p>
                </li>
                <li class="isian">
                <img src="image/corolla.jpg" alt="">
                <p>Toyota Corolla Cross</p>  
                </li>
            </ul>
          <br/>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="parallax2">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto text-center">
        <div class="abouttext">
          <h1>This Is About Page</h1>
          <p>We are a website that provides information or various things about the automotive world, especially about cars with the theme of an automotive catalog. Here we can also be called an e-Catalog. This website was created to make it easier for users to find out various information about the automotive world, especially about the various types and models of a car. </p>
          <br/>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="contact mb-5">
    <div class="container">
      <div class="row pt-4 mb-4">
        <div class="col text-center">
          <h2>Contact</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="card border-primary mb-3 text-center">
          <img src="image/maps.jpg" alt="">
          </div>
 
        </div>
        <div class="col-lg-6">
          <form action="">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="alamat">Address</label>
              <input type="text" class="form-control" id="alamat">
            </div>
            <div class="form-group">
              <label for="nope">Phone Number</label>
              <input type="text" class="form-control" id="nope">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea name="message" class="form-control" id="message"></textarea>
            </div>
            <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

      <script>
        $(document).scroll(function(){
          if ($(window).scrollTop() > 50) {
            $('#navbar').removeClass('bg-light').addClass('bg-nontrans');
          }else if($(window).scrollTop() <= 50) {
            $('#navbar').removeClass('bg-nontrans').addClass('bg-light');
          }
        });
      </script>

 <!-- FOOTER CONTENT -->
 <footer id="foot" class="page-footer bg-dark">
    <div class="headfoot">
      <div class="container">
        <div class="row py-4 d-flex align-items-center">
          <div class="col-md-12 text-center">
          </div>
        </div>
      </div>
    </div>

    <div class="container text-center text-md-left mt-5 text-light">

      <div class="row">

        <div class="col-md-3 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold">Contact/Address</h6>
          <hr class="bg-secondary mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height:2px;">
          <p class="mt-2">Jl.Raya Bandung No.88</p>
          <p class="mt-2">Ciranjang-Cianjur</p>
          <p class="mt-2">Tel. +021 237 313</p>
        </div>
        <div class="col-md-2 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold">Information</h6>
          <hr class="bg-secondary mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height:2px;">
          <ul class="list-unstyled">
            <li class="my-2"><a href="#">Original Catalogs</a></li>
            <li class="my-2"><a href="#">Maintenance</a></li>
            <li class="my-2"><a href="#">Battery</a></li>
            <li class="my-2"><a href="#">Disks</a></li>
            <li class="my-2"><a href="#">Tires</a></li>
            <li class="my-2"><a href="#">Autochemistry</a></li>
            <li class="my-2"><a href="#">Oils</a></li>
            <li class="my-2"><a href="#">Accessoriesdisks</a></li>
            <li class="my-2"><a href="#">car light</a></li>
            <li class="my-2"><a href="#">Aftermarket</a></li>
            <li class="my-2"><a href="#">Feedback</a></li>
          </ul>
        </div>
        <div class="col-md-2 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold">Customer Service</h6>
          <hr class="bg-secondary mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height:2px;">
          <ul class="list-unstyled">
            <li class="my-2"><a href="#">Sign In</a></li>
            <li class="my-2"><a href="#">Sign Up</a></li>
            <li class="my-2"><a href="#">My account</a></li>
            <li class="my-2"><a href="#">How it works</a></li>
            <li class="my-2"><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-md-3 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold">Social Media</h6>
          <hr class="bg-secondary mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height:2px;">
          <ul class="list-unstyled">
            <li class="my-2"> <a href="#"><i class="fab fa-facebook fa-2x text-white mr-3"></i>Catalog Otomotif</a></li>
            <li id="move" class="my-2"> <a href="#"><i class="fab fa-google-plus-g fa-2x text-white mr-2"></i>CatalogOtomotif@gmail.com</a></li>
            <li class="my-2"> <a href="#"><i class="fab fa-twitter fa-2x text-white mr-3"></i>CatalogOtomotif</a></li>
            <li class="my-2"> <a href="#"><i class="fab fa-instagram fa-2x text-white mr-3"></i>@CatalogOtomotif</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-copyright text-center py-3">
        <p>&copy; Copyright Catalog Otomotif
        </p>
      </div>
  </footer>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi-arrow-up-circle" style="color: black; font-size: 3rem; background-color: 0;"></i></button>



<script src="./js/jquery/jquery.min.js"></script>
  <script src="./js/jquery/jquery.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="./js/main.js"></script>
  <script src="./font-awesome/js/all.js"></script>
  <script src="./font-awesome/js/brands.js"></script>
  <script src="./font-awesome/js/solid.js"></script>
  <script src="./font-awesome/js/fontawesome.js"></script>
  <script>//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}</script>
  
    </body>
</html>