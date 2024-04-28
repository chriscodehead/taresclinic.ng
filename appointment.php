<?php
require_once('include.php');
$title = 'Appointment | ' . $siteName . ' and Maternity Hospital';
$description = $siteName . ' and Maternity Hospital offers compassionate healthcare services, including maternity care, general medicine, pediatric care, women`s health, and surgical services. Our experienced team is committed to providing personalized care to every patient.';
$keyword = 'Maternity hospital, Healthcare services, Maternity care, General medicine, Pediatric care, Women`s health, Surgical services, Compassionate care, Experienced team, Personalized healthcare';
require_once('head.php'); ?>

<body>
 <?php require_once('header.php'); ?>


 <div class="breadcrumbs overlay">
  <div class="container">
   <div class="bread-inner">
    <div class="row">
     <div class="col-12">
      <h2>Get Your Appointment</h2>
      <ul class="bread-list">
       <li><a href="./">Home</a></li>
       <li><i class="icofont-simple-right"></i></li>
       <li class="active">Appointment</li>
      </ul>
     </div>
    </div>
   </div>
  </div>
 </div>


 <section class="appointment single-page">
  <div class="container">
   <div class="row">
    <div class="col-lg-7 col-md-12 col-12">
     <div class="appointment-inner">
      <div class="title">
       <h3>Book your appointment</h3>
       <p>We will confirm your appointment within 2 hours</p>
      </div>
      <form class="form" method="post" enctype="multipart/form-data" action="">
       <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
         <div class="form-group">
          <input name="name" id="name" type="text" placeholder="Name">
         </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
         <div class="form-group">
          <input name="email" id="email" type="email" placeholder="Email">
         </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
         <div class="form-group">
          <input name="phone" id="phone" type="text" placeholder="Phone">
         </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
         <div class="form-group">
          <input name="department" id="department" type="text" placeholder="Department">
         </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
         <div class="form-group">
          <input name="doctor" id="doctor" type="text" placeholder="Doctor">
         </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
         <div class="form-group">
          <input type="text" name="datepicker" placeholder="Date" id="datepicker">
         </div>
        </div>
        <div class="col-lg-12 col-md-12 col-12">
         <div class="form-group">
          <textarea name="message" id="message" placeholder="Write Your Message Here....."></textarea>
         </div>
        </div>
       </div>
       <div class="row">
        <div class="col-12">
         <div class="form-group">
          <div class="button">
           <button type="button" onclick="appointmentMail()" class="btn">Book An Appointment</button>
          </div>
         </div>
        </div>
       </div>
      </form>
     </div>
    </div>
    <div class="col-lg-5 col-md-12 ">
     <div class="work-hour">
      <h3>Working Hours</h3>
      <ul class="time-sidual">
       <li class="day">Monday - Friday <span>24/7</span></li>
       <li class="day">Saturday - Sunday <span>24/7</span></li>
      </ul>
     </div>
    </div>
   </div>
  </div>
 </section>

 <?php require_once('footer.php'); ?>