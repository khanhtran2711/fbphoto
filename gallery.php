<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style-gallery.css">
  <title><?= $_GET['name'] ?? "" ?></title>
  <link rel="shortcut icon" type="image/x-icon" href="img/anya.png">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="100">
  <div class="untree_co-section pb-0" id="home-section">
    <div class="container">
      <p class="gsap-reveal-hero"><a href="index.php#categories-area" class="btn btn-black">Back to homepage</a></p>
    </div>
  </div>
  <?php
  include_once 'text.php';
  if (isset($_GET['id'])) :
    $id = $_GET['id'];
    $name = $_GET['name'];
    $defaultNumber = 20;
    $obj = new CallApi();
    $list = $obj->call($id);
    $total = count($list);
    $pages = $total/$defaultNumber + 1;
    $page = $_GET['page']??20;
  ?>
    <div class="py-2">
      <div class="container">
        <?= $total ?>
          <form action="#">
            <div class="row">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="hidden" name="name" value="<?=$name?>">
            <select name="page" class="custom-select mb-3 col-8">
              <option selected value="">Custom Select Menu</option>
              <?php
                for ($i=1; $i <=$pages ; $i++) :
                  echo "<option>".($i*$defaultNumber)."</option>";  # code...
                endfor;
              ?>
            </select>
            <button type="submit" class="btn btn-sm btn-primary col-4 px-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <div class="pt-3" id="portfolio-section">
      <div class="container">

        <div class="relative">
          <div class="loader-portfolio-wrap">
            <div class="loader-portfolio"></div>
          </div>
        </div>
        <div id="portfolio-single-holder"></div>
        <div class="portfolio-wrapper">
          <!-- start row -->
          <div id="posts" class="row">
            <?php
          
            for ($i =($page-$defaultNumber); $i < $page; $i++) :
              if($i == $total) {
                  break;
              }
              
              $imgid[$i] = explode('/d/', $list[$i]->img_id);
            ?>
              <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                <a href="#" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img" data-id="1">
                  <div class="overlay">
                    <span class="wrap-icon icon-link2"></span>
                  </div>
                  <img src="<?= $obj->getImageContent($imgid[$i][0]); ?>" class="lazyload  img-fluid" alt="error" />
                </a>
              </div>
          <?php
            endfor;
          endif;
          ?>
          </div>
          <!-- end row -->
        </div>

      </div>
    </div>



    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/wave-animate.js"></script>
    <script src="js/circle-progress.js"></script>
    <script src="js/imagesloaded.pkgd.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/ScrollMagic.min.js"></script>
    <script src="js/scrollmagic.animation.gsap.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>