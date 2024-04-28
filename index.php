<?php
require_once('include.php');
$active1 = 'active';
$title = 'Welcome to ' . $siteName . ' and Maternity Hospital';
$description = $siteName . ' and Maternity Hospital offers compassionate healthcare services, including maternity care, general medicine, pediatric care, women`s health, and surgical services. Our experienced team is committed to providing personalized care to every patient.';
$keyword = 'Maternity hospital, Healthcare services, Maternity care, General medicine, Pediatric care, Women`s health, Surgical services, Compassionate care, Experienced team, Personalized healthcare';
require_once('head.php'); ?>

<body>
 <?php require_once('header.php'); ?>

 <section class="slider">
  <div class="hero-slider">

   <div class="single-slider" style="background-image:url('img/woman-medic-wearing-stethoscope-red-uniform.jpg')">
    <div class="container">
     <div class="row">
      <div class="col-lg-7">
       <div class="text">
        <h1>Welcome to <span><?php print $siteName; ?></span> and Maternity <span>Hospital!</span></h1>
        <p>Access specialized medical care with confidence. Our expert team offers a range of services designed to address your unique healthcare needs. </p>
        <div class="button">
         <a href="appointment" class="btn">Get Appointment</a>
         <a href="about" class="btn primary">Learn More</a>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>


   <div class="single-slider" style="background-image:url('img/female-doctor-wearing-mask-writes-clipboard.jpg')">
    <div class="container">
     <div class="row">
      <div class="col-lg-7">
       <div class="text">
        <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
        <p>Invest in your health and well-being with our wellness programs. Discover personalized strategies to achieve optimal health and vitality. </p>
        <div class="button">
         <a href="appointment" class="btn">Get Appointment</a>
         <a href="about" class="btn primary">About Us</a>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>


   <div class="single-slider" style="background-image:url('img/top-view-mother-laying-bed-with-baby.jpg')">
    <div class="container">
     <div class="row">
      <div class="col-lg-7">
       <div class="text">
        <h1>We Provide <span>Maternity Care</span> Services That You Can <span>Trust!</span></h1>
        <p>From prenatal consultations to postnatal care, we offer comprehensive maternity services to support mothers and their newborns. </p>
        <div class="button">
         <a href="appointment" class="btn">Get Appointment</a>
         <a href="contact" class="btn primary">Conatct Now</a>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>

  </div>
 </section>


 <section class="schedule">
  <div class="container">
   <div class="schedule-inner">
    <div class="row">
     <div class="col-lg-4 col-md-6 col-12 ">

      <div class="single-schedule first">
       <div class="inner">
        <div class="icon">
         <i class="fa fa-ambulance"></i>
        </div>
        <div class="single-content">
         <span>Trust us</span>
         <h4>Emergency Cases</h4>
         <p>Urgent care for critical situations. Trust us for prompt and expert attention when you need us.</p>
         <a href="about">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
        </div>
       </div>
      </div>
     </div>
     <div class="col-lg-4 col-md-6 col-12">

      <div class="single-schedule middle">
       <div class="inner">
        <div class="icon">
         <i class="icofont-prescription"></i>
        </div>
        <div class="single-content">
         <span>Reliable</span>
         <h4>Doctors Timetable</h4>
         <p>View our doctors' schedules. Plan appointments with ease for your convenience.</p>
         <a href="appointment">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
        </div>
       </div>
      </div>
     </div>
     <div class="col-lg-4 col-md-12 col-12">

      <div class="single-schedule last">
       <div class="inner">
        <div class="icon">
         <i class="icofont-ui-clock"></i>
        </div>
        <div class="single-content">
         <span>Active 24/7</span>
         <h4>Opening Hours</h4>
         <ul class="time-sidual">
          <li class="day">Monday - Friday <span>24/7</span></li>
          <li class="day">Saturday - Sunday <span>24/7</span></li>
         </ul>
         <a href="schedules">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>


 <section class="Feautes section">
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
     <div class="section-title">
      <h2>We Are Always Ready to Help You & Your Family</h2>
      <img src="img/section-img.png" alt="#">
      <p>Ready to assist you and your family. <?php print $siteName; ?> and Maternity Hospital offers compassionate care and support for all.</p>
     </div>
    </div>
   </div>
   <div class="row">
    <div class="col-lg-4 col-12">

     <div class="single-features">
      <div class="signle-icon">
       <i class="icofont icofont-ambulance-cross"></i>
      </div>
      <h3>Emergency Help</h3>
      <p>Urgent assistance for critical situations. Rapid response when every second counts.</p>
     </div>

    </div>
    <div class="col-lg-4 col-12">

     <div class="single-features">
      <div class="signle-icon">
       <i class="icofont icofont-medical-sign-alt"></i>
      </div>
      <h3>Enriched Pharmecy</h3>
      <p>Enhanced pharmacy services for your health needs. Quality medications guaranteed.</p>
     </div>

    </div>
    <div class="col-lg-4 col-12">

     <div class="single-features last">
      <div class="signle-icon">
       <i class="icofont icofont-stethoscope"></i>
      </div>
      <h3>Medical Treatment</h3>
      <p>Expert medical care tailored to your needs. Comprehensive treatment options.</p>
     </div>

    </div>
   </div>
  </div>
 </section>


 <div id="fun-facts" class="fun-facts section overlay">
  <div class="container">
   <div class="row">
    <div class="col-lg-3 col-md-6 col-12">

     <div class="single-fun">
      <i class="icofont icofont-home"></i>
      <div class="content">
       <span class="counter">346</span>
       <p>Hospital Rooms</p>
      </div>
     </div>

    </div>
    <div class="col-lg-3 col-md-6 col-12">

     <div class="single-fun">
      <i class="icofont icofont-user-alt-3"></i>
      <div class="content">
       <span class="counter">557</span>
       <p>Specialist Doctors</p>
      </div>
     </div>

    </div>
    <div class="col-lg-3 col-md-6 col-12">

     <div class="single-fun">
      <i class="icofont-simple-smile"></i>
      <div class="content">
       <span class="counter">4379</span>
       <p>Happy Patients</p>
      </div>
     </div>

    </div>
    <div class="col-lg-3 col-md-6 col-12">

     <div class="single-fun">
      <i class="icofont icofont-table"></i>
      <div class="content">
       <span class="counter">32</span>
       <p>Years of Experience</p>
      </div>
     </div>

    </div>
   </div>
  </div>
 </div>


 <section class="why-choose section">
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
     <div class="section-title">
      <h2>We Offer Different Services To Improve Your Health</h2>
      <img src="img/section-img.png" alt="#">
      <p>Discover varied health services. <?php print $siteName; ?> and Maternity Hospital provides personalized care to enhance your overall well-being.</p>
     </div>
    </div>
   </div>
   <div class="row">
    <div class="col-lg-6 col-12">

     <div class="choose-left">
      <h3>Who We Are</h3>
      <p>Established in 1983 by Dr. Peter Esangbedo, <?php print $siteName; ?> and Maternity Hospital has been a beacon of quality and affordable healthcare services. Since our inception, we have prioritized patient care, ensuring that every individual receives the attention and compassion they deserve. Our commitment to excellence has earned us a reputation as a world-class healthcare services provider. </p>
      <div class="row">
       <div class="col-lg-6">
        <ul class="list">
         <li><i class="fa fa-caret-right"></i>Accountability for Results. </li>
         <li><i class="fa fa-caret-right"></i>Innovation for Better Health. </li>
         <li><i class="fa fa-caret-right"></i>Integrity and Professionalism.</li>
        </ul>
       </div>
       <div class="col-lg-6">
        <ul class="list">
         <li><i class="fa fa-caret-right"></i>Teamwork and Collaboration.</li>
         <li><i class="fa fa-caret-right"></i>Continuous Improvement.</li>
         <li><i class="fa fa-caret-right"></i>Excellence in Healthcare Delivery.</li>
        </ul>
       </div>
      </div>
     </div>

    </div>
    <div class="col-lg-6 col-12">

     <div class="choose-right">
      <div class="video-image">

       <div class="promo-video">
        <div class="waves-block">
         <div class="waves wave-1"></div>
         <div class="waves wave-2"></div>
         <div class="waves wave-3"></div>
        </div>
       </div>

       <!-- <a href="https://www.youtube.com/watch?v=RFVXy6CRVR4" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a> -->
      </div>
     </div>

    </div>
   </div>
  </div>
 </section>


 <section class="call-action overlay" data-stellar-background-ratio="0.5">
  <div class="container">
   <div class="row">
    <div class="col-lg-12 col-md-12 col-12">
     <div class="content">
      <h2>Do you need Emergency Medical Care? Call @ <?php print $sitePhone; ?></h2>
      <p>Facing a medical emergency? Contact us immediately for swift and expert medical assistance.</p>
      <div class="button">
       <a href="contact" class="btn">Contact Now</a>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>


 <section class="portfolio section">
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
     <div class="section-title">
      <h2>We Maintain Cleanliness Rules Inside Our Hospital</h2>
      <img src="img/section-img.png" alt="#">
      <p>Strict cleanliness standards upheld. Experience a hygienic environment at <?php print $siteName; ?> and Maternity Hospital for your peace of mind.</p>
     </div>
    </div>
   </div>
  </div>
  <div class="container-fluid">
   <div class="row">
    <div class="col-lg-12 col-12">
     <div class="owl-carousel portfolio-slider">

      <?php $sql = query_sql("SELECT * FROM $gallery_tb ORDER BY id DESC LIMIT 12");
      if (mysqli_num_rows($sql) > 0) {
       $c = 0;
       while ($row = mysqli_fetch_assoc($sql)) { ?>

        <div class="single-pf card">
         <img src="<?php print 'photo/' . $row['image']; ?>" alt="#">
        </div>

       <?php $c++;
       }
      } else { ?>
       <h4 style="padding: 20px;">No updates found!</h4>
      <?php } ?>

     </div>
    </div>
   </div>
  </div>
 </section>


 <section class="services section">
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
     <div class="section-title">
      <h2>We Offer Different Services To Improve Your Health</h2>
      <img src="img/section-img.png" alt="#">
      <p>Explore our diverse health services. <?php print $siteName; ?> and Maternity Hospital provides comprehensive care to enhance your well-being.</p>
     </div>
    </div>
   </div>
   <div class="row">
    <div class="col-lg-4 col-md-6 col-12">

     <div class="single-service">
      <i class="icofont icofont-prescription"></i>
      <h4>General Treatment</h4>
      <p>Our experienced physicians provide diagnosis and treatment for a wide range of medical conditions, ensuring optimal health for our patients.</p>
     </div>

    </div>
    <div class="col-lg-4 col-md-6 col-12">

     <div class="single-service">
      <i class="icofont icofont-baby"></i>
      <h4>Maternity Care</h4>
      <p>From prenatal consultations to postnatal care, we offer comprehensive maternity services to support mothers and their newborns.</p>
     </div>

    </div>
    <div class="col-lg-4 col-md-6 col-12">

     <div class="single-service">
      <i class="icofont icofont-heart-alt"></i>
      <h4>Pediatric Care</h4>
      <p>We understand the unique healthcare needs of children and provide specialized pediatric services in a child-friendly environment. </p>
     </div>

    </div>
    <div class="col-lg-4 col-md-6 col-12">

     <div class="single-service">
      <i class="icofont icofont-listening"></i>
      <h4>Women's Health</h4>
      <p>Our dedicated team offers gynecological services and screenings to promote women's health and well-being. </p>
     </div>

    </div>
    <div class="col-lg-4 col-md-6 col-12">

     <div class="single-service">
      <i class="icofont icofont-eye-alt"></i>
      <h4>Surgical Services</h4>
      <p>With state-of-the-art surgical facilities, we perform a variety of surgical procedures with precision and care. </p>
     </div>

    </div>
    <div class="col-lg-4 col-md-6 col-12">

     <div class="single-service">
      <i class="icofont icofont-blood"></i>
      <h4>Pharmacy Services</h4>
      <p>Access a wide range of medications and pharmaceutical products at our fully stocked pharmacy, managed by knowledgeable professionals. </p>
     </div>

    </div>
   </div>
   <center><a href="services" class="btn">Explore More</a></center>
  </div>
 </section>


 <section class="section testimonials overlay" data-stellar-background-ratio="0.5">
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
     <div class="section-title">
      <h2>What Our Patients Say About Our Medical Treatments</h2>
      <img src="img/section-img2.png" alt="#">
     </div>
    </div>
   </div>
   <div class="row">
    <div class="col-lg-12 col-12">
     <div class="owl-carousel testimonial-slider">

      <div class="single-testimonial">
       <img src="img/female-avatar.svg" alt="#">
       <p>I received excellent care during my pregnancy journey at <?php print $siteName; ?>. The doctors were attentive and supportive every step of the way.</p>
       <h4 class="name">Mrs Joy</h4>
      </div>


      <div class="single-testimonial">
       <img src="img/avatar.png" alt="#">
       <p>The surgical team at <?php print $siteName; ?> exceeded my expectations. I felt confident and well-cared for throughout my procedure. </p>
       <h4 class="name">Mr Adebayo</h4>
      </div>


      <div class="single-testimonial">
       <img src="img/avatar.png" alt="#">
       <p>I'm grateful for the personalized treatment I received for my chronic condition. The doctors at <?php print $siteName; ?> helped me manage my health effectively.</p>
       <h4 class="name">Mr Azuka</h4>
      </div>


      <div class="single-testimonial">
       <img src="img/female-avatar.svg" alt="#">
       <p><?php print $siteName; ?> provides top-notch pediatric care. My children feel comfortable and cared for during their visits. </p>
       <h4 class="name">Mrs Osita</h4>
      </div>


      <div class="single-testimonial">
       <img src="img/female-avatar.svg" alt="#">
       <p>The emergency medical team at <?php print $siteName; ?> acted swiftly and saved my life. I can't thank them enough for their professionalism and expertise. </p>
       <h4 class="name">Miss Maria</h4>
      </div>


      <div class="single-testimonial">
       <img src="img/avatar.png" alt="#">
       <p>The pharmacy services at <?php print $siteName; ?> are reliable and convenient. I always find what I need, and the staff is friendly and helpful. </p>
       <h4 class="name">Mr Michael</h4>
      </div>


      <div class="single-testimonial">
       <img src="img/female-avatar.svg" alt="#">
       <p>I've been a patient at <?php print $siteName; ?> for years, and I've always received top-notch medical care. The staff goes above and beyond to ensure my health needs are met. </p>
       <h4 class="name">Miss Lisa</h4>
      </div>


      <div class="single-testimonial">
       <img src="img/avatar.png" alt="#">
       <p>My experience with <?php print $siteName; ?> was exceptional. The doctors listened to my concerns and provided me with personalized treatment options. I highly recommend their services. </p>
       <h4 class="name">Mr Mark</h4>
      </div>

     </div>
    </div>
   </div>
  </div>
 </section>


 <div class="doctor-details-area section">
  <div class="container">
   <div class="row">
    <div class="col-lg-5">
     <div class="doctor-details-item doctor-details-left">
      <img src="img/portrait-nurse-scrubs-clinic.jpg" alt="#" />
     </div>
    </div>
    <div class="col-lg-7">
     <div class="doctor-details-item">
      <div class="doctor-details-right">
       <div class="doctor-details-biography">
        <h3>Why Choose <?php print $siteName; ?> and Maternity Hospital</h3>
        <ul style="list-style: circle;">
         <li>
          Experienced and Caring Staff: Our team of healthcare professionals is dedicated to providing exceptional care with empathy and respect.</li>
         <li>
          State-of-the-Art Facilities: We are equipped with advanced medical technology to ensure accurate diagnosis and effective treatment.
         </li>
         <li>
          Comprehensive Services: From routine check-ups to specialized medical procedures, we offer a wide range of healthcare services under one roof.
         </li>
        </ul>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>


 <section id="team" class="team section overlay" data-stellar-background-ratio="0.5">
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
     <div class="section-title">
      <h2>We Have Specialist Doctors To Solve Your Problems</h2>
      <img src="img/section-img2.png" alt="#">
      <p>Specialist doctors ready to address your concerns. Trust <?php print $siteName; ?> and Maternity Hospital for expert medical solutions tailored to you.</p>
     </div>
    </div>
   </div>
   <div class="row">
    <div class="col-lg-12 col-md-6 col-12" data-tilt>

     <div class="single-team">
      <div class="t-head">
       <img src="img/doctors.jpg" alt="#">
       <div class="t-icon">
        <a href="appointment" class="btn">Get Appointment</a>
       </div>
      </div>

     </div>

    </div>
   </div>
  </div>
 </section>


 <section class="blog section" id="blog">
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
     <div class="section-title">
      <h2>Most Recent Medical News.</h2>
      <img src="img/section-img.png" alt="#">
      <p>Stay informed with our latest medical updates. Discover important health insights and news from <?php print $siteName; ?> and Maternity Hospital.</p>
     </div>
    </div>
   </div>
   <div class="row">

    <?php $sql = query_sql("SELECT * FROM $news ORDER BY id DESC LIMIT 3");
    if (mysqli_num_rows($sql) > 0) {
     $c = 0;
     while ($row = mysqli_fetch_assoc($sql)) { ?>

      <div class="col-lg-4 col-md-6 col-12">
       <div class="single-news">
        <div class="news-head card">
         <img src="<?php print 'photo/' . $row['post_image']; ?>" alt="#">
        </div>
        <div class="news-body">
         <div class="news-content">
          <div class="date"><?php print $row['date_post']; ?></div>
          <h2><a href="blog-detail?id=<?php print $row['id']; ?>"><?php print $row['title']; ?></a></h2>
          <p class="text"><?php print $bassic->reduceTextLength($row['news'], 100); ?></p>
         </div>
        </div>
       </div>
      </div>

     <?php $c++;
     }
    } else { ?>
     <h4 style="padding: 20px;">No updates found!</h4>
    <?php } ?>


   </div>
  </div>
 </section>


 <div class="clients overlay">
  <div class="container">
   <div class="row">
    <div class="col-lg-12 col-md-12 col-12">
     <div class="owl-carousel clients-slider">
      <div class="single-clients">
       <img src="img/client1.png" alt="#">
      </div>
      <div class="single-clients">
       <img src="img/client2.png" alt="#">
      </div>
      <div class="single-clients">
       <img src="img/client3.png" alt="#">
      </div>
      <div class="single-clients">
       <img src="img/client4.png" alt="#">
      </div>
      <div class="single-clients">
       <img src="img/client5.png" alt="#">
      </div>
      <div class="single-clients">
       <img src="img/client1.png" alt="#">
      </div>
      <div class="single-clients">
       <img src="img/client2.png" alt="#">
      </div>
      <div class="single-clients">
       <img src="img/client3.png" alt="#">
      </div>
      <div class="single-clients">
       <img src="img/client4.png" alt="#">
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>


 <section class="appointment">
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
     <div class="section-title">
      <h2>We Are Always Ready to Help You. Book An Appointment</h2>
      <img src="img/section-img.png" alt="#">
      <p>We're here for you every step of the way. At <?php print $siteName; ?> and Maternity Hospital, our dedicated team is always ready to assist you. </p>
     </div>
    </div>
   </div>
   <div class="row">
    <div class="col-lg-6 col-md-12 col-12">
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
    <div class="col-lg-6 col-md-12 ">
     <div class="appointment-image">
      <img src="img/beautiful-african-american-doctor-couple-white.png" alt="#">
     </div>
    </div>
   </div>
  </div>
 </section>

 <?php require_once('footer.php'); ?>