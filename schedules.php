<?php
require_once('include.php');
$active3 = 'active';
$title = 'Schedules | ' . $siteName . ' and Maternity Hospital';
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
      <h2>Time Table</h2>
      <ul class="bread-list">
       <li><a href="./">Home</a></li>
       <li><i class="icofont-simple-right"></i></li>
       <li class="active">Time Table</li>
      </ul>
     </div>
    </div>
   </div>
  </div>
 </div>


 <section class="doctor-calendar-area section">
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
     <div class="section-title">
      <h2>Determine Your Date to Come</h2>
      <img src="img/section-img.png" alt="#">
      <p>Determine your ideal appointment date with ease. Use our online scheduling system to select a convenient time for your visit.</p>
     </div>
    </div>
   </div>
   <div class="row">
    <div class="col-12">
     <div class="doctor-calendar-table table-responsive">
      <table class="table">
       <thead>
        <tr>
         <th>Time</th>
         <th>Monday</th>
         <th>Tuesday</th>
         <th>Wednesday</th>
         <th>Thursday</th>
         <th>Friday</th>
         <th>Saturday</th>
        </tr>
       </thead>
       <tbody>
        <tr>
         <td><span class="time">9.00</span></td>
         <td>
          <h3>Dr. Tanner</h3>
          <span>Dermatologists</span>
         </td>
         <td>
          <h3>Dr. Kwak</h3>
          <span>Ear, Nose</span>
         </td>
         <td>
          <h3>Dr. Slaughter</h3>
          <span>Neurologist</span>
         </td>
         <td></td>
         <td>
          <h3>Dr. Foley</h3>
          <span>Oncologist</span>
         </td>
         <td>
          <h3>Dr. Palmer</h3>
          <span>Maxine lowe</span>
         </td>
        </tr>
        <tr>
         <td><span class="time">12.00</span></td>
         <td></td>
         <td>
          <h3>Dr. Megahead</h3>
          <span>Orthopedics</span>
         </td>
         <td>
          <h3>Dr. Neupane</h3>
          <span>Pain Management</span>
         </td>
         <td>
          <h3>Dr. Breidin</h3>
          <span>Radiologist</span>
         </td>
         <td></td>
         <td>
          <h3>Dr. Pipe</h3>
          <span>Surgeons</span>
         </td>
        </tr>
        <tr>
         <td><span class="time">15.00</span></td>
         <td>
          <h3>Dr. Tanner</h3>
          <span>Dermatologists</span>
         </td>
         <td>
          <h3>Dr. Kwak</h3>
          <span>Ear, Nose</span>
         </td>
         <td></td>
         <td>
          <h3>Dr. Slaughter</h3>
          <span>Neurologist</span>
         </td>
         <td>
          <h3>Dr. Foley</h3>
          <span>Oncologist</span>
         </td>
         <td></td>
        </tr>
        <tr>
         <td><span class="time">18.00</span></td>
         <td>
          <h3>Dr. Slaughter</h3>
          <span>Neurologist</span>
         </td>
         <td>
          <h3>Dr. Megahead</h3>
          <span>Orthopedics</span>
         </td>
         <td>
          <h3>Dr. Neupane</h3>
          <span>Pain Management</span>
         </td>
         <td>
          <h3>Dr. Breidin</h3>
          <span>Radiologist</span>
         </td>
         <td>
          <h3>Dr. Kwak</h3>
          <span>Ear, Nose</span>
         </td>
         <td>
          <h3>Dr. Pipe</h3>
          <span>Surgeons</span>
         </td>
        </tr>
       </tbody>
      </table>
     </div>
    </div>
   </div>
  </div>
 </section>

 <?php require_once('footer.php'); ?>