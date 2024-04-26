<?php
require_once('include.php');
$active3 = 'active';
$title = 'Services Details | ' . $siteName . ' and Maternity Hospital';
$description = $siteName . ' and Maternity Hospital offers compassionate healthcare services, including maternity care, general medicine, pediatric care, women`s health, and surgical services. Our experienced team is committed to providing personalized care to every patient.';
$keyword = 'Maternity hospital, Healthcare services, Maternity care, General medicine, Pediatric care, Women`s health, Surgical services, Compassionate care, Experienced team, Personalized healthcare';
require_once('head.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
 $user_id = $_GET['id'];
} else {
 header("location:service-details");
}

$sql = query_sql("SELECT * FROM $services_tb WHERE id= '" . $user_id . "' LIMIT 1");
$row = mysqli_fetch_assoc($sql);
?>

<body>
 <?php require_once('header.php'); ?>


 <div class="breadcrumbs overlay">
  <div class="container">
   <div class="bread-inner">
    <div class="row">
     <div class="col-12">
      <h2>Service Details</h2>
      <ul class="bread-list">
       <li><a href="./">Home</a></li>
       <li><i class="icofont-simple-right"></i></li>
       <li class="active">Service Details</li>
      </ul>
     </div>
    </div>
   </div>
  </div>
 </div>


 <div class="service-details-area section">
  <div class="container">
   <div class="services-details-img">
    <img src="<?php print 'photo/' . $row['image']; ?>" alt="#">
    <h2><?php print $row['title']; ?></h2>
    <p><?php print $row['description']; ?></p>


   </div>

  </div>
 </div>


 <?php require_once('footer.php'); ?>