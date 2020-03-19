<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UTS CEH PRAKTEK</title>
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<?php require_once "asset.php"  ?>
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="../main" class="mb-0">CEH 2</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="../main" class="nav-link <?php if($pages=='home'){echo 'active';}?>">Home</a></li>
                <li><a href="../cookie_manipulation" class="nav-link <?php if($pages=='cookie'){echo 'active';}?>">Cookie Manipulation</a></li>
                <li><a href="../parameter_tampering" class="nav-link <?php if($pages=='parameter'){echo 'active';}?>">Parameter Tempering</a></li>
                <li><a href="../sql_injection" class="nav-link <?php if($pages=='sql'){echo 'active';}?>">Sql Injection</a></li>
                <li><a href="../xss" class="nav-link <?php if($pages=='xss'){echo 'active';}?>">XSS</a>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>
        
        </div>
      </div>
      
    </header>
    <div class="site-blocks-cover overlay hacker" data-aos="fade" id="home-section">

<div class="container">
  <div class="row align-items-center justify-content-center">

    
    <div class="col-md-8 mt-lg-5 text-center">
      <h1 class="text-uppercase mb-5" data-aos="fade-up" style="letter-spacing: 3px"><?php echo $main?></h1>
      
      <div data-aos="fade-up" data-aos-delay="100">
        <h2 class="mb-5"><?php echo $h2?></>
      </div>
    </div>
      
  </div>
</div>

      </div>
            <script>
                var header = document.getElementById("test");
                var btns = header.getElementsByClassName("li");
                for (var i = 0; i < btns.length; i++) {
                    btns[i].addEventListener("click", function() {
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                    });
                }
            </script>
        </nav>
