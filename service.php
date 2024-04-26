<?php
require_once('include.php');
$active3 = 'active';
$title = 'Services | ' . $siteName . ' and Maternity Hospital';
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
      <h2>Service</h2>
      <ul class="bread-list">
       <li><a href="./">Home</a></li>
       <li><i class="icofont-simple-right"></i></li>
       <li class="active">Service</li>
      </ul>
     </div>
    </div>
   </div>
  </div>
 </div>


 <section class="blog section" id="blog">
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
     <div class="section-title">
      <h2>Our Services</h2>
      <img src="img/section-img.png" alt="#">
     </div>
    </div>
   </div>
   <div class="row">


    <?php $sql = query_sql("SELECT * FROM $services_tb ORDER BY id DESC ");
    if (mysqli_num_rows($sql) > 0) {
     $c = 0;
     while ($row = mysqli_fetch_assoc($sql)) { ?>
      <div class="col-lg-4 col-md-6 col-12">
       <div class="single-news">
        <div class="news-head">
         <img src="<?php print 'photo/' . $row['image']; ?>" alt="#">
        </div>
        <div class="news-body">
         <div class="news-content">
          <h2><a href="service-details?id=<?php print $row['id']; ?>"><?php print $row['title']; ?></a></h2>
          <p class="text"><?php print $bassic->reduceTextLength($row['description'], 100); ?></p>
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


 <?php require_once('footer.php'); ?>