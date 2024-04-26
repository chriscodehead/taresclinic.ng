<?php
require_once('include.php');
$active4 = 'active';
$title = 'Gallery | ' . $siteName . ' and Maternity Hospital';
$description = $siteName . ' and Maternity Hospital offers compassionate healthcare services, including maternity care, general medicine, pediatric care, women`s health, and surgical services. Our experienced team is committed to providing personalized care to every patient.';
$keyword = 'Maternity hospital, Healthcare services, Maternity care, General medicine, Pediatric care, Women`s health, Surgical services, Compassionate care, Experienced team, Personalized healthcare';
require_once('head.php'); ?>
<style>
	.card {
		width: 100%;
		height: 300px;
		border: 1px solid #ccc;
		border-radius: 10px;
		overflow: hidden;
	}

	.card img {
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
</style>

<body>
	<?php require_once('header.php'); ?>

	<div class="breadcrumbs overlay">
		<div class="container">
			<div class="bread-inner">
				<div class="row">
					<div class="col-12">
						<h2>Gallery</h2>
						<ul class="bread-list">
							<li><a href="./">Home</a></li>
							<li><i class="icofont-simple-right"></i></li>
							<li class="active">Gallery</li>
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
						<h2>Gallery.</h2>
						<img src="img/section-img.png" alt="#">
					</div>
				</div>
			</div>
			<div class="row">

				<?php $sql = query_sql("SELECT * FROM $gallery_tb ORDER BY id DESC");
				if (mysqli_num_rows($sql) > 0) {
					$c = 0;
					while ($row = mysqli_fetch_assoc($sql)) { ?>

						<div class="col-lg-4 col-md-6 col-12 mb-5">
							<div class="single-news">
								<div class="news-head card">
									<img src="<?php print 'photo/' . $row['image']; ?>" alt="#">
								</div>
								<div class="news-body">
									<div class="news-content">
										<h6 class="p-2 text-center"><?php print $row['caption']; ?></h6>
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