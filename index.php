<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Lobster&family=Lobster+Two:ital,wght@0,700;1,700&display=swap');
  </style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">Organic</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto m-auto my-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Trending</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Store</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Organic</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control px-2 search" type="text" placeholder="Search">
          <button class="btn0" type="button">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <section class="main">
    <div class="container py-5">
      <div class="row py-4 justify-content-end">
        <div class="col-lg-7 pt-4 text-center justify-content-start">
          <h1 class="pt-5">
            Nature Has Always Cared For Us !
          </h1>
          <a href="#" class="btn1 mt-3">Show More</a>
        </div>
      </div>
    </div>
  </section>

  <section class="product">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 py-5 m-auto text-center">
          <h1 class="font-weight-bold">What's Trending</h1>
          <h6 style="color: red;">Be Healthy Organic Food</h6>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="card border-0 bg-light text-center mb-2">
            <img class="card-img-top" src="images/image.png" alt="Title">
            <div class="card-body">
              <h4 class="card-title">Cake Food</h4>
              <p class="card-text">$39.99</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card border-0 bg-light text-center mb-2">
            <img class="card-img-top" src="images/bean.png" alt="Title">
            <div class="card-body">
              <h4 class="card-title">Bean Food</h4>
              <p class="card-text">$39.99</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card border-0 bg-light text-center mb-2">
            <img class="card-img-top" src="images/noodle.jpg" alt="Title">
            <div class="card-body">
              <h4 class="card-title">Noodle Food</h4>
              <p class="card-text">$39.99</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card border-0 bg-light text-center mb-2">
            <img class="card-img-top" src="images/images.jpg" alt="Title">
            <div class="card-body">
              <h4 class="card-title">Cereal Food</h4>
              <p class="card-text">$39.99</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 m-auto text-center">
          <a href="#" class="btn1">Show more</a>
        </div>
      </div>
    </div>
  </section>
  <section class="about">
    <div class="container py-5">
      <div class="row pt-5">
        <div class="col-lg-8 m-auto text-center mb-5">
          <h1>Welcome To Our Organic Food Sociaty</h1>
          <h6  style="color: red;">Be Healty Organic Food</h6>
        </div>
        <div class="row py-3">
          <div class="col-lg-4">
            <img src="./images/woman.jpg" alt="" class="img-fluid mb-3">
            <h5>Best Quality Product</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem at quisquam minus suscipit veritatis
              praesentium fugit neque dicta nihil, ut aperiam saepe tempora perferendis sed, ex facere! Ab, sapiente
              dolorem.</p>
          </div>
          <div class="col-lg-4">
            <img src="./images/woman.jpg" alt="" class="img-fluid mb-3">
            <h5>Best Quality Product</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem at quisquam minus suscipit veritatis
              praesentium fugit neque dicta nihil, ut aperiam saepe tempora perferendis sed, ex facere! Ab, sapiente
              dolorem.</p>
          </div>
          <div class="col-lg-4">
            <img src="./images/woman.jpg" alt="" class="img-fluid mb-3">
            <h5>Best Quality Product</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem at quisquam minus suscipit veritatis
              praesentium fugit neque dicta nihil, ut aperiam saepe tempora perferendis sed, ex facere! Ab, sapiente
              dolorem.</p>
          </div>

        
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 m-auto text-center">
          <a href="#" class="btn1">Shop more</a>
        </div>
      </div>
    </div>

  </section>


  <section class="shop">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 m-auto text-center mb-5">
          <h1>Explore Our Store</h1>
          <h6  style="color: red;">Pick Your Product Our Store</h6>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="card border-0 bg-light text-center mb-2">
            <img class="card-img-top" src="images/image.png" alt="Title">
            <div class="card-body">
              <h4 class="card-title">Cake Food</h4>
              <p class="card-text">$39.99</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card border-0 bg-light text-center mb-2">
            <img class="card-img-top" src="images/bean.png" alt="Title">
            <div class="card-body">
              <h4 class="card-title">Bean Food</h4>
              <p class="card-text">$39.99</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card border-0 bg-light text-center mb-2">
            <img class="card-img-top" src="images/noodle.jpg" alt="Title">
            <div class="card-body">
              <h4 class="card-title">Noodle Food</h4>
              <p class="card-text">$39.99</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card border-0 bg-light text-center mb-2">
            <img class="card-img-top" src="images/images.jpg" alt="Title">
            <div class="card-body">
              <h4 class="card-title">Cereal Food</h4>
              <p class="card-text">$39.99</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-5">
        <div class="col-lg-3">
          <div class="card border-0 bg-light text-center mb-2">
            <img class="card-img-top" src="images/image.png" alt="Title">
            <div class="card-body">
              <h4 class="card-title">Cake Food</h4>
              <p class="card-text">$39.99</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card border-0 bg-light text-center mb-2">
            <img class="card-img-top" src="images/bean.png" alt="Title">
            <div class="card-body">
              <h4 class="card-title">Bean Food</h4>
              <p class="card-text">$39.99</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card border-0 bg-light text-center mb-2">
            <img class="card-img-top" src="images/noodle.jpg" alt="Title">
            <div class="card-body">
              <h4 class="card-title">Noodle Food</h4>
              <p class="card-text">$39.99</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card border-0 bg-light text-center mb-2">
            <img class="card-img-top" src="images/images.jpg" alt="Title">
            <div class="card-body">
              <h4 class="card-title">Cereal Food</h4>
              <p class="card-text">$39.99</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 m-auto text-center">
          <a href="#" class="btn1">Shop more</a>
        </div>
      </div>
    </div>
  </section>
<section class="vegetable py-5 my-5">
  <div class="container text-dark py-5">
    <div class="row py-5 ">
      <div class="col-lg-6 text-center">
        <h1 class="font-weight-bold py-3">Unknock Your Potentail with good Nutrion</h1>
        <h6  style="color: red;">Pick Your Product Our Store</h6>
      </div>
    </div>
  </div>
</section>

<section class="contact">
    <div class="container py-5">
      <div class="row pt-5">
        <div class="col-lg-8 m-auto text-center mb-5">
          <h1>Contact</h1>
          <h6  style="color: red;">If you have any questions, please feel free to contact us</h6>
        </div>
        <div class="row py-3">
          <div class="col-lg-12">
          <?php
            if(isset($_GET['msg']))
            { 
            ?>
            <div class="alert alert-danger" role="alert">
                <?php
                    echo $_GET['msg'];
                ?>
            </div>
            <?php
                }
            ?>
          <form id="contactForm" action="handle.php" method="post">
                <div class="form-floating mb-3">
                    <input class="form-control" name="fullName" require id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                    <label for="name">FullName</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                    <label for="email">Email</label>
                </div>   
                <div class="form-floating mb-3">
                    <input class="form-control" name="subject" require id="subject" type="text" placeholder="Enter your subject..." data-sb-validations="required" />
                    <label for="subject">Subject</label>
                </div>     
                <div class="form-floating mb-3">
                    <textarea class="form-control" name="message" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                    <label for="message">Message</label>
                </div>
                <div class="m-auto text-center w-50">
                    <button class="btn btn-info text-white" type="submit">Gửi</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- Footer -->
<footer class="page-footer font-small teal pt-4 bg-dark">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 text-white">© 2022 Copyright:
        <a href="/"> vipproVietNam.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

</body>

</html>