@include('website.component.headers')
   
    <div class="px-4 mt-5  text-center gallery_banner"> 
         <h1 class="display-5 fw-bold text-white py-5">Contact Us</h1> 
    </div>
    <section class="contact_section container my-5 shadow" >
        <div class="row p-4
        ">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="contact_section_info text-center">
                  <i class="fa-solid fa-location-dot fa-2xl mx-auto"></i>
                  <h4 class="my-4">Bangladesh Office</h4>
                  <p>House: 31, Road : 01, Sector : 09, Flat : 5-A, Uttara, Dhaka - 1230, Bangladesh</p>

                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="contact_section_info text-center">           
                     <i class="fa-solid fa-mobile-screen-button fa-2xl mx-auto"></i> 
                  <h4 class="my-4">Call Us</h4>
                  <p>+880 174 22 78 255</p>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="contact_section_info text-center">           
                <i class="fa-solid fa-envelope fa-2xl mx-auto"></i>
                  <h4 class="my-4">Email Us</h4>
                  <p>info@aqexport.com</p>

                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="contact_section_info text-center">
                  <i class="fa-solid fa-location-dot fa-2xl mx-auto"></i>
                  <h4 class="my-4">UK Office</h4>
                  <p>71 Cannington Road, Dagenham, Essex, RM9 4BE, UK.</p>
                  <p>Phone: +44 7951 7849275</p>

                </div>

            </div>
        </div>

    </section>
    <section class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="map">

                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.415971721424!2d90.39417621429942!3d23.874863989928624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c53b80cfc563%3A0xd35bf94332ca45aa!2sA%20Q%20Export!5e0!3m2!1sen!2sbd!4v1661167695800!5m2!1sen!2sbd" width="100%" height="450" style="border:2;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div>
                        <h3 class="text-center my-5">Leave Us a comment</h3>

                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        <form action="{{route('contact_us_mail')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col">
                                <div class="form-floating">
                                    <input type="text" class="form-control custom-form-control" id="Name" placeholder="Password" name="name" value="{{ old('name') }}">
                                    <label for="Name">Name</label>
                                </div>
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                                </div>
                                <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control custom-form-control" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}">
                                    <label for="email">Email address</label>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                                </div>
                            </div>

                            <div class="form-floating">
                            <textarea class="form-control custom-form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="message">{{ old('message') }}</textarea>
                            <label for="floatingTextarea2">Comments</label>
                            </div>
                            @if ($errors->has('message'))
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                            @endif

                            <div class="my-4 w-100">
    <button type="submit" class="btn btn-success mb-3  w-100">Submit </button>
  </div>
                        </form>
                    </div>
            </div>
        </div>
    </section>

    



@include('website.component.footers')
