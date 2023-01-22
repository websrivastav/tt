<?php include "header.php" ?>

     <!-- home section start -->
     <section class="cab-section flight-section p-0">
         <div class="cloud">
             <img src="assets/images/flights/cloud.png" alt="" class="bg-img" />
         </div>
         <div class="container">
             <div class="row">
                 <div class="col-lg-6">
                     <div class="cab-content">
                         <div>
                             <div class="top-cls">
                                #rica
                             </div>
                             <h2>great journey begins </h2>
                             <h3>with a small step </h3>
                             <form>
                                 <div class="form-group">
                                     <input type="text" class="form-control open-select" id="exampleInputEmail1" placeholder="from" />
                                     <img src="assets/images/icon/from.png" class="img-fluid blur-up lazyload" alt="" />
                                     <div class="selector-box">
                                         <h6 class="title">popular cities </h6>
                                         <ul>
                                             <li>
                                                 <a href="#">
                                                     <h5>paris, france </h5>
                                                     <h6>Charles de Gaulle Airport </h6>
                                                     <span>par </span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="#">
                                                     <h5>Dubai, UAE </h5>
                                                     <h6>Dubai International Airport </h6>
                                                     <span>DXB </span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="#">
                                                     <h5>london </h5>
                                                     <h6>Heathrow </h6>
                                                     <span>LHR </span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="#">
                                                     <h5>singapore, singapore </h5>
                                                     <h6>changi Airport </h6>
                                                     <span>par </span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="#">
                                                     <h5>vancouver, canada </h5>
                                                     <h6>vancouver International Airport </h6>
                                                     <span>par </span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="#">
                                                     <h5>sydney, australia </h5>
                                                     <h6>rose bay SPB </h6>
                                                     <span>rse </span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="#">
                                                     <h5>kuala lumpur, malaysia </h5>
                                                     <h6>sentral </h6>
                                                     <span>xkl </span>
                                                 </a>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <input type="text" class="form-control open-select" placeholder="to" />
                                     <img src="assets/images/icon/location.png" class="img-fluid blur-up lazyload" alt="" />
                                     <div class="selector-box">
                                         <h6 class="title">popular cities </h6>
                                         <ul>
                                             <li>
                                                 <a href="#">
                                                     <h5>paris, france </h5>
                                                     <h6>Charles de Gaulle Airport </h6>
                                                     <span>par </span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="#">
                                                     <h5>Dubai, UAE </h5>
                                                     <h6>Dubai International Airport </h6>
                                                     <span>DXB </span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="#">
                                                     <h5>london </h5>
                                                     <h6>Heathrow </h6>
                                                     <span>LHR </span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="#">
                                                     <h5>singapore, singapore </h5>
                                                     <h6>changi Airport </h6>
                                                     <span>par </span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="#">
                                                     <h5>vancouver, canada </h5>
                                                     <h6>vancouver International Airport </h6>
                                                     <span>par </span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="#">
                                                     <h5>sydney, australia </h5>
                                                     <h6>rose bay SPB </h6>
                                                     <span>rse </span>
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="#">
                                                     <h5>kuala lumpur, malaysia </h5>
                                                     <h6>sentral </h6>
                                                     <span>xkl </span>
                                                 </a>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="form-group row mb-0">
                                     <div class="col">
                                         <input placeholder="Depart Date" id="datepicker" />
                                     </div>
                                     <div class="col">
                                         <input placeholder="Return Date" id="datepicker1" />
                                     </div>
                                     <div class="col">
                                         <div class="form-group">
                                             <input type="text" class="form-control open-select" placeholder="traveler" />
                                             <img src="assets/images/icon/user.png" class="img-fluid blur-up lazyload" alt="" />
                                             <div class="selector-box-flight">
                                                 <div class="room-cls">
                                                     <div class="qty-box">
                                                         <label>adult </label>
                                                         <div class="input-group">
                                                             <button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""> -  </button>
                                                             <input type="text" name="quantity" class="form-control qty-input input-number" value="1" />
                                                             <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">+ </button>
                                                         </div>
                                                     </div>
                                                     <div class="qty-box">
                                                         <label>children </label>
                                                         <div class="input-group">
                                                             <button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""> -  </button>
                                                             <input type="text" name="quantity" class="form-control qty-input input-number" value="1" />
                                                             <button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""> +  </button>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="flight-class">
                                                     <div class="form-check">
                                                         <input class="form-check-input radio_animated" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked="" />
                                                         <label class="form-check-label" for="exampleRadios1">
                                                            economy
                                                         </label>
                                                     </div>
                                                     <div class="form-check">
                                                         <input class="form-check-input radio_animated" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" />
                                                         <label class="form-check-label" for="exampleRadios2">
                                                            premium
                                                         </label>
                                                     </div>
                                                     <div class="form-check">
                                                         <input class="form-check-input radio_animated" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" />
                                                         <label class="form-check-label" for="exampleRadios3">
                                                            business
                                                         </label>
                                                     </div>
                                                 </div>
                                                 <div class="bottom-part">
                                                     <a href="javascript:void(0)" class="btn">apply </a>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </form>
                             <form class="radio-form">
                                 <input id="radio-1" type="radio" name="gender" value="in city" checked="" />
                                 <label for="radio-1" class="radio-label">multi-city route </label>
                                 <input id="radio-2" type="radio" name="gender" value="out of city" />
                                 <label for="radio-2" class="radio-label">non stop flights </label>
                             </form>
                             <a href="#" class="btn btn-rounded color1">book now </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--  home section end -->


     <!-- destination section start -->
     <section class="blog_section destination-section section-b-space ratio_55">
         <div class="container">
             <div class="title-2">
                 <h2>Special <span>Offers </span></h2>
                 <p>Airofair.com is a prominent travel company that specializes in providing the finest ticketing and trip planning services.</p>
             </div>
             <div class="slide-3 no-arrow">
                 <div>
                     <div class="blog-wrap">
                         <div class="blog-image">
                             <div>
                                 <img src="assets/images/flights/destination/1.jpg" class="img-fluid blur-up lazyload bg-img" alt="" />
                             </div>
                         </div>
                         <div class="destination-details">
                             <div>
                                 <h5>france country </h5>
                                 <h2>paris </h2>
                                 <h6>Book Economy Class Return _____ 29 Apr 19 Lorem _____ is simply dummy text __ the
                                    printing industry. </h6>
                                 <a href="#" class="btn btn-rounded color2" data-bs-toggle="modal" data-bs-target="#myModal">Enquiry Now</a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div>
                     <div class="blog-wrap">
                         <div class="blog-image">
                             <div>
                                 <img src="assets/images/flights/destination/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="" />
                             </div>
                         </div>
                         <div class="destination-details">
                             <div>
                                 <h5>united kingdom </h5>
                                 <h2>london </h2>
                                 <h6>Book Economy Class Return _____ 29 Apr 19 Lorem _____ is simply dummy text __ the
                                    printing industry. </h6>
                                <a href="#" class="btn btn-rounded color2" data-bs-toggle="modal" data-bs-target="#myModal">Enquiry Now</a>
                            </div>
                         </div>
                     </div>
                 </div>
                 <div>
                     <div class="blog-wrap">
                         <div class="blog-image">
                             <div>
                                 <img src="assets/images/flights/destination/3.jpg" class="img-fluid blur-up lazyload bg-img" alt="" />
                             </div>
                         </div>
                         <div class="destination-details">
                             <div>
                                 <h5>switzerland </h5>
                                 <h2>zurich </h2>
                                 <h6>Book Economy Class Return _____ 29 Apr 19 Lorem _____ is simply dummy text __ the
                                    printing industry. </h6>
                                <a href="#" class="btn btn-rounded color2" data-bs-toggle="modal" data-bs-target="#myModal">Enquiry Now</a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div>
                     <div class="blog-wrap">
                         <div class="blog-image">
                             <div>
                                 <img src="assets/images/flights/destination/2.jpg" class="img-fluid blur-up lazyload bg-img" alt="" />
                             </div>
                         </div>
                         <div class="destination-details">
                             <div>
                                 <h5>united kingdom </h5>
                                 <h2>london </h2>
                                 <h6>Book Economy Class Return _____ 29 Apr 19 Lorem _____ is simply dummy text __ the
                                    printing industry. </h6>
                                <a href="#" class="btn btn-rounded color2" data-bs-toggle="modal" data-bs-target="#myModal">Enquiry Now</a>
                              </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- destination section end -->


     <!-- airlines detail section start -->
     <section class="pt-0 detail-section zig-zag-effect">
         <div class="cloud section-b-space section-t-space">
             <img src="assets/images/flights/cloud.png" alt="" class="bg-img" />
             <div class="container">
                 <div class="row">
                     <div class="col-md-4">
                         <div class="detail-box">
                             <div class="upper-part">
                                 <h2>LUXURY AND CONVENIENCE</h2>
                                 <h5>You will have the opportunity to travel in style and luxury. We make certain that you get the best possible experience on your flight with us.

</h5>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="detail-box">
                             <div class="upper-part">
                                 <h2>CONFIDENTIALITY AND SAFETY
</h2>
                                 <h5>To protect your safety while traveling, we make sure to follow all COVID requirements. We also ensure that none of your personal information is shared.

</h5>
                             </div>
                         </div>
                     </div>
                      <div class="col-md-4">
                         <div class="detail-box">
                             <div class="upper-part">
                                 <h2>PERSONAL CALENDAR
</h2>
                                 <h5>You won't have to worry about timetables when you work with us. After you make a reservation with us, we will keep you informed at every stage.

</h5>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- airlines detail section end -->


     <!-- flight routes section start -->
     <section class="routes-section ratio_landscape section-b-space">
         <div class="container">
             <div class="title-2">
                 <h2>Explore Amazing  <span>Destinations</span></h2>
                 <p>We at Flytoflights provide you with the most up-to-date air admissions as well as expert travel assistance. Examine a large number of fascinating objections with the best passages for all domestic and international flights. We have proof of a large number of satisfied customers all around the world to encourage you to book with Flytoflights.

</p>
             </div>
             <div class="row">
                 <div class="col-lg-3 col-6">
                     <div class="routes-box">
                         <a href="#" class="routes-img">
                             <img src="assets/images/flights/destination/4.jpg" alt="" class="img-fluid blur-up lazyload bg-img" />
                             <div class="price-round">
                                 <div>
                                     <h6><del>$500 </del></h6>
                                     <h3>$420 </h3>
                                 </div>
                             </div>
                             <div class="discount">
                                 <h6>-30% </h6>
                             </div>
                         </a>
                         <div class="routes-content">
                             <div class="top-bar">
                                 <a href="#">
                                     <h5>london to moscow </h5>
                                 </a>
                                 <h6>arrival : 20:30 </h6>
                             </div>
                             <div class="bottom-bar">
                                 <h6>departure : 14:20 </h6>
                                 <div class="rating">
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="far fa-star"></i>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-6">
                     <div class="routes-box">
                         <a href="#" class="routes-img">
                             <img src="assets/images/flights/destination/5.jpg" alt="" class="img-fluid blur-up lazyload bg-img" />
                             <div class="price-round">
                                 <div>
                                     <h6><del>$500 </del></h6>
                                     <h3>$420 </h3>
                                 </div>
                             </div>
                             <div class="discount">
                                 <h6>limited time </h6>
                             </div>
                         </a>
                         <div class="routes-content">
                             <div class="top-bar">
                                 <a href="#">
                                     <h5>milan to stockholm </h5>
                                 </a>
                                 <h6>arrival : 20:30 </h6>
                             </div>
                             <div class="bottom-bar">
                                 <h6>departure : 14:20 </h6>
                                 <div class="rating">
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="far fa-star"></i>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-6">
                     <div class="routes-box">
                         <a href="#" class="routes-img">
                             <img src="assets/images/flights/destination/6.jpg" alt="" class="img-fluid blur-up lazyload bg-img" />
                             <div class="price-round">
                                 <div>
                                     <h6><del>$500 </del></h6>
                                     <h3>$420 </h3>
                                 </div>
                             </div>
                             <div class="discount">
                                 <h6>-30% </h6>
                             </div>
                         </a>
                         <div class="routes-content">
                             <div class="top-bar">
                                 <a href="#">
                                     <h5>marid to prague </h5>
                                 </a>
                                 <h6>arrival : 20:30 </h6>
                             </div>
                             <div class="bottom-bar">
                                 <h6>departure : 14:20 </h6>
                                 <div class="rating">
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="far fa-star"></i>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-6">
                     <div class="routes-box">
                         <a href="#" class="routes-img">
                             <img src="assets/images/flights/destination/7.jpg" alt="" class="img-fluid blur-up lazyload bg-img" />
                             <div class="price-round">
                                 <div>
                                     <h6><del>$500 </del></h6>
                                     <h3>$420 </h3>
                                 </div>
                             </div>
                             <div class="discount">
                                 <h6>sunday </h6>
                             </div>
                         </a>
                         <div class="routes-content">
                             <div class="top-bar">
                                 <a href="#">
                                     <h5>humburg to paris </h5>
                                 </a>
                                 <h6>arrival : 20:30 </h6>
                             </div>
                             <div class="bottom-bar">
                                 <h6>departure : 14:20 </h6>
                                 <div class="rating">
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="far fa-star"></i>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- flight routes section end -->



     <!-- top destination section start -->
     <section class="pt-0 flight-detail  zig-zag-effect">
         <div class="cloud section-b-space section-t-space">
             <img src="assets/images/flights/cloud.png" alt="" class="bg-img" />
             <div class="container">
                 <div class="title-2">
                     <h2>Tracked down these incredible arrangements for your  <span>next trip</span></h2>
                 </div>
                 <div class="row">
                     <div class="col-12">
                         <div class="flight-box">
                             <div class="logo-section">
                                 <img src="assets/images/flights/logo.png" class="img-fluid blur-up lazyload" alt="" />
                             </div>
                             <div class="middle-section">
                                 <div class="flight-5 no-arrow">
                                     <div>
                                         <a href="#">
                                             <div class="flight-info">
                                                 <div>
                                                     <h4>australia </h4>
                                                     <h5>from $451 </h5>
                                                     <i class="fas fa-plane"></i>
                                                     <h6>35 airlines </h6>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <div>
                                         <a href="#">
                                             <div class="flight-info">
                                                 <div>
                                                     <h4>bahrain </h4>
                                                     <h5>from $610 </h5>
                                                     <i class="fas fa-plane"></i>
                                                     <h6>18 airlines </h6>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <div>
                                         <a href="#">
                                             <div class="flight-info">
                                                 <div>
                                                     <h4>china </h4>
                                                     <h5>from $621 </h5>
                                                     <i class="fas fa-plane"></i>
                                                     <h6>21 airlines </h6>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <div>
                                         <a href="#">
                                             <div class="flight-info">
                                                 <div>
                                                     <h4>egypt </h4>
                                                     <h5>from $480 </h5>
                                                     <i class="fas fa-plane"></i>
                                                     <h6>06 airlines </h6>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <div>
                                         <a href="#">
                                             <div class="flight-info">
                                                 <div>
                                                     <h4>india </h4>
                                                     <h5>from $320 </h5>
                                                     <i class="fas fa-plane"></i>
                                                     <h6>31 airlines </h6>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <div>
                                         <a href="#">
                                             <div class="flight-info">
                                                 <div>
                                                     <h4>australia </h4>
                                                     <h5>from $451 </h5>
                                                     <i class="fas fa-plane"></i>
                                                     <h6>35 airlines </h6>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                             <div class="name-section">
                                 <div>
                                     <h5>japan </h5>
                                     <h6>flights </h6>
                                     <a href="#" class="btn btn-rounded btn-sm color1" data-bs-toggle="modal" data-bs-target="#myModal">Enquiry Now</a>
                                 </div>
                             </div>
                         </div>
                         <div class="flight-box">
                             <div class="logo-section">
                                 <img src="assets/images/flights/logo2.png" class="img-fluid blur-up lazyload" alt="" />
                             </div>
                             <div class="middle-section">
                                 <div class="flight-5 no-arrow">
                                     <div>
                                         <a href="#">
                                             <div class="flight-info">
                                                 <div>
                                                     <h4>brazil </h4>
                                                     <h5>from $451 </h5>
                                                     <i class="fas fa-plane"></i>
                                                     <h6>35 airlines </h6>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <div>
                                         <a href="#">
                                             <div class="flight-info">
                                                 <div>
                                                     <h4>denmark </h4>
                                                     <h5>from $610 </h5>
                                                     <i class="fas fa-plane"></i>
                                                     <h6>18 airlines </h6>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <div>
                                         <a href="#">
                                             <div class="flight-info">
                                                 <div>
                                                     <h4>greece </h4>
                                                     <h5>from $621 </h5>
                                                     <i class="fas fa-plane"></i>
                                                     <h6>21 airlines </h6>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <div>
                                         <a href="#">
                                             <div class="flight-info">
                                                 <div>
                                                     <h4>iran </h4>
                                                     <h5>from $480 </h5>
                                                     <i class="fas fa-plane"></i>
                                                     <h6>06 airlines </h6>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <div>
                                         <a href="#">
                                             <div class="flight-info">
                                                 <div>
                                                     <h4>japan </h4>
                                                     <h5>from $320 </h5>
                                                     <i class="fas fa-plane"></i>
                                                     <h6>31 airlines </h6>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <div>
                                         <a href="#">
                                             <div class="flight-info">
                                                 <div>
                                                     <h4>australia </h4>
                                                     <h5>from $451 </h5>
                                                     <i class="fas fa-plane"></i>
                                                     <h6>35 airlines </h6>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                             <div class="name-section">
                                 <div>
                                     <h5>emirates </h5>
                                     <h6>flights </h6>
                                     <a href="#" class="btn btn-rounded btn-sm color1" data-bs-toggle="modal" data-bs-target="#myModal">Enquiry Now</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- top destination section end -->

<section class="menu-section section-b-space">
        <div class="container">
            <div class="title-1 title-5">
                <span class="title-label">rica</span>
                <h2>best deals</h2>
                <p>View all live offers for your flight bookings</p>
            </div>
            <div class="row">
                <div class="col">
                    <div class=" no-arrow slick-initialized slick-slider">
					<button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: inline-block;">Previous</button><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 5302px; transform: translate3d(-1446px, 0px, 0px);">
					<div class="slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" tabindex="-1" style="width: 442px;"><div><div style="width: 100%; display: inline-block;">
                            <div class="menu-box">
                                <div class="top-bar">
                                    <a href="#" tabindex="-1"><img src="assets/images/flights/offer/4.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                    <h2>american eagle</h2>
                                    <div class="decorate">american eagle</div>
                                </div>
                                <div class="bottom-bar">
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/9.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>dubai</h5>
                                            </a>
                                            <p>Dep: paris, london</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/10.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>new york</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/6.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>norway</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div></div>
						<div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" tabindex="-1" style="width: 442px;"><div><div style="width: 100%; display: inline-block;">
                            <div class="menu-box">
                                <div class="top-bar">
                                    <a href="#" tabindex="-1"><img src="assets/images/flights/offer/5.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                    <h2>Lufthansa</h2>
                                    <div class="decorate">Lufthansa</div>
                                </div>
                                <div class="bottom-bar">
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/8.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>paris</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/6.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>norway</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/10.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>new york</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div></div>
						<div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 442px;"><div><div style="width: 100%; display: inline-block;">
                            <div class="menu-box">
                                <div class="top-bar">
                                    <a href="#" tabindex="-1"><img src="assets/images/flights/offer/4.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                    <h2>american eagle</h2>
                                    <div class="decorate">american eagle</div>
                                </div>
                                <div class="bottom-bar">
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/9.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>dubai</h5>
                                            </a>
                                            <p>Dep: paris, london</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/10.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>new york</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/6.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>norway</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div></div>
						<div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 442px;"><div><div style="width: 100%; display: inline-block;">
                            <div class="menu-box">
                                <div class="top-bar">
                                    <img src="assets/images/flights/offer/3.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                    <h2>emirates</h2>
                                    <div class="decorate">emirates</div>
                                </div>
                                <div class="bottom-bar">
                                    <div class="menu-bar">
                                        <a href="#" tabindex="0"><img src="assets/images/flights/offer/6.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="0">
                                                <h5>norway</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="#" tabindex="0"><img src="assets/images/flights/offer/7.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="0">
                                                <h5>finland</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="#" tabindex="0"> <img src="assets/images/flights/offer/8.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="0">
                                                <h5>paris</h5>
                                            </a>
                                            <p>Dep: finland, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 442px;"><div><div style="width: 100%; display: inline-block;">
                            <div class="menu-box">
                                <div class="top-bar">
                                    <a href="#" tabindex="0"><img src="assets/images/flights/offer/4.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                    <h2>american eagle</h2>
                                    <div class="decorate">american eagle</div>
                                </div>
                                <div class="bottom-bar">
                                    <div class="menu-bar">
                                        <a href="#" tabindex="0"><img src="assets/images/flights/offer/9.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="0">
                                                <h5>dubai</h5>
                                            </a>
                                            <p>Dep: paris, london</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="#" tabindex="0"><img src="assets/images/flights/offer/10.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="0">
                                                <h5>new york</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="#" tabindex="0"><img src="assets/images/flights/offer/6.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="0">
                                                <h5>norway</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 442px;"><div><div style="width: 100%; display: inline-block;">
                            <div class="menu-box">
                                <div class="top-bar">
                                    <a href="#" tabindex="0"><img src="assets/images/flights/offer/5.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                    <h2>Lufthansa</h2>
                                    <div class="decorate">Lufthansa</div>
                                </div>
                                <div class="bottom-bar">
                                    <div class="menu-bar">
                                        <a href="#" tabindex="0"><img src="assets/images/flights/offer/8.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="0">
                                                <h5>paris</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="#" tabindex="0"><img src="assets/images/flights/offer/6.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="0">
                                                <h5>norway</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="#" tabindex="0"><img src="assets/images/flights/offer/10.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="0">
                                                <h5>new york</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 442px;"><div><div style="width: 100%; display: inline-block;">
                            <div class="menu-box">
                                <div class="top-bar">
                                    <a href="#" tabindex="-1"><img src="assets/images/flights/offer/4.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                    <h2>american eagle</h2>
                                    <div class="decorate">american eagle</div>
                                </div>
                                <div class="bottom-bar">
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/9.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>dubai</h5>
                                            </a>
                                            <p>Dep: paris, london</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/10.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>new york</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/6.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>norway</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="4" id="" aria-hidden="true" tabindex="-1" style="width: 442px;"><div><div style="width: 100%; display: inline-block;">
                            <div class="menu-box">
                                <div class="top-bar">
                                    <img src="assets/images/flights/offer/3.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                    <h2>emirates</h2>
                                    <div class="decorate">emirates</div>
                                </div>
                                <div class="bottom-bar">
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/6.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>norway</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/7.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>finland</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"> <img src="assets/images/flights/offer/8.jpg" class="img-fluid blur-up lazyloaded" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>paris</h5>
                                            </a>
                                            <p>Dep: finland, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" tabindex="-1" style="width: 442px;"><div><div style="width: 100%; display: inline-block;">
                            <div class="menu-box">
                                <div class="top-bar">
                                    <a href="#" tabindex="-1"><img src="assets/images/flights/offer/4.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                    <h2>american eagle</h2>
                                    <div class="decorate">american eagle</div>
                                </div>
                                <div class="bottom-bar">
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/9.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>dubai</h5>
                                            </a>
                                            <p>Dep: paris, london</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/10.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>new york</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/6.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>norway</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" tabindex="-1" style="width: 442px;"><div><div style="width: 100%; display: inline-block;">
                            <div class="menu-box">
                                <div class="top-bar">
                                    <a href="#" tabindex="-1"><img src="assets/images/flights/offer/5.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                    <h2>Lufthansa</h2>
                                    <div class="decorate">Lufthansa</div>
                                </div>
                                <div class="bottom-bar">
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/8.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>paris</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/6.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>norway</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/10.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>new york</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" tabindex="-1" style="width: 442px;"><div><div style="width: 100%; display: inline-block;">
                            <div class="menu-box">
                                <div class="top-bar">
                                    <a href="#" tabindex="-1"><img src="assets/images/flights/offer/4.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                    <h2>american eagle</h2>
                                    <div class="decorate">american eagle</div>
                                </div>
                                <div class="bottom-bar">
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/9.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>dubai</h5>
                                            </a>
                                            <p>Dep: paris, london</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/10.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>new york</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                    <div class="menu-bar">
                                        <a href="#" tabindex="-1"><img src="assets/images/flights/offer/6.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="content">
                                            <a href="#" tabindex="-1">
                                                <h5>norway</h5>
                                            </a>
                                            <p>Dep: paris, dubai</p>
                                            <h6><del>$250</del> $200</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: inline-block;">Next</button></div>
                </div>
            </div>
        </div>
    </section>
     <!-- subscribe section start -->
     <section class="subscribe-footer zig-zag-effect">
         <img src="assets/images/flights/footer-bg.jpg" class="bg-img img-fluid blur-up lazyload" alt="" />
         <div class="container">
             <div class="row">
                 <div class="col">
                     <div class="service-left">
                         <ul>
                             <li>
                                 <div class="service-box">
                                     <div class="icon">
                                         <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 476 476" style="enable-background:new 0 0 476 476;" xml:space="preserve">
                                             <g>
                                                 <path d="M400.85,181v-18.3c0-43.8-15.5-84.5-43.6-114.7c-28.8-31-68.4-48-111.6-48h-15.1c-43.2,0-82.8,17-111.6,48
		c-28.1,30.2-43.6,70.9-43.6,114.7V181c-34.1,2.3-61.2,30.7-61.2,65.4V275c0,36.1,29.4,65.5,65.5,65.5h36.9c6.6,0,12-5.4,12-12
		V192.8c0-6.6-5.4-12-12-12h-17.2v-18.1c0-79.1,56.4-138.7,131.1-138.7h15.1c74.8,0,131.1,59.6,131.1,138.7v18.1h-17.2
		c-6.6,0-12,5.4-12,12v135.6c0,6.6,5.4,12,12,12h16.8c-4.9,62.6-48,77.1-68,80.4c-5.5-16.9-21.4-29.1-40.1-29.1h-30
		c-23.2,0-42.1,18.9-42.1,42.1s18.9,42.2,42.1,42.2h30.1c19.4,0,35.7-13.2,40.6-31c9.8-1.4,25.3-4.9,40.7-13.9
		c21.7-12.7,47.4-38.6,50.8-90.8c34.3-2.1,61.5-30.6,61.5-65.4v-28.6C461.95,211.7,434.95,183.2,400.85,181z M104.75,316.4h-24.9
		c-22.9,0-41.5-18.6-41.5-41.5v-28.6c0-22.9,18.6-41.5,41.5-41.5h24.9V316.4z M268.25,452h-30.1c-10,0-18.1-8.1-18.1-18.1
		s8.1-18.1,18.1-18.1h30.1c10,0,18.1,8.1,18.1,18.1S278.25,452,268.25,452z M437.95,274.9c0,22.9-18.6,41.5-41.5,41.5h-24.9V204.8
		h24.9c22.9,0,41.5,18.6,41.5,41.5V274.9z"></path>
                                             </g>
                                         </svg>
                                     </div>
                                     <div class="detail">
                                         <div>
                                             <h5>call us </h5>
                                             <p>+91 123-456-7890 </p>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                             <li>
                                 <div class="service-box">
                                     <div class="icon">
                                         <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 486.025 486.025" style="enable-background:new 0 0 486.025 486.025;" xml:space="preserve">
                                             <g>
                                                 <g>
                                                     <path d="M420.725,85.413c-42.1-42.1-98.1-65.3-157.6-65.3c-60.6,0-117.3,23.9-159.6,67.3c-4.6,4.7-4.5,12.3,0.2,17
			c4.7,4.6,12.3,4.5,17-0.2c37.8-38.7,88.3-60,142.4-60c109.7-0.1,198.9,89.1,198.9,198.8s-89.2,198.9-198.9,198.9
			s-198.9-89.2-198.9-198.9v-2.5l19.8,19.8c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5c4.7-4.7,4.7-12.3,0-17l-40.2-40.3
			c-4.7-4.7-12.3-4.7-17,0l-40.3,40.3c-4.7,4.7-4.7,12.3,0,17s12.3,4.7,17,0l19.8-19.8v2.5c0,59.5,23.2,115.5,65.3,157.6
			s98.1,65.3,157.6,65.3s115.5-23.2,157.6-65.3s65.2-98.1,65.2-157.6S462.825,127.513,420.725,85.413z"></path>
                                                     <path d="M326.925,161.913l-147.4,147.3c-4.7,4.7-4.7,12.3,0,17c2.3,2.3,5.4,3.5,8.5,3.5s6.1-1.2,8.5-3.5l147.4-147.4
			c4.7-4.7,4.7-12.3,0-17C339.225,157.213,331.625,157.213,326.925,161.913z"></path>
                                                     <path d="M288.325,261.113c-16.7,16.7-16.7,44,0,60.7c8.1,8.1,18.9,12.6,30.4,12.6s22.3-4.5,30.4-12.6c16.7-16.7,16.7-44,0-60.7
			c-8.1-8.1-18.9-12.6-30.4-12.6C307.225,248.513,296.525,253.013,288.325,261.113z M332.125,304.913c-3.6,3.6-8.3,5.5-13.4,5.5
			s-9.8-2-13.4-5.5c-7.4-7.4-7.4-19.4,0-26.8c3.6-3.6,8.3-5.5,13.4-5.5s9.8,2,13.4,5.5
			C339.525,285.513,339.525,297.513,332.125,304.913z"></path>
                                                     <path d="M207.925,151.213c-11.5,0-22.3,4.5-30.4,12.6s-12.6,18.9-12.6,30.4s4.5,22.3,12.6,30.4s18.9,12.6,30.4,12.6
			s22.3-4.5,30.4-12.6c8.1-8.1,12.6-18.9,12.6-30.4s-4.5-22.3-12.6-30.4C230.125,155.713,219.425,151.213,207.925,151.213z
			 M221.325,207.613c-3.6,3.6-8.3,5.5-13.4,5.5s-9.8-2-13.4-5.5c-3.6-3.6-5.5-8.3-5.5-13.4c0-5.1,2-9.8,5.5-13.4
			c3.6-3.6,8.3-5.5,13.4-5.5s9.8,2,13.4,5.5c3.6,3.6,5.5,8.3,5.5,13.4C226.825,199.213,224.925,204.013,221.325,207.613z"></path>
                                                 </g>
                                             </g>
                                         </svg>
                                     </div>
                                     <div class="detail">
                                         <div>
                                             <h5>Email Us </h5>
                                             <p>info@gmail.com </p>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                             <li>
                                 <div class="service-box">
                                     <div class="icon">
                                         <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 483.3 483.3" style="enable-background:new 0 0 483.3 483.3;" xml:space="preserve">
                                             <g>
                                                 <g>
                                                     <path d="M424.3,57.75H59.1c-32.6,0-59.1,26.5-59.1,59.1v249.6c0,32.6,26.5,59.1,59.1,59.1h365.1c32.6,0,59.1-26.5,59.1-59.1
			v-249.5C483.4,84.35,456.9,57.75,424.3,57.75z M456.4,366.45c0,17.7-14.4,32.1-32.1,32.1H59.1c-17.7,0-32.1-14.4-32.1-32.1v-249.5
			c0-17.7,14.4-32.1,32.1-32.1h365.1c17.7,0,32.1,14.4,32.1,32.1v249.5H456.4z"></path>
                                                     <path d="M304.8,238.55l118.2-106c5.5-5,6-13.5,1-19.1c-5-5.5-13.5-6-19.1-1l-163,146.3l-31.8-28.4c-0.1-0.1-0.2-0.2-0.2-0.3
			c-0.7-0.7-1.4-1.3-2.2-1.9L78.3,112.35c-5.6-5-14.1-4.5-19.1,1.1c-5,5.6-4.5,14.1,1.1,19.1l119.6,106.9L60.8,350.95
			c-5.4,5.1-5.7,13.6-0.6,19.1c2.7,2.8,6.3,4.3,9.9,4.3c3.3,0,6.6-1.2,9.2-3.6l120.9-113.1l32.8,29.3c2.6,2.3,5.8,3.4,9,3.4
			c3.2,0,6.5-1.2,9-3.5l33.7-30.2l120.2,114.2c2.6,2.5,6,3.7,9.3,3.7c3.6,0,7.1-1.4,9.8-4.2c5.1-5.4,4.9-14-0.5-19.1L304.8,238.55z"></path>
                                                 </g>
                                             </g>
                                         </svg>
                                     </div>
                                     <div class="detail">
                                         <div>
                                             <h5>newsletter </h5>
                                             <p>scrambled it to make. </p>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                         </ul>
                     </div>
                     <div class="service-right">
                         <div class="input-group">
                             <input type="text" class="form-control" placeholder="Enter your email" aria-label="Recipient's username" />
                             <div class="input-group-append">
                                 <button class="btn btn-subscribe" type="button" id="button-addon">subscribe </button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- subscribe section end -->


     <!-- footer section start -->
    <?php include "footer.php" ?>