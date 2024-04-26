<?php
require_once('include.php');
$active6 = 'active';
$title = 'Contact | ' . $siteName . ' and Maternity Hospital';
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
      <h2>Contact Us</h2>
      <ul class="bread-list">
       <li><a href="./">Home</a></li>
       <li><i class="icofont-simple-right"></i></li>
       <li class="active">Contact Us</li>
      </ul>
     </div>
    </div>
   </div>
  </div>
 </div>


 <section class="contact-us section">
  <div class="container">
   <div class="inner">
    <div class="row">
     <div class="col-lg-6">
      <div class="contact-us-left">

       <div id=""><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3963.983012041765!2d3.3668661!3d6.5238283!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8c52af4d4fcd%3A0xef9f231fb6b2da3b!2s11%20Shiro%20St%2C%20Fadeyi%2C%20Lagos%20101245%2C%20Lagos!5e0!3m2!1sen!2sng!4v1713704410650!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>

      </div>
     </div>
     <div class="col-lg-6">
      <div class="contact-us-form">
       <h2>Contact With Us</h2>
       <p>If you have any questions please fell free to contact with us.</p>

       <form class="form" method="post" action="">
        <div class="row">
         <div class="col-lg-6">
          <div class="form-group">
           <input type="text" name="name" id="name" placeholder="Name" required>
          </div>
         </div>
         <div class="col-lg-6">
          <div class="form-group">
           <input type="email" name="email" id="email" placeholder="Email" required>
          </div>
         </div>
         <div class="col-lg-6">
          <div class="form-group">
           <input type="text" name="phone" id="phone" placeholder="Phone" required>
          </div>
         </div>
         <div class="col-lg-6">
          <div class="form-group">
           <input type="text" name="subject" id="subject" placeholder="Subject" required>
          </div>
         </div>
         <div class="col-lg-12">
          <div class="form-group">
           <textarea name="message" id="message" placeholder="Your Message" required></textarea>
          </div>
         </div>
         <div class="col-12">
          <div class="form-group login-btn">
           <button class="btn" type="button" onclick="contatMail()">Send</button>
          </div>
          <div class="checkbox">

          </div>
         </div>
        </div>
       </form>

      </div>
     </div>
    </div>
   </div>
   <div class="contact-info">
    <div class="row">

     <div class="col-lg-4 col-12 ">
      <div class="single-info">
       <i class="icofont icofont-ui-call"></i>
       <div class="content">
        <h3><?php print $sitePhone; ?></h3>
       </div>
      </div>
     </div>


     <div class="col-lg-4 col-12 ">
      <div class="single-info">
       <i class="icofont-google-map"></i>
       <div class="content">
        <h3><?php print $siteAddress; ?></h3>
        <!-- <p>Chittagonj, Lakshmipur</p> -->
       </div>
      </div>
     </div>


     <div class="col-lg-4 col-12 ">
      <div class="single-info">
       <i class="icofont-email"></i>
       <div class="content">
        <h3><?php print $siteEmail; ?></h3>
       </div>
      </div>
     </div>

    </div>
   </div>
  </div>
 </section>

 <?php require_once('footer.php'); ?>
 <script>
  function contatMail() {
   $('i#sp5').attr("class", "fa fa-spinner fa-spin");
   var hr = new XMLHttpRequest();
   var url = "reg_process.php";
   var cotactmail = document.getElementById('email').value;
   var name = document.getElementById('name').value;
   var subject = document.getElementById('subject').value;
   var phone = document.getElementById('phone').value;
   var message = document.getElementById('message').value;
   var vars = "cotactmail=" + cotactmail + "&name=" + name + "&message=" + message + "&subject=" + subject + "&phone=" + phone;
   if (cotactmail == "" || name == "" || message == "") {
    sweetUnpre("Please fill all necessary fields!");
    $('i#sp5').attr("class", "");
   } else {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if (!emailReg.test(cotactmail)) {
     sweetUnpre('Please use a valid email address!');
     $('i#sp5').attr("class", "");
    } else {

     hr.open("POST", url, true);
     hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     // Access the onreadystatechange event for the XMLHttpRequest object
     hr.onreadystatechange = function() {
      //  console.log(hr);
      if (hr.readyState == 4 && hr.status == 200) {
       var return_data = hr.responseText;
       sweetUnpre(return_data);
       $('i#sp5').attr("class", "");
       //setTimeout(refreshPage,2000);
       if (return_data == 'Internal error. Mail fail to send') {

       } else {
        document.getElementById('email').value = "";
        document.getElementById('name').value = "";
        document.getElementById('message').value = "";
        document.getElementById('subject').value = "";
        document.getElementById('phone').value = "";
       }
      }
     }
     hr.send(vars); // Actually execute the request
    } //email
    sweetUnpre('processing...');
   } //else empty
  }
 </script>
</body>

</html>