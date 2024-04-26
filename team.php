<?php
require_once('include.php');
$active2 = 'active';
$title = 'Our Team | ' . $siteName . ' and Maternity Hospital';
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
      <h2>Meet Our Qualified Doctors</h2>
      <ul class="bread-list">
       <li><a href="./">Home</a></li>
       <li><i class="icofont-simple-right"></i></li>
       <li class="active">Doctors</li>
      </ul>
     </div>
    </div>
   </div>
  </div>
 </div>


 <section id="team" class="team section single-page">
  <div class="container">
   <div class="row">


    <?php $sql = query_sql("SELECT * FROM $team_tb ORDER BY id DESC");
    if (mysqli_num_rows($sql) > 0) {
     $c = 0;
     while ($row = mysqli_fetch_assoc($sql)) { ?>
      <div class="col-lg-4 col-md-6 col-12">
       <div class="single-team">
        <div class="t-head card">
         <img src="<?php print 'photo/' . $row['picture']; ?>" alt="#">
         <div class="t-icon">
          <a href="appointment" class="btn">Get Appointment</a>
         </div>
        </div>
        <div class="t-bottom">
         <p><?php print $row['position']; ?></p>
         <h2><a href="appointment"><?php print $row['name']; ?></a></h2>
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

 <?php require_once('footer.php'); ?>