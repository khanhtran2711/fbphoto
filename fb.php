<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    {# <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" /> #}
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Custom styles -->
    <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
    <!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
  <!-- Container wrapper -->
  <div class="container">    
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent1"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent1">      
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-sm-0" href="#">
        <img
          src=""
          height="20"
          alt="Logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link " href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Product</a>
        </li>
      </ul>
      <!-- Left links -->      
    </div>
    <!-- Collapsible wrapper -->
    
    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="nav-link me-3" href="#">
        <i class="fas fa-shopping-cart"></i>
      </a>
      <a class="nav-link me-3" href="#">
        <i class="fas fa-sign-in-alt"></i>
      </a>
    </div>
    <!-- Right elements -->
    
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

<!-- carousel -->
<div class="dd" style="max-height: 100px;"></div>
 <!--Main layout-->
<main>
<div class="container">
  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark mt-3 mb-5 shadow p-2" style="background-color: #607D8B">
  <!-- Container wrapper -->
  
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

 

<!-- Products -->
<section>
  <div class="text-center">
    <div class="row">
    <?php 
    include_once 'text.php';
    $obj = new CallApi();
                        
    $json = file_get_contents('https://script.google.com/macros/s/AKfycbyJlAqFbaN6AICml6fa0YNAw-4qQt90QaYUSF2Fznsj37KsJzUoBGWfMXzQRBParfhB/exec');
    $obj = json_decode($json);
    $list = $obj->data;
    // var_dump($list);
    for($i=0;$i<count($list); $i++):
    
        $imgid[$i] = explode('/d/',$list[$i]->img_id);
        ?>
      <div class="col-md-4 my-md-4 col-sm-6 my-sm-6 col-12">
        <div class="card">
          <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
            data-mdb-ripple-color="light">
            <img src="<?='https://drive.google.com/uc?export=view&id='.$imgid[$i][0]?>"
            class="my-card-img w-100" />
          </div>
          <div class="card-body">
            <a href="" class="text-reset">
            </a>
            <a href="" class="text-reset ">
              <!-- <p>Shirt</p> -->
            </a>
          </div>
        </div>
      </div>
      <?php
endfor;                      
?>
    </div>
  </div>
</section>
  
<!-- Pagination -->  
</div>
</main>
 <!--Main layout-->

<footer class="text-center text-white mt-4" style="background-color: #607D8B">
  
  <hr class="text-dark">
  
  <div class="container">
    <!-- Section: Social media -->
    <section class="mb-3">
      
      <!-- Facebook -->
      <a
        class="btn-link btn-floating btn-lg text-white"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn-link btn-floating btn-lg text-white"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn-link btn-floating btn-lg text-white"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn-link btn-floating btn-lg text-white"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- YouTube -->
      <a
        class="btn-link btn-floating btn-lg text-white"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-youtube"></i
      ></a>
      <!-- Github -->
      <a
        class="btn-link btn-floating btn-lg text-white"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); text-color: #E0E0E0">
    © 2023 Copyright: mdbootstrap
  </div>
  <!-- Copyright -->
</footer>

</body>
</html>


