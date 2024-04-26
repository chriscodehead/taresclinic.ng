<footer id="footer" class="footer ">

 <div class="footer-top">
  <div class="container">
   <div class="row">
    <div class="col-lg-4 col-md-6 col-12">
     <div class="single-footer">
      <h2>About Us</h2>
      <p>At Tare's Clinic and Maternity Hospital, we believe in delivering compassionate care with a personal touch.</p>
      <br>
      <p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php print $siteAddress; ?></p>

      <ul class="social">
       <li><a href="<?php print $site_facebook; ?>"><i class="icofont-facebook"></i></a></li>
       <li><a href="<?php print $site_instagram; ?>"><i class="icofont-instagram"></i></a></li>
       <li><a href="<?php print $site_linkedin; ?>"><i class="icofont-linkedin"></i></a></li>
       <li><a href="<?php print $site_twitter; ?>"><i class="icofont-twitter"></i></a></li>
      </ul>



     </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12">
     <div class="single-footer f-link">
      <h2>Quick Links</h2>
      <div class="row">
       <div class="col-lg-6 col-md-6 col-12">
        <ul>
         <li><a href="./"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
         <li><a href="about"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
         <li><a href="services"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a></li>
         <li><a href="career"><i class="fa fa-caret-right" aria-hidden="true"></i>Career</a></li>

        </ul>
       </div>
       <div class="col-lg-6 col-md-6 col-12">
        <ul>
         <li><a href="team"><i class="fa fa-caret-right" aria-hidden="true"></i>Team</a></li>
         <!-- <li><a href="gallary"><i class="fa fa-caret-right" aria-hidden="true"></i>Gallery</a></li> -->
         <li><a href="blog"><i class="fa fa-caret-right" aria-hidden="true"></i>Updtaes</a></li>
         <li><a href="faq"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
         <li><a href="contact"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>
        </ul>
       </div>
      </div>
     </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12">
     <div class="single-footer">
      <h2>Open Hours</h2>
      <p>Our doors are open to serve you at Tare's Clinic and Maternity Hospital. Visit us during our scheduled hours to receive expert medical care.
      </p>
      <ul class="time-sidual">
       <li class="day">Monday - Wednesday <span>6.00 Am - 10.00 PM</span></li>
       <li class="day">Thursday - Friday <span>9.00-15.00</span></li>
       <li class="day">Saturday <span>9.00-18.30</span></li>
      </ul>
     </div>
    </div>

   </div>
  </div>
 </div>


 <div class="copyright">
  <div class="container">
   <div class="row">
    <div class="col-lg-12 col-md-12 col-12">
     <div class="copyright-content">
      <p>&copy; <?php print $siteYear; ?> <a href="<?php print $siteDomain; ?>" rel="nofollow" target="_blank"><?php print $siteName; ?>.</a> All Right Reserved.</p>
      <p>Designed by<a href="https://centadesk.com/" rel="nofollow" target="_blank">Centadesk</a></p>
     </div>
    </div>
   </div>
  </div>
 </div>

</footer>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.0.js"></script>
<script src="js/easing.js"></script>
<script src="js/colors.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/slicknav.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/niceselect.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/owl-carousel.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/steller.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyDGqTyqoPIvYxhn_Sa7ZrK5bENUWhpCo0w"></script>
<script src="js/gmaps.min.js"></script>
<script src="js/map-active.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"873ffcbcf9a3b76a","version":"2024.3.0","r":1,"token":"3248e93e0d6447329c4d6bcc351d5700","b":1}' crossorigin="anonymous"></script>
<script src="toast/jquery.toast.js"></script>
<script src="toast/toast-functions.js"></script>

<script>
 function appointmentMail() {
  $('i#sp5').attr("class", "fa fa-spinner fa-spin");
  var hr = new XMLHttpRequest();
  var url = "reg_process.php";
  var email = document.getElementById('email').value;
  var name = document.getElementById('name').value;
  var datepicker = document.getElementById('datepicker').value;
  var doctor = document.getElementById('doctor').value;
  var department = document.getElementById('department').value;
  var phone = document.getElementById('phone').value;
  var message = document.getElementById('message').value;
  var appointmentMail = 'appointmentMail';

  var vars = "email=" + email + "&name=" + name + "&message=" + message + "&phone=" + phone + "&datepicker=" + datepicker + "&doctor=" + doctor + "&department=" + department + "&appointmentMail=" + appointmentMail;
  if (email == "" || name == "" || message == "") {
   sweetUnpre("Please fill all necessary fields!");
   $('i#sp5').attr("class", "");
  } else {
   var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
   if (!emailReg.test(email)) {
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
       document.getElementById('datepicker').value = "";
       document.getElementById('doctor').value = "";
       document.getElementById('department').value = "";
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