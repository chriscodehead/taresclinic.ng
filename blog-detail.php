<?php
require_once('include.php');
$active5 = 'active';
$title = 'Blog Details | ' . $siteName . ' and Maternity Hospital';
$description = $siteName . ' and Maternity Hospital offers compassionate healthcare services, including maternity care, general medicine, pediatric care, women`s health, and surgical services. Our experienced team is committed to providing personalized care to every patient.';
$keyword = 'Maternity hospital, Healthcare services, Maternity care, General medicine, Pediatric care, Women`s health, Surgical services, Compassionate care, Experienced team, Personalized healthcare';
require_once('head.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
 $user_id = $_GET['id'];
} else {
 header("location:blog-detail");
}

$sql = query_sql("SELECT * FROM $news WHERE id= '" . $user_id . "' LIMIT 1");
$row = mysqli_fetch_assoc($sql);
?>

<body>
 <?php require_once('header.php'); ?>
 <div class="breadcrumbs overlay">
  <div class="container">
   <div class="bread-inner">
    <div class="row">
     <div class="col-12">
      <h2>Blog Details</h2>
      <ul class="bread-list">
       <li><a href="./">Home</a></li>
       <li><i class="icofont-simple-right"></i></li>
       <li class="active">Blog Details</li>
      </ul>
     </div>
    </div>
   </div>
  </div>
 </div>


 <section class="news-single section">
  <div class="container">
   <div class="row">

    <div class="col-lg-8 col-12">
     <div class="row">
      <div class="col-12">
       <div class="single-main">
        <div class="news-head">
         <img src="<?php print 'photo/' . $row['post_image']; ?>" alt="#">
        </div>
        <h1 class="news-title"><a href="blog-detail?id=<?php print $row['id']; ?>"><?php print $row['title']; ?></a></h1>
        <div class="meta">
         <div class="meta-left">
          <span class="author"><a href="#"><img src="img/avatar.png" alt="#"><?php print $row['admin_name']; ?></a></span>
          <span class="date"><i class="fa fa-clock-o"></i><?php print $row['date_post']; ?></span>
         </div>

        </div>

        <div class="news-text">
         <p><?php print $row['news']; ?></p>

        </div>

       </div>
      </div>

     </div>
    </div>

    <div class="col-lg-4 col-12">
     <div class="main-sidebar">

      <div class="single-widget recent-post">
       <h3 class="title">Recent post</h3>


       <?php $sql = query_sql("SELECT * FROM $news ORDER BY id DESC LIMIT 10");
       if (mysqli_num_rows($sql) > 0) {
        $c = 0;
        while ($row = mysqli_fetch_assoc($sql)) { ?>

         <div class="single-post">
          <div class="image">
           <img src="<?php print 'photo/' . $row['post_image']; ?>" alt="#">
          </div>
          <div class="content">
           <h5><a href="blog-detail?id=<?php print $row['id']; ?>"><?php print $row['title']; ?></a></h5>
           <ul class="comment">
            <li><i class="fa fa-calendar" aria-hidden="true"></i><?php print $row['date_post']; ?></li>
           </ul>
          </div>
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
  </div>
 </section>

 <?php require_once('footer.php'); ?>