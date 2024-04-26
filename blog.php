<?php
require_once('include.php');
$active5 = 'active';
$title = 'Blog | ' . $siteName . ' and Maternity Hospital';
$description = $siteName . ' and Maternity Hospital offers compassionate healthcare services, including maternity care, general medicine, pediatric care, women`s health, and surgical services. Our experienced team is committed to providing personalized care to every patient.';
$keyword = 'Maternity hospital, Healthcare services, Maternity care, General medicine, Pediatric care, Women`s health, Surgical services, Compassionate care, Experienced team, Personalized healthcare';
require_once('head.php');

if (isset($_GET['page'])) {
 $page = $_GET['page'];
} else {
 $page = 1;
}

$no_of_records_per_page = 100;
$offset = ($page - 1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(*) FROM $news";
$result = query_sql($total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);

?>

<body>
 <?php require_once('header.php'); ?>


 <div class="breadcrumbs overlay">
  <div class="container">
   <div class="bread-inner">
    <div class="row">
     <div class="col-12">
      <h2>Blog Grid</h2>
      <ul class="bread-list">
       <li><a href="./">Home</a></li>
       <li><i class="icofont-simple-right"></i></li>
       <li class="active">Blog Grid</li>
      </ul>
     </div>
    </div>
   </div>
  </div>
 </div>


 <section class="blog grid section">
  <div class="container">
   <div class="row">
    <div class="col-lg-8 col-12">
     <div class="row">

      <?php $sql = query_sql("SELECT * FROM $news ORDER BY id DESC LIMIT $offset, $no_of_records_per_page");
      if (mysqli_num_rows($sql) > 0) {
       $c = 0;
       while ($row = mysqli_fetch_assoc($sql)) { ?>

        <div class="col-lg-6 col-md-6 col-12">
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

      <div class="col-12">

       <div class="pagination">
        <!-- <ul class="pagination-list">
         <li><a href="#"><i class="icofont-rounded-left"></i></a></li>
         <li class="active"><a href="#">1</a></li>
         <li><a href="#">2</a></li>
         <li><a href="#">3</a></li>
         <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
        </ul> -->


        <ul class="pagination-list">
         <li><a href="?page=1">First</a></li>
         <li class="<?php if ($page <= 1) {
                     echo 'disabled';
                    } ?>">
          <a href="<?php if ($page <= 1) {
                    echo '#';
                   } else {
                    echo "?page=" . ($page - 1);
                   } ?>"><i class="icofont-rounded-left"></i> Prev</a>
         </li>
         <li class="<?php if ($page >= $total_pages) {
                     echo 'disabled';
                    } ?>">
          <a href="<?php if ($page >= $total_pages) {
                    echo '#';
                   } else {
                    echo "?page=" . ($page + 1);
                   } ?>">Next <i class="icofont-rounded-right"></i></a></a>
         </li>
         <li><a href="?page=<?php echo $total_pages; ?>">Last</a></li>
        </ul>
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