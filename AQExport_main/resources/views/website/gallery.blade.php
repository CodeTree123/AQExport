@include('website.component.headers')


<div class="mt-5">
    <div class="container">
        <div class="row my-5">
            <h1 class="text-center my-5">Our Product Gallery</h1>

            <div class="col-lg-2 col-md-2 custom-col-lg-2 custom-col-md-2 col-sm-12 my-lg-0 my-md-0 my-sm-4 my-4" data-aos="fade-down"
                  data-aos-easing="linear"
                  data-aos-duration="500">

                <a href="{{url('/knit_wear')}}">
                    <div class="category_name_container">
                    <img class="img-fluid image" src="{{ asset ('assets/img/website_assets/gallery/knit_wear.png')}}" alt=""  style="width:100%">  
    
                        <div class="middle">
                            <div class="text fw-bold">Knit Wear</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 custom-col-lg-2 custom-col-md-2 col-sm-12 my-lg-0 my-md-0 my-sm-4 my-4" data-aos="fade-down"
                  data-aos-easing="linear"
                  data-aos-duration="800">
                  
                <a href="{{url('/woven_wear')}}">
                <div class="category_name_container">
                <img class="img-fluid image" src="{{ asset ('assets/img/website_assets/gallery/woven_wear.png')}}" alt=""  style="width:100%">  
 
                    <div class="middle">
                        <div class="text fw-bold">Woven Wear</div>
                    </div>

                </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 custom-col-lg-2 custom-col-md-2 col-sm-12 my-lg-0 my-md-0 my-sm-4 my-4" data-aos="fade-down"
                  data-aos-easing="linear"
                  data-aos-duration="1000">
                  
                <a href="{{url('/denim_wear')}}">
                <div class="category_name_container">
                <img class="img-fluid image" src="{{ asset ('assets/img/website_assets/gallery/denim_wear.png')}}" alt=""  style="width:100%">  
 
                    <div class="middle">
                        <div class="text fw-bold">Denim Wear</div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 custom-col-lg-2 custom-col-md-2 col-sm-12 my-lg-0 my-md-0 my-sm-4 my-4" data-aos="fade-down"
                  data-aos-easing="linear"
                  data-aos-duration="1200">
                  
                <a href="{{url('/winter_wear')}}">
                <div class="category_name_container">
                <img class="img-fluid image" src="{{ asset ('assets/img/website_assets/gallery/winter_wear.png')}}" alt=""  style="width:100%">  
 
                    <div class="middle">
                        <div class="text fw-bold">Winter Wear</div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 custom-col-lg-2 custom-col-md-2 col-sm-12 my-lg-0 my-md-0 my-sm-4 my-4" data-aos="fade-down"
                  data-aos-easing="linear"
                  data-aos-duration="1400">
                  
                <a href="{{url('/new_production_ss_2022')}}">
                <div class="category_name_container">
                <img class="img-fluid image" src="{{ asset ('assets/img/website_assets/gallery/new_production_ss_2022.png')}}" alt=""  style="width:100%">  
 
                    <div class="middle">
                        <div class="text fw-bold">New Production SS 2022</div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 custom-col-lg-2 custom-col-md-2 col-sm-12 my-lg-5 my-md-5 my-sm-4 my-4" data-aos="fade-down"
                  data-aos-easing="linear"
                  data-aos-duration="1400"> 
                  
                <a href="{{url('/leather')}}">
                <div class="category_name_container">
                <img class="img-fluid image" src="{{ asset ('assets/img/website_assets/gallery/leather.png')}}" alt=""  style="width:100%">  
 
                    <div class="middle">
                        <div class="text fw-bold">Leather</div>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 custom-col-lg-2 custom-col-md-2 col-sm-12 my-lg-5 my-md-5 my-sm-4 my-5" data-aos="fade-down"
                  data-aos-easing="linear"
                  data-aos-duration="1400">
                  
                <a href="{{url('/undergarments')}}">
                <div class="category_name_container">
                <img class="img-fluid image" src="{{ asset ('assets/img/website_assets/gallery/undergarments.png')}}" alt=""  style="width:100%">  
 
                    <div class="middle">
                        <div class="text fw-bold">Undergarments</div>
                    </div>
                </div>
                </a>
            </div>
            
        </div>
    </div>
</div>
   

@include('website.component.footers')

<script>
  AOS.init(); 
</script>