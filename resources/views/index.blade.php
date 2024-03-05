@extends('layouts.app')
@section('content')
<div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.2" style="background-image:url('images/slider-bg.png'); opacity:0.9;" {{ $app = App\Models\settings::latest()->first() }}>
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12">
            <div class="text-contant">
               <h2>
                  <span class="center"><span class="icon"><img src="{{ config('app.url') }}images/haneul.png" alt="#" /></span></span>
                  <a href="" class="typewrite" data-period="2000" data-type='[ "Welcome to Haneul Cafe", "Looking for a Place?", "We are your Solution!" ]'>
                  <span class="wrap"></span>
                  </a>
               </h2>
            </div>
         </div>
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<!-- end section -->
<div id="time-table" class="time-table-section">
   <div class="container">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time one" style="background:#9c5410;">
               <span class="info-icon"><i class="fa fa-birthday-cake" aria-hidden="true"></i></span>
               <h3>Event</h3>
               <p>We provide venue rental services for events such as birthday party, engagement, etc.</p>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time middle" style="background:#582710;">
               <span class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
               <h3>Working Hours</h3>
               <div class="time-table-section">
                  <ul>
                     <li><span class="left">Monday</span><span class="right">Close</span></li>
                     <li><span class="left">Tuesday - Sunday</span><span class="right">10.00 AM – 10.00 PM</span></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
         <div class="row">
            <div class="service-time three" style="background:#823f20;">
               <span class="info-icon"><i class="fa fa-building-o" aria-hidden="true"></i></span>
               <h3>Space</h3>
               <p> Our place can accommodate up to 250 people.</p>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="about" class="section wow fadeIn">
   <div class="container">
      <div class="heading">
         <h2>Haneul Cafe, KLCC</h2>
      </div>
      <!-- end title -->
      <div class="row">
         <div class="col-md-6">
            <div class="message-box">
               <h4>What We Do</h4>
               <h2>Rental Service</h2>
               <p class="lead">Haneul Cafe KLCC is a hidden gem along Jalan Bangkung in Bangsar and we guarantee you, 
                  it will be a real gastronomical journey for those who wish to host their event here as every dish prepared 
                  will tantalize your taste buds. The Dining Room comfortably seats up to 250 pax.</p>
               <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn More</a>
            </div>
            <!-- end messagebox -->
         </div>
         <!-- end col -->
         <div class="col-md-6">
            <div class="post-media wow fadeIn">
               <img src="images/slider-bg.png" alt="" class="img-responsive">
               <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
            </div>
            <!-- end media -->
         </div>
         <!-- end col -->
      </div>
      <!-- end row -->
      <hr class="hr1">
      <div class="row">
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/slider-bg.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/slider-bg.png" alt="" class="img-responsive">
               </div>
               <h3>Hall Rental for Event</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/service-02.jpeg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/service-02.jpeg" alt="" class="img-responsive">
               </div>
               <h3>Dine-In</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/service-03.jpeg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/service-03.jpeg" alt="" class="img-responsive">
               </div>
               <h3>Cozy Book Cafe Experience</h3>
            </div>
            <!-- end service -->
         </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-widget">
               <div class="post-media wow fadeIn">
                  <a href="images/slider-bg.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                  <img src="images/slider-bg.png" alt="" class="img-responsive">
               </div>
               <h3>Hall Rental for Event</h3>
            </div>
            <!-- end service -->
         </div>
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<div id="service" class="services wow fadeIn">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
             <div class="inner-services">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon1.png" alt="#" /></span>
                      <h4>BEST FOOD</h4>
                      <p>Our food is served by a great chef.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon2.png" alt="#" /></span>
                      <h4>BOOKS</h4>
                      <p>Cozy book cafe experience with you partners.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon3.png" alt="#" /></span>
                      <h4>MONEY GUARANTEED</h4>
                      <p>We offer premium services with affordable price.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon4.png" alt="#" /></span>
                      <h4>Strategic</h4>
                      <p>Our location is strategic.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon5.png" alt="#" /></span>
                      <h4>TIME</h4>
                      <p>We operate according to your time.</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                   <div class="serv">
                      <span class="icon-service"><img src="images/service-icon6.png" alt="#" /></span>
                      <h4>PREMIUM FACILITIES</h4>
                      <p>Big space with premium facilities.</p>
                   </div>
                </div>
             </div>
          </div>
          @livewire('appointmentform')
       </div>
    </div>
 </div>
 <!-- end section -->

<div id="testimonials" class="section wb wow fadeIn">
   <div class="container">
      <div class="heading">
         <h2>Feedback</h2>
      </div>
      <!-- end title -->
      <div class="row">
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> Amazing Hyunsuk cse thanks to this wonderful team!</h3>
                  <p class="lead">They prepared a lot of freebies, booth for the fans.</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_01.png" alt="" class="img-responsive alignleft">
                  <h4>Chris Chan</h4>
               </div>
               <!-- end testi-meta -->
            </div>
            <!-- end testimonial -->
         </div>
         <!-- end col -->
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> Thanks for the amazing birthday party!</h3>
                  <p class="lead">Successful birthday party for my mom. I love it so much! Balloons and confetti everywhere.</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_02.png" alt="" class="img-responsive alignleft">
                  <h4>Hong Joshua</h4>
               </div>
               <!-- end testi-meta -->
            </div>
            <!-- end testimonial -->
         </div>
         <!-- end col -->
      </div>
      <!-- end row -->
      <hr class="invis">
      <div class="row">
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> The amazing hall and wonderful support!</h3>
                  <p class="lead">They have got my engagement party on time with experienced & professional team.</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_03.png" alt="" class="img-responsive alignleft">
                  <h4>Ariana Grande</h4>
               </div>
               <!-- end testi-meta -->
            </div>
            <!-- end testimonial -->
         </div>
         <!-- end col -->
         <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
            <div class="testimonial clearfix">
               <div class="desc">
                  <h3><i class="fa fa-quote-left"></i> Wonderful experience</h3>
                  <p class="lead">Thank you to the team for throwing an amazing cupsleve event for our super king cow baby, So Junghwan.</p>
               </div>
               <div class="testi-meta">
                  <img src="images/testi_01.png" alt="" class="img-responsive alignleft">
                  <h4>Hunny Nannna </h4>
               </div>
               <!-- end testi-meta -->
            </div>
            <!-- end testimonial -->
         </div>
         <!-- end col -->
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</div>
<!-- end section -->
<div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
   <div class="container">
      <div class="heading">
         <h2>Get in Touch</h2>
      </div>
   </div>
@livewire('contactus')
</div>

@endsection
