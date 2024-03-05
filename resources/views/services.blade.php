@extends('layouts.app')

@section('content')
<div id="service" class="services wow fadeIn">
    <div class="container">
       <div class="row">
           <div class="col">
            <center><h1>{{ config('app.name') }} Services</h1><hr>
            </center>
           </div>
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
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
             <div class="appointment-form">
                <h3><span>+</span> Book Appointment</h3>
                <div class="form">
                   <form action="/">
                      <fieldset>
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                               <div class="form-group">
                                  <input type="text" id="name" placeholder="Your Name"  />
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                               <div class="form-group">
                                  <input type="email" placeholder="Email Address" id="email" />
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                           <div class="row">
                              <div class="form-group">
                                    <input type="datetime-local" name="stime" placeholder="Set Time Of Appointment" wire:model.lazy="stime" class="form-control" />
                                    @error('stime') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                              </div>
                           </div>
                        </div>
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                               <div class="form-group">
                                  <select class="form-control">
                                     <option>Dine-in reservation</option>
                                     <option>Book whole cafe</option>
                                     <option>Birthday Party</option>
                                     <option>Other event</option>
                                  </select>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                               <div class="form-group">
                                  <textarea rows="4" id="textarea_message" class="form-control" placeholder="Reason for rental..."></textarea>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                               <div class="form-group">
                                  <div class="center"><button type="submit">Submit</button></div>
                               </div>
                            </div>
                         </div>
                      </fieldset>
                   </form>
                </div>
             </div>
          </div>
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
 </div>

@endsection
