<?php
require_once('include.php');
$active2 = 'active';
$title = 'About | ' . $siteName . ' and Maternity Hospital';
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
      <h2>About Us</h2>
      <ul class="bread-list">
       <li><a href="./">Home</a></li>
       <li><i class="icofont-simple-right"></i></li>
       <li class="active">About Us</li>
      </ul>
     </div>
    </div>
   </div>
  </div>
 </div>


 <section class="about-area section" style="padding: 0;">
  <div class="container-fluid p-0">
   <div class="row m-0">
    <div class="col-lg-6 col-md-12 p-0">
     <div class="">
      <img src="img/afro-doctors-consulting-young-adult-hospital-ward.jpg" alt="#">
     </div>
    </div>
    <div class="col-lg-6 col-md-12 p-0">
     <div class="about-content">
      <span>About Us</span>
      <h2>Short Story About <?php print $siteName; ?> Since 1983</h2>
      <p>Established in 1983 by Dr. Peter Esangbedo, <?php print $siteName; ?> and Maternity Hospital has been a beacon of quality and affordable healthcare services. Since our inception, we have prioritized patient care, ensuring that every individual receives the attention and compassion they deserve. Our commitment to excellence has earned us a reputation as a world-class healthcare services provider.</p>
      <ul>
       <li><i class="icofont-tick-mark"></i> Compassionate Patient-Centered Care</li>
       <li><i class="icofont-tick-mark"></i> Excellence in Healthcare Delivery</li>
       <li><i class="icofont-tick-mark"></i> Integrity and Professionalism</li>
       <li><i class="icofont-tick-mark"></i> Innovation for Better Health</li>
       <li><i class="icofont-tick-mark"></i> Teamwork and Collaboration</li>
       <li><i class="icofont-tick-mark"></i> Continuous Improvement Culture</li>
      </ul>
     </div>
    </div>
   </div>
  </div>
 </section>


 <section class="our-vision-area ptb-100 pt-0">
  <div class="container">
   <div class="row">
    <div class="col-lg-4 col-md-6 col-12">
     <div class="single-vision-box">
      <div class="icon">
       <i class="icofont-tick-mark"></i>
      </div>
      <h3>Our Vision</h3>
      <p>Our vision is to revolutionize healthcare in Nigeria by building upon our strengths of personalized care. We envision a future where every individual has access to high-quality healthcare services that are tailored to their needs and delivered with compassion and expertise. Through innovation and dedication, we are committed to regenerating healthcare and improving the well-being of our community.</p>
     </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12">
     <div class="single-vision-box">
      <div class="icon">
       <i class="icofont-tick-mark"></i>
      </div>
      <h3>Our Patient-Centric Approach</h3>
      <p>At <?php print $siteName; ?>, we believe in putting our patients first. We take the time to listen and understand their needs, pains, thoughts, and feelings. This patient-centric approach guides everything we do, from diagnosis to treatment, ensuring that each person receives personalized care tailored to their unique circumstances.</p>
     </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12">
     <div class="single-vision-box">
      <div class="icon">
       <i class="icofont-tick-mark"></i>
      </div>
      <h3>State-of-the-Art Facilities</h3>
      <p>Equipped with advanced medical technology and facilities, <?php print $siteName; ?> and Maternity Hospital ensures accurate diagnosis and effective treatment. Our state-of-the-art infrastructure enables us to deliver the highest standards of healthcare while maintaining a comfortable and welcoming environment for our patients.</p>
     </div>
    </div>
   </div>
  </div>
 </section>


 <section class="our-mission-area ptb-100 pt-0">
  <div class="container-fluid p-0">
   <div class="row m-0">
    <div class="col-lg-6 col-md-12 p-0">
     <div class="our-mission-content">
      <span class="sub-title">We are the best</span>
      <h3>Join Us in Your Health Journey</h3>
      <p>Experience healthcare excellence at <?php print $siteName; ?> and Maternity Hospital. Whether you're seeking routine check-ups or specialized medical care, trust our dedicated team to prioritize your health and well-being. Join us as we work towards regenerating healthcare in Nigeria and beyond.

      </p>
      <ul>
       <li>
        <div class="icon">
         <i class="icofont-doctor"></i>
        </div>
        <span>Emergency Medical Care:</span>
        In urgent situations, rely on our skilled team for prompt and effective emergency medical assistance.
       </li>
       <li>
        <div class="icon">
         <i class="icofont-kid"></i>
        </div>
        <span>Pharmacy Services</span>
        Access a wide range of medications and pharmaceutical products at our fully stocked pharmacy, managed by knowledgeable professionals.
       </li>
       <!-- <li>
        <div class="icon">
         <i class="icofont-laboratory"></i>
        </div>
        <span>Chronic Disease Management</span>
        Receive specialized care and support for chronic conditions such as diabetes, hypertension, and asthma, helping you manage your health effectively.
       </li>
       <li>
        <div class="icon">
         <i class="icofont-tooth"></i>
        </div>
        <span>Laboratory Services</span>
        Benefit from our comprehensive laboratory facilities, offering a range of diagnostic tests and screenings for precise healthcare assessments.
       </li> -->
      </ul>
     </div>
    </div>

    <div class="col-lg-6 col-md-12 p-0">
     <div class="">
      <img src="img/group-african-paramedic-ambulance-emergency-crew-doctors.jpg" />
     </div>
    </div>

   </div>
  </div>
 </section>

 <?php require_once('footer.php'); ?>