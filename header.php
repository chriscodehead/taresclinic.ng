<div class="preloader">
 <div class="loader">
  <div class="loader-outter"></div>
  <div class="loader-inner"></div>
  <div class="indicator">
   <svg width="16px" height="12px">
    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
   </svg>
  </div>
 </div>
</div>

<header class="header">
 <div class="topbar">
  <div class="container">
   <div class="row">
    <div class="col-lg-6 col-md-5 col-12">

     <ul class="top-link">
      <li><a href="about">About</a></li>
      <li><a href="teams">Teams</a></li>
      <li><a href="contact">Contact</a></li>
      <li><a href="faq">FAQ</a></li>
     </ul>

    </div>
    <div class="col-lg-6 col-md-7 col-12">

     <ul class="top-contact">
      <li><i class="fa fa-phone"></i><a href="tel:<?php print $sitePhone; ?>"><?php print $sitePhone; ?></a></li>
      <li><i class="fa fa-envelope"></i><a href="mailto:<?php print $siteEmail; ?>"><span class="__cf_email__"><?php print $siteEmail; ?></span></a></li>
     </ul>

    </div>
   </div>
  </div>
 </div>

 <div class="header-inner">
  <div class="container">
   <div class="inner">
    <div class="row">
     <div class="col-lg-3 col-md-3 col-12">
      <div class="logo">
       <a href="./"><img src="img/logo.png" alt="#"></a>
      </div>
      <div class="mobile-nav"></div>

     </div>
     <div class="col-lg-7 col-md-9 col-12">

      <div class="main-menu">
       <nav class="navigation">
        <ul class="nav menu">
         <li class="<?php print @$active1 ?>"><a href="./">Home</a>
         </li>
         <li class="<?php print @$active2 ?>"><a href="#">About <i class="icofont-rounded-down"></i></a>
          <ul class="dropdown">
           <li><a href="about">About</a></li>
           <li><a href="team">Our team</a></li>
           <li><a href="faq">FAQs</a></li>
          </ul>
         </li>
         <li class="<?php print @$active3 ?>"><a href="#">Services <i class="icofont-rounded-down"></i></a>
          <ul class="dropdown">
           <li><a href="service">Our Service</a></li>
           <li><a href="schedules">Schedules</a></li>
           <li><a href="appointment">Appointment</a></li>
          </ul>
         </li>
         <li class="<?php print @$active4 ?>"><a href="gallery">Gallery </a></li>
         <li class="<?php print @$active5 ?>"><a href="#">Updates <i class="icofont-rounded-down"></i></a>
          <ul class="dropdown">
           <li><a href="blog">News/Events</a></li>
          </ul>
         </li>
         <li class="<?php print @$active6 ?>"><a href="contact">Contact Us</a></li>
        </ul>
       </nav>
      </div>

     </div>
     <div class="col-lg-2 col-12">
      <div class="get-quote">
       <a href="appointment" class="btn"> Appointment</a>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>

</header>

<style>
 .card {
  width: 100%;
  height: 300px;
  border: 1px solid #ccc;
  border-radius: 10px;
  overflow: hidden;
 }

 .card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
 }
</style>