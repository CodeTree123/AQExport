@include('website.component.headers')

<div class="mt-5">

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="">
        <div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset ('assets/img/website_assets/h_slider_1.jpg')}}" class="d-block w-100 img-fluid carousel-item-image" alt="...">
                        <div class="carousel-caption fw-bold  p-4 rounded d-md-block text-white  carousel-item-text  mx-auto ">

                            <h2> A Q Export</h2>
                            <p class="my-3">NEVER COMPROMISE WITH QUALITY.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset ('assets/img/website_assets/h_slider_2.jpg')}}" class="d-block w-100 img-fluid carousel-item-image" alt="...">
                        <div class="carousel-caption fw-bold  p-4 rounded d-md-block text-white  carousel-item-text mx-auto">

                            <h2> A Q Export</h2>
                            <p class="my-3">NEVER COMPROMISE WITH QUALITY.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset ('assets/img/website_assets/h_slider_3.jpg')}}" class="d-block w-100 img-fluid carousel-item-image" alt="...">
                        <div class="carousel-caption fw-bold  p-4 rounded d-md-block text-white  carousel-item-text  mx-auto">

                            <h2> A Q Export</h2>
                            <p class="my-3">NEVER COMPROMISE WITH QUALITY.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset ('assets/img/website_assets/h_slider_4.jpg')}}" class="d-block w-100 img-fluid carousel-item-image" alt="...">
                        <div class="carousel-caption fw-bold  p-4 rounded d-md-block text-white  carousel-item-text mx-auto">

                            <h2> A Q Export</h2>
                            <p class="my-3">NEVER COMPROMISE WITH QUALITY.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset ('assets/img/website_assets/h_slider_5.jpg')}}" class="d-block w-100 img-fluid carousel-item-image" alt="...">
                        <div class="carousel-caption fw-bold   p-4 rounded d-md-block text-white  carousel-item-text mx-auto">

                            <h2> A Q Export</h2>
                            <p class="my-3">NEVER COMPROMISE WITH QUALITY.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <div class="bg-control p-2 rounded-circle">
                             <i class=" fa-xl  fa-solid fa-angle-left "></i> 
                        </div>
                    <!-- <span class="carousel-control-prev-icon  " aria-hidden="true"> </span> -->
                    <!-- <span class="visually-hidden">Previous</span> -->
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <div class="bg-control p-2 rounded-circle">
                             <i class=" fa-xl  fa-solid fa-angle-right "></i> 
                        </div> 
                    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span> -->
                </button>
            </div>
        </div>
        <div class="container position-relative hero-card">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12"  data-aos="fade-up" data-aos-delay="100">
                    <div class=" icon-box     rounded  bg-dark text-white">
                        <div class="icon text-center">
                            <i class="fa-solid fa-scissors"></i>
                        </div>
                        
                        <h4 class="title">Design as Per Requirement</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 my-lg-0 my-md-0 my-sm-3 my-3"  data-aos="fade-up" data-aos-delay="200">
                    <div class=" icon-box     rounded  bg-dark text-white">
                        <div class="icon text-center"> 
                            <i class="fa-solid fa-check-double"></i>
                        </div>
                        <h4 class="title">Ensure Quality</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12"  data-aos="fade-up" data-aos-delay="300">
                    <div class=" icon-box     rounded  bg-dark text-white">
                        <div class="icon text-center"> 
                            <i class="fa-solid fa-ship"></i>
                        </div>
                        <h4 class="title">On Time Shipment</h4>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End Hero Section -->


    <section class=" our_working_procedure my-5">
        <div class="text-center text-white green_banner py-5 mt-0" data-aos="fade-up">
            <h1>
                Our Working Procedure
            </h1>
        </div>
        <div class="container">
            <img class="img-fluid" src="{{ asset ('assets/img/website_assets/procedure.png')}}" alt="" data-aos="zoom-in" data-aos-delay="200">
        </div>
    </section>
    <section class=" our_working_strategy my-3">
        <div class="text-center text-white green_banner py-5 mt-0" data-aos="fade-up">
            <h1>
                Our Working Strategy
            </h1>
        </div>
        <div class="container mt-5">

            <div class=" d-lg-flex d-md-flex d-sm-flex d-flex  flex-lg-row flex-md-row     flex-sm-column flex-column align-items-center">
                <div class="step_box d-flex flex-lg-row flex-md-column flex-sm-column flex-column align-items-center  ps-lg-0 ps-md-0 ps-sm-0 ps-0 text-center my-lg-0 my-md-0 my-sm-4 my-4 " data-aos="zoom-in" data-aos-delay="100">
                    <div class="step_box_container">
                        <img class="img-fluid" src="{{ asset ('assets/img/website_assets/1_working_strategy.png')}}" alt="" width="60">
                        <p class="fw-bold text-center">File Management ( Both Hardcopy and Softcopy )</p>
                    </div>
                    <i class=" strategy_icon m-3 fa-solid fa-2xl fa-arrow-right"></i>
                </div>

                <div class="step_box d-flex flex-lg-row flex-md-column flex-sm-column flex-column align-items-center ps-lg-0 ps-md-0 ps-sm-0 ps-0 text-center my-lg-0 my-md-0 my-sm-4 my-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="step_box_container">
                        <img class="img-fluid" src="{{ asset ('assets/img/website_assets/2_working_strategy.png')}}" alt="" width="60">
                        <p class="fw-bold text-center">Pre Planning Technical Path</p>
                    </div>

                    <i class=" strategy_icon m-3 fa-solid fa-2xl fa-arrow-right"></i>
                </div>

                <div class="step_box d-flex flex-lg-row flex-md-column flex-sm-column flex-column align-items-center ps-lg-0 ps-md-0 ps-sm-0 ps-0 text-center my-lg-0 my-md-0 my-sm-4 my-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="step_box_container">
                        <img class="img-fluid" src="{{ asset ('assets/img/website_assets/3_working_strategy.png')}}" alt="" width="60">
                        <p class="fw-bold text-center">Following the Technical Path by management</p>
                    </div>
                    <i class=" strategy_icon m-3 fa-solid fa-2xl fa-arrow-right"></i>
                </div>

                <div class="step_box d-flex flex-lg-row flex-md-column flex-sm-column flex-column align-items-center ps-lg-0 ps-md-0 ps-sm-0 ps-0 text-center my-lg-0 my-md-0 my-sm-4 my-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="step_box_container">
                        <img class="img-fluid" src="{{ asset ('assets/img/website_assets/4_working_strategy.png')}}" alt="" width="60">
                        <p class="fw-bold text-center">Everyday Production Report monitoring</p>
                    </div>
                    <i class=" strategy_icon m-3 fa-solid fa-2xl fa-arrow-right"></i>
                </div>

                <div class="step_box d-flex flex-lg-row flex-md-column flex-sm-column flex-column align-items-center ps-lg-0 ps-md-0 ps-sm-0 ps-0 text-center my-lg-0 my-md-0 my-sm-4 my-4" data-aos="zoom-in" data-aos-delay="500">
                    <div class="step_box_container">
                        <img class="img-fluid" src="{{ asset ('assets/img/website_assets/5_working_strategy.png')}}" alt="" width="60">
                        <p class="fw-bold text-center">Hourly Quality check</p>
                    </div>
                    <i class=" strategy_icon m-3 fa-solid fa-2xl fa-arrow-right"></i>
                </div>

                <div class="step_box d-flex flex-lg-row flex-md-column flex-sm-column flex-column align-items-center ps-lg-0 ps-md-0 ps-sm-0 ps-0 text-center my-lg-0 my-md-0 my-sm-4 my-4" data-aos="zoom-in" data-aos-delay="600">
                    <div class="step_box_container">
                        <img class="img-fluid" src="{{ asset ('assets/img/website_assets/6_working_strategy.png')}}" alt="" width="60">
                        <p class="fw-bold text-center">Final Inspection & Shipment</p>
                    </div>
                </div>

            </div>
        </div>


    </section>

    <section class=" our_sourcing_and_supplier my-3">
        <div class="text-center text-white green_banner py-5 mt-0" data-aos="fade-up">
            <h1>
                Sourcing and Supplier
            </h1>
        </div>
        <div class="container mt-5">
            <div class="row row1 ">
                <div class="col-lg-3 col-md-3 col-sm-12 col-12 " data-aos="zoom-in" data-aos-delay="200">
                    <div class="text-center ">
                        <div class="our_sourcing_and_supplier_box">
                            <img class="img-fluid rounded our_sourcing_and_supplier_img_one" src="{{ asset ('assets/img/website_assets/fabric_sourcing_and_supply.png')}}" alt="">
                            <p class=" our_sourcing_and_supplier_text fw-bold my-4">FABRIC</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12" data-aos="zoom-in" data-aos-delay="300">
                    <div class="text-center">
                        <div class="our_sourcing_and_supplier_box">
                            <img class="img-fluid rounded our_sourcing_and_supplier_img_one" src="{{ asset ('assets/img/website_assets/sweing_thread_sourcing_and_supply.png')}}" alt="">
                            <p class=" our_sourcing_and_supplier_text fw-bold my-4">SWEING THREAD</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12" data-aos="zoom-in" data-aos-delay="400">
                    <div class="text-center">
                        <div class="our_sourcing_and_supplier_box">
                            <img class="img-fluid rounded our_sourcing_and_supplier_img_one" src="{{ asset ('assets/img/website_assets/trims_sourcing_and_supply.png')}}" alt="">
                            <p class=" our_sourcing_and_supplier_text fw-bold my-4">TRIMS</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-12" data-aos="zoom-in" data-aos-delay="500">
                    <div class="text-center">
                        <div class="our_sourcing_and_supplier_box">
                            <img class="img-fluid rounded our_sourcing_and_supplier_img_one" src="{{ asset ('assets/img/website_assets/accessories_sourcing_and_supply.png')}}" alt="">
                            <p class=" our_sourcing_and_supplier_text fw-bold my-4">ACCESSORIES</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row mb-5 row2">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12" data-aos="zoom-in" data-aos-delay="600">
                    <div class="text-center ">
                        <div class="our_sourcing_and_supplier_box">
                            <img class="img-fluid rounded our_sourcing_and_supplier_img_two" src="{{ asset ('assets/img/website_assets/embroidery_sourcing_and_supply.png')}}" alt="">
                            <p class=" our_sourcing_and_supplier_text fw-bold my-4">EMBROIDERY</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12" data-aos="zoom-in" data-aos-delay="700">
                    <div class="text-center ">
                        <div class="our_sourcing_and_supplier_box">
                            <img class="img-fluid rounded our_sourcing_and_supplier_img_two" src="{{ asset ('assets/img/website_assets/printing_sourcing_and_supply.png')}}" alt="">
                            <p class=" our_sourcing_and_supplier_text fw-bold my-4">PRINTING</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12" data-aos="zoom-in" data-aos-delay="800">
                    <div class="text-center ">
                        <div class="our_sourcing_and_supplier_box">
                            <img class="img-fluid rounded our_sourcing_and_supplier_img_two" src="{{ asset ('assets/img/website_assets/cnf_and_forwarder_sourcing_and_supply.png')}}" alt="">
                            <p class=" our_sourcing_and_supplier_text fw-bold my-4">CNF & FORWARDER</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-team my-5">
        <div class="">
            <div class="text-center text-white green_banner py-5 mt-0" data-aos="fade-up" data-aos-delay="100">
                <h1>
                    Our Team Members
                </h1>
            </div> 
             
            
            <div class=" ">
                <div class="row justify-content-center my-3 mx-0">
                    
                    <div class="col-lg-2 col-md-5 col-sm-12 col-12 my-lg-0 my-md-3 my-sm-3 my-3 mx-lg-0 mx-md-3 mx-sm-3 mx-3 ">
                        <div class="border rounded p-3 h-100  team-card"  data-aos="fade-up" data-aos-delay="100">
                            <div class="team_image rounded-circle"> 
                              <img src="{{ asset ('assets/img/website_assets/team/member-1.jpg')}}" alt="" class="img-fluid rounded-circle">
                            </div>
                            <div class="team_info text-center my-3">
                                <div class="team_title text-center">
                                    <h5 class="">MD. TAREQUL ISLAM</h5> 
                                </div>
                                <div class="team_position text-center">
                                    <span class="speciality">MANAGING DIRECTOR</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-5 col-sm-12 col-12 my-lg-0 my-md-3 my-sm-3 my-3 mx-lg-0 mx-md-3 mx-sm-3 mx-3 ">
                        <div class="border rounded p-3 h-100  team-card" data-aos="fade-up" data-aos-delay="150">
                            <div class="team_image rounded-circle"> 
                              <img src="{{ asset ('assets/img/website_assets/team/member-2.jpg')}}" alt="" class="img-fluid rounded-circle">
                            </div>
                            <div class="team_info text-center my-3">
                                <div class="team_title text-center">
                                    <h5 class="">MOHAMMAD SHAHIDUL ISLAM BABU</h5>
                                </div>
                                <div class="team_position text-center">
                                    <span class="speciality"> DIRECTOR</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-5 col-sm-12 col-12 my-lg-0 my-md-3 my-sm-3 my-3 mx-lg-0 mx-md-3 mx-sm-3 mx-3 ">
                        <div class="border rounded p-3 h-100  team-card" data-aos="fade-up" data-aos-delay="200">
                            <div class="team_image rounded-circle"> 
                              <img src="{{ asset ('assets/img/website_assets/team/member-3.jpg')}}"  alt="" class="img-fluid rounded-circle">
                            </div>
                            <div class="team_info text-center my-3">
                                <div class="team_title text-center">
                                    <h5 class="">FARJANA NIPUN</h5> 
                                </div>
                                <div class="team_position text-center">
                                    <span class="speciality"> DIRECTOR</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-5 col-sm-12 col-12 my-lg-0 my-md-3 my-sm-3 my-3 mx-lg-0 mx-md-3 mx-sm-3 mx-3 ">
                        <div class="border rounded p-3 h-100  team-card" data-aos="fade-up" data-aos-delay="250">
                            <div class="team_image rounded-circle"> 
                              <img src="{{ asset ('assets/img/website_assets/team/member-4.jpg')}}"   alt="" class="img-fluid rounded-circle">
                            </div>
                            <div class="team_info text-center my-3">
                                <div class="team_title text-center">
                                    <h5 class="">Mahfujul Islam</h5> 
                                </div>
                                <div class="team_position text-center">
                                    <span class="speciality"> Director</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-5 col-sm-12 col-12 my-lg-0 my-md-3 my-sm-3 my-3 mx-lg-0 mx-md-3 mx-sm-3 mx-3 ">
                        <div class="border rounded p-3 h-100 team-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="team_image rounded-circle"> 
                              <img src="{{ asset ('assets/img/website_assets/team/member-5.jpg')}}"   alt="" class="img-fluid rounded-circle">
                            </div>
                            <div class="team_info text-center my-3">
                                <div class="team_title text-center">
                                    <h5 class="">MD. Sajjad Hossain</h5> 
                                </div>
                                <div class="team_position text-center">
                                    <span class="speciality"> Director</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="text-center text-white green_banner py-5 mt-0" data-aos="fade-up">
            <h1>
                Our Client Review
            </h1>
        </div> 
        <div class="container   my-5 testimonial_section_container" data-aos="fade-up">
            <div class="row justify-content-center buyer_review_box_container mx-3"> 

                <div class="col-lg-8 col-md-8 col-sm-12 col-12   ">
                    <div class="border buyer_review_box  rounded p-3 shadow-lg">
                        <div class="revieweer_image text-center ">
                            <img src="{{ asset ('assets/img/website_assets/testimonial/testimonial-1.jpg')}}" alt="" class="testimonial_img img-fluid  ">
                        </div>
                        <div class="text-center">
                            <div class="reviewer_name fw-bolder py-2">
                                <h4>Robert</h4>
                            </div>
                            <div class="reviewer py-2 fw-bold">
                                <h5>Buyer</h5>
                            </div>
                            <div class="review py-2 fw-semibold">
                                <h6 class="fst-italic">
                                   "They are very energetic, Have a Great Team for quality product and on time Shipment. "
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="border  buyer_review_box rounded p-3">
                        <div class="revieweer_image text-center "> 
                            <img src="{{ asset ('assets/img/website_assets/testimonial/testimonial-2.jpg')}}" alt="" class="testimonial_img img-fluid  ">
                        </div>
                        <div class="text-center">
                            <div class="reviewer_name fw-bolder py-2">
                                <h4>Mohammad Hannan</h4>
                            </div>
                            <div class="reviewer py-2 fw-bold">
                                <h5>Buyer</h5>
                            </div>
                            <div class="review py-2 fw-semibold">
                                <h6 class="fst-italic">
                                   "Very Energetic Team, Quick Response, Always make sure the best quality product delivered."
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="border buyer_review_box rounded p-3 ">
                        <div class="revieweer_image text-center ">
                            <img src="{{ asset ('assets/img/website_assets/testimonial/testimonial-3.jpg')}}" alt="" class="testimonial_img img-fluid  ">
                        </div>
                        <div class="text-center">
                            <div class="reviewer_name fw-bolder py-2">
                                <h4>Mohammad Salem</h4>
                            </div>
                            <div class="reviewer py-2 fw-bold">
                                <h5>Buyer</h5>
                            </div>
                            <div class="review py-2 fw-semibold">
                                <h6 class="fst-italic">
                                   "A Q Export give us a Excellent customer service, Quality 10 on 10, Delivery on time, hope to deal with you again."
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> 

</div>
@include('website.component.certificate')

@include('website.component.footers')
<script>
    AOS.init();
</script>
<script>
    $('.buyer_review_box_container').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
//   autoplay: true,
//   autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 960,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>
<script>
    $(".slick-slide img").css("display", "inline");
    $(".buyer_review_box").hover(function(){
        $(".review").addClass("review_hovered");
    },function(){
        $(".review").removeClass("review_hovered");

    });
</script>
  
<script>
        $(".team-card").hover(function(){ 
        $(this).children(".team_image").children("img").addClass("team_image_border");
            $(this).css({"background":"#000","color":"#fff"});
        },function(){
            $(this).children(".team_image").children("img").removeClass("team_image_border");

            $(this).css({"background":"#fff","color":"#000"});


        });
</script>