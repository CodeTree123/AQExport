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

   <link rel="stylesheet" href="{{ asset ('assets/css/slick.css')}}"> 

    <link rel="stylesheet" href="{{ asset ('assets/css/slick-theme.css')}}">

    <link href="{{ asset ('assets/css/aos.css')}}" rel="stylesheet"> 
   <!-- <link href="{{ asset ('assets/css/bootstrap.min.css')}}" rel="stylesheet">  -->

  <link href=" {{ asset ('assets/css/main.css')}}" rel="stylesheet">
   
   <link rel="stylesheet" href="{{ asset ('assets/css/website_style.css')}}"> 

   

</head>
  <body>

<div class="bg-light fixed-top shadow">

  <div class="container">

  <nav class="navbar navbar-expand-lg  " aria-label="Fourth navbar example">
    <div class="container-fluid">

        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
          <div class="main_logo">
            <img src="{{ asset ('assets/img/a_q_export_logo.png')}}" alt="" width="100" >
          </div> 
        </a> 

      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbarsExample04"  >
        <ul class="navbar-nav me-auto mb-2 mb-md-0 navbar-nav-scroll">
          <li class="nav-item">
            <a class="nav-link fw-bold active" aria-current="page" href="/">Home</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" href="{{route('about_us')}}">About Us</a>
          </li> 
          <li class="nav-item dropdown">
            <a class="nav-link fw-bold dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Catalouge</a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item fw-semibold" href="{{url('/gallery')}}">Gallery</a></li>  
              <li><a class="dropdown-item fw-semibold" href="{{url('/knit_wear')}}">Knit Wear</a></li>  
              <li><a class="dropdown-item fw-semibold" href="{{url('/woven_wear')}}">Woven Wear</a></li>  
              <li><a class="dropdown-item fw-semibold" href="{{url('/denim_wear')}}">Denim Wear</a></li>  
              <li><a class="dropdown-item fw-semibold" href="{{url('/winter_wear')}}">Winter Wear</a></li>  
              <li><a class="dropdown-item fw-semibold" href="{{url('/new_production_ss_2022')}}">New Production SS 2022</a></li>  
              <li><a class="dropdown-item fw-semibold" href="{{url('/leather')}}">Leather</a></li>  
              <li><a class="dropdown-item fw-semibold" href="{{url('/undergarments')}}">Undergarments</a></li>  
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" href="{{route('contact_us')}}">Contact Us</a>
          </li>  
        </ul>
            @if(Session::has('loginId'))
            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user"></i>
                </a>
                <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="{{route('product_details')}}">System</a></li>
                    <li><a class="dropdown-item" href="{{route('logout')}}">Log out</a></li>
                </ul>
            </div>
            @else
            <button  class="custom-btn btn-3"><a  href="{{route('login')}}">Login</a></button> 
            @endif
      </div>
    </div>
  </nav>


  
  </div>
</div>  



  