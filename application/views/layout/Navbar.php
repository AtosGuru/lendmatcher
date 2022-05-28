<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
      integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
      integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    />
    <title>Lendmatcher</title>
    <link rel="stylesheet" href="<?=base_url()?>/assets/css/App.css" />
  </head>
  <body>
    <input type="hidden" value="<?=base_url()?>" id="base_url"/>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="">
    <a class="navbar-brand" href="<?=base_url()?>index.php/Main">
      <img src="<?=base_url()?>assets/img/logo.png"  style="width:150px" />
    </a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="col-sm-12 mr-auto mt-2 my-lg-0 navbar-toggler" style="border:none" data-toggle="collapse"  aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
    </div>

    <div class="collapse navbar-collapse flex a-custom-padding" id="navbarTogglerDemo02" style="padding-bottom:-10px; padding-top:10px;">
    
    <form class="form-inline  mr-auto mt-2 my-lg-0">
      <p class="mr-sm-2" style="    margin-bottom: 10px;">Country: USA</p>
      
    </form>
    <ul class="navbar-nav my-2 mt-lg-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Investor<i class="c-icon icon-invest"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Invest</a>
          <a class="dropdown-item" href="#">Explore</a>
          <a class="dropdown-item" href="#">Search</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Entrepreneur
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">My Pitches</a>
          <a class="dropdown-item" href="#">My Investors</a>
          <a class="dropdown-item" href="#">Investor Search</a>
          <a class="dropdown-item" href="#">Add a Pitch</a>
          <a class="dropdown-item" href="#">Investor Search</a>
        </div>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="#">Help<i class="c-icon icon-invest"></i></a>
      </li>
      
      <?php     
        if($this->session->userdata('username') == NULL){
      ?>
      <li class="nav-item">
        <a class="nav-link" href="#">Tesimonial</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>index.php/Auth/login">LogIn</a>
      </li>
      <li class="nav-item">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="<?=base_url()?>index.php/Auth/signup" class="green">SignUp</a></button>
        
      </li>
      <?php }else{?>
        <li class="nav-item">
          <button class="btn btn-outline-danger my-2 my-sm-0 " type="submit"><a href="<?=base_url()?>index.php/Auth/logout" class="tomato" title="logout" id="logout"><?=$this->session->userdata('username')?></a></button>
 
        </li>
       <?php } ?>
    </ul>
    
      

    
    </div>
  </nav>