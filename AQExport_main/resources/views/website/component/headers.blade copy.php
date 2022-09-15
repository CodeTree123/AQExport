<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AQ Export</title>
 
    <link rel="icon" type="image/x-icon" href="{{ asset ('assets/img/a_q_export_logo_icon.png')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

   <!-- Add the slick-theme.css if you want default styling -->
   <link rel="stylesheet" href="{{ asset ('assets/css/slick.css')}}"> 

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" href="{{ asset ('assets/css/slick-theme.css')}}">

    <link href="{{ asset ('assets/css/aos.css')}}" rel="stylesheet"> 
   <link href="{{ asset ('assets/css/bootstrap.min.css')}}" rel="stylesheet"> 

  <link href=" {{ asset ('assets/css/main.css')}}" rel="stylesheet">
   
   <link rel="stylesheet" href="{{ asset ('assets/css/website_style.css')}}"> 




<div class="bg-light fixed-top shadow">

  <div class="container">
    <header class="  d-flex flex-wrap align-items-center justify-content-lg-between justify-content-md-between justify-content-sm-evenly justify-content-evenly py-3  border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <div class="main_logo">
          <img src="{{ asset ('assets/img/a_q_export_logo.png')}}" alt=""  >
        </div> 
      </a> 
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 link-dark">Home</a></li>
        <li><a href="{{route('about_us')}}" class="nav-link px-2 link-dark">About Us</a></li> 
    
          <li class="nav-item dropdown">
            <a class="nav-link px-2 link-dark dropdown-toggle"  href="{{route('gallery')}}"     id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Gallery 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item dropdown-item-header" href="{{url('/knit_wear')}}">Knit Wear</a> 
          <a class="dropdown-item dropdown-item-header" href="{{url('/woven_wear')}}">Woven Wear</a> 
          <a class="dropdown-item dropdown-item-header" href="{{url('/denim_wear')}}">Denim Wear</a> 
          <a class="dropdown-item dropdown-item-header" href="{{url('/winter_wear')}}">Winter Wear</a> 
          <a class="dropdown-item dropdown-item-header" href="{{url('/new_production_ss_2022')}}">New Production SS 2022</a> 
          <a class="dropdown-item dropdown-item-header" href="{{url('/leather')}}">Leather</a> 
          <a class="dropdown-item dropdown-item-header" href="{{url('/undergarments')}}">Undergarments</a> 
        </div>
      </li>
        <li><a href="{{route('contact_us')}}" class="nav-link px-2 link-dark">Contact Us</a></li> 
      </ul>

      <div class="col-md-3 text-end">
      
          <div> 
              <!-- Offcanvas Overlay -->
                <!-- <div id="myNav" class="offcanvas_overlay">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="offcanvas_overlay-content">  
                      <ul class=" ">
                          <li><a href="/" class="  px-2  ">Home</a></li>
                          <li><a href="{{route('about_us')}}" class="  px-2  ">About Us</a></li> 
            
                          <li class=" dropdown">
                            <a class=" px-2 d-inline   ul-menu-link "  href="{{route('gallery')}}"     id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Gallery 
                            </a> 
                            <i class="gal_icon text-white fa-solid fa-angles-down fa-sm"></i>
                            <ul class="ul-dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <li><a class="dropdown-item dropdown-item-header" href="{{url('/knit_wear')}}">Knit Wear</a> </li>
                              <li><a class="dropdown-item dropdown-item-header" href="{{url('/woven_wear')}}">Woven Wear</a> </li>
                              <li><a class="dropdown-item dropdown-item-header" href="{{url('/denim_wear')}}">Denim Wear</a> </li>
                              <li><a class="dropdown-item dropdown-item-header" href="{{url('/winter_wear')}}">Winter Wear</a> </li>
                              <li><a class="dropdown-item dropdown-item-header" href="{{url('/new_production_ss_2022')}}">New Production SS 2022</a> </li>
                            </ul>
                        




                          </li>
                          <li><a href="{{route('contact_us')}}" class=" px-2  ">Contact Us</a></li> 
                          <li><a  href="{{route('login')}}">Login </a></li> 
                      </ul>



                    </div>
                </div> 
                <span style=" cursor:pointer" onclick="openNav()"> 
                  <i class="fa-solid fa-bars fa-2xl"></i>
                </span> -->
              <!-- Offcanvas Overlay End-->

            <button  class="custom-btn btn-3"><a  href="{{route('login')}}">Login </a></button> 
          </div>



        <!-- <button type="button" class="btn btn-outline-success me-2">Login</button>  -->
      </div>
    </header>
  </div>
</div>

  </head>
  <body>



  
  <nav class="navbar navbar-expand-md  " aria-label="Fourth navbar example">
    <div class="container-fluid">

        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
          <div class="main_logo">
            <img src="{{ asset ('assets/img/a_q_export_logo.png')}}" alt=""  >
          </div> 
        </a> 

      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbarsExample04" style="">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about_us')}}">About Us</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact_us')}}">Contact Us</a>
          </li>  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{route('gallery')}}" data-bs-toggle="dropdown" aria-expanded="false">Gallery</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{url('/knit_wear')}}">Knit Wear</a></li>  
              <li><a class="dropdown-item" href="{{url('/woven_wear')}}">Woven Wear</a></li>  
              <li><a class="dropdown-item" href="{{url('/denim_wear')}}">Denim Wear</a></li>  
              <li><a class="dropdown-item" href="{{url('/winter_wear')}}">Winter Wear</a></li>  
              <li><a class="dropdown-item" href="{{url('/new_production_ss_2022')}}">New Production SS 2022</a></li>  
              <li><a class="dropdown-item" href="{{url('/leather')}}">Leather</a></li>  
              <li><a class="dropdown-item" href="{{url('/undergarments')}}">Undergarments</a></li>  
            </ul>
          </li>
        </ul>

            <button  class="custom-btn btn-3"><a  href="{{route('login')}}">Login </a></button> 
      </div>
    </div>
  </nav>
    

 