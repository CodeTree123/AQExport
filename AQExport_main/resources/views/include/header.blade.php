<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Q Export</title>
    <link rel="icon" type="image/x-icon" href="{{ asset ('assets/img/a_q_export_logo_icon.png')}}">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset ('assets/css/style.css')}}"> 
</head>
<body class="mx-3  ">
    <div class="container">
    <header class="p-3 mb-3 border-bottom ">
        <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="{{route('product_details')}}" class="d-flex align-items-center mb-2 mb-lg-0 me-5 text-dark text-decoration-none">
            <img src="{{ asset ('assets/img/a_q_export_logo.png')}}" alt="" width="100">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li>
                    <a href="/" class="nav-link px-2 link-dark">Website</a>
                </li>
                <li>
                    <a href="{{route('products',[$user->id])}}" class="nav-link px-2 link-dark">Ship Out Goods</a>
                </li>
                @if($user->role_id == 1)
                <li>
                    <a href="{{route('product_add_form')}}" class="nav-link px-2 link-dark">Add Order</a>
                </li>
                @endif
                <li>
                    <a href="{{route('product_details')}}" class="nav-link px-2 link-dark">Order List</a>
                </li>
                @if($user->role_id == 1)
                <li>
                    <a href="{{route('buyer_list')}}" class="nav-link px-2 link-dark">Buyer List</a>
                </li>
                <li>
                    <a href="{{route('user_list')}}" class="nav-link px-2 link-dark">User List</a>
                </li>
                @endif
                <!-- <a href="#" class="nav-link px-2  link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Add People</a>
                    <ul class="dropdown-menu text-small"> 
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul> -->

                <!-- <a href="#" class="nav-link px-2  link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                    <ul class="dropdown-menu text-small"> 
                        <li><a class="dropdown-item" href="{{route('product_details',[$user->id])}}">Product List</a></li>
                        @if($user->role_id == 1)
                        <li><a class="dropdown-item" href="{{route('product_add_form')}}">Add Product</a></li>
                        @endif
                    </ul> -->
            </ul> 
            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user"></i>
                </a>
                <ul class="dropdown-menu text-small">
                    <!-- <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li> -->
                    <li><a class="dropdown-item" href="{{route('logout')}}">Log out</a></li>
                </ul>
            </div>
        </div>
        </div>
    </header>