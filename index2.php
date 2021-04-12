<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="Bootstrap e-commerce html template similar to Alibaba">
<meta name="keywords" content="Online template, shop, theme, template, html, css, bootstrap 4">

<title>Website title - bootstrap alistyle html template</title>
  <?php include('links-page/links-page.php'); ?>
<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

<!-- jQuery -->
<script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="css/bootstrap3661.css?v=2.0" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="fonts/fontawesome/css/all.min3661.css?v=2.0" type="text/css" rel="stylesheet">

<!-- custom style -->
<link href="css/ui3661.css?v=2.0" rel="stylesheet" type="text/css"/>
<link href="css/responsive3661.css?v=2.0" rel="stylesheet" type="text/css" />

<!-- custom javascript -->
<script src="js/script3661.js?v=2.0" type="text/javascript"></script>

</head>
<body>

<!-- REMOVE FOLLOWING LINK -->
<a href="https://pokslide.com" class="btn btn-dark rounded-pill" style="font-size:13px; z-index:100; position: fixed; bottom:10px; right:10px;">Sign Up Now</a>
<!-- REMOVE  //END -->


  <?php include('main-page/header-page.php'); ?>
  <?php include('model-page.php'); ?>

 <?php if (!isset($_SESSION['user_id'])) { ?>
    <section class=" bg-accent bg-position-center-top bg-no-repeat " style="background-image: url(img/home/market.jpg); ">
      <div class="pb-lg-12 mb-lg-0"></div>
      <div class="container py-lg-5 my-lg-0">
        <div class="row mb-3 mb-sm-1">
          <div class="col-lg-12 col-md-12 text-center ">
            <h1 class="text-white line-height-base "><span class='font-weight-bold'> &#127752;The &#128293;#1 place for design resources</span></h1>
            <h2 class="h4 text-white font-normal ">Pikslide is the place to find high-quality design resources for designers, creative agencies and developers </h2>
            <h2 class="h5 text-white font-weight-bold ">High quality items created by our global community</h2>
            <a href="pages-register" class="btn  text-dark bg-light font-size-lg  btn-size-12  mt-4 mb-2">GET START</a>
          </div>
        </div>
      </div>
      </div>
    </section>
  <?php }; ?>

<section class="container w-auto padding-bottom">
 <div class="card card-deal">

   <div class="row no-gutters items-wrap">
    <div class="col-xl-3 col-lg-4 col-md-6 col-6">
     <figure class="card-product-grid card-md">
      <a href="#" class="img-wrap">
       <img src="https://assets.materialup.com/uploads/a14124b7-abc7-4956-bcc2-655acd61a5fb/teaser.png">
      </a>
<div class="text-wrap p-3">
     <a href="#" class="title">Some category</a>
     <span class="badge badge-danger"> -5% </span>
   </div>
   </figure>
 </div> <!-- col.// -->
 <div class=" col-xl-3 col-lg-4 col-md-6 col-6">
   <figure class="card-product-grid card-md">
    <a href="#" class="img-wrap">
     <img src="https://assets.materialup.com/uploads/a14124b7-abc7-4956-bcc2-655acd61a5fb/teaser.png">
   </a>
   <div class="text-wrap p-3">
     <a href="#" class="title">Some category</a>
     <span class="badge badge-danger"> -5% </span>
   </div>
 </figure>
</div> <!-- col.// -->
<div class="col-xl-3 col-lg-4 col-md-4 col-6">
 <figure class="card-product-grid card-md">
  <a href="#" class="img-wrap">
  <img src="https://assets.materialup.com/uploads/a14124b7-abc7-4956-bcc2-655acd61a5fb/teaser.png">
 </a>
 <div class="text-wrap p-3">
   <a href="#" class="title">Another category</a>
   <span class="badge badge-danger"> -20% </span>
 </div>
</figure>
</div> <!-- col.// -->
<div class="col-xl-3 col-lg-4 col-md-4 col-6">
 <figure class="card-product-grid card-md">
  <a href="#" class="img-wrap">
<img src="https://assets.materialup.com/uploads/a14124b7-abc7-4956-bcc2-655acd61a5fb/teaser.png">
 </a>
 <div class="text-wrap p-3">
   <a href="#" class="title">Home apparel</a>
   <span class="badge badge-danger"> -15% </span>
 </div>
</figure>
</div> <!-- col.// -->

</div>
</div>

</section>
<!-- =============== SECTION DEAL // END =============== -->

<!-- =============== SECTION 1 =============== -->

<!-- =============== SECTION 1 END =============== -->

<!-- =============== SECTION 2 =============== -->
<!-- =============== SECTION 2 END =============== -->



<!-- =============== SECTION REQUEST =============== -->

<!-- =============== SECTION REQUEST .//END =============== -->


<!-- =============== SECTION ITEMS =============== -->
<section  class=" container padding-bottom-sm">

<header class="section-heading ">
	<h4 class="title-section text-uppercase">Recommended items</h4>
</header>

<div class="row row-sm">
	<div class="col-xl-3 col-lg-4 col-md-4 col-6">
		<div class="card card-sm card-product-grid card-md">
			<a href="#" class="img-wrap"> <img src="https://assets.materialup.com/uploads/a14124b7-abc7-4956-bcc2-655acd61a5fb/teaser.png"></a>
			<figcaption class="info-wrap ">
				<a href="#" class="title">Just another product name</a>
				<div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
			</figcaption>
		</div>
	</div> <!-- col.// -->
<div class="col-xl-3 col-lg-4 col-md-4 col-6">
		<div class="card card-sm card-product-grid card-md">
			<a href="#" class="img-wrap"> <img src="https://assets.materialup.com/uploads/a14124b7-abc7-4956-bcc2-655acd61a5fb/teaser.png"> </a>
			<figcaption class="info-wrap">
				<a href="#" class="title">Some item name here</a>
				<div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
			</figcaption>
		</div>
	</div> <!-- col.// -->
<div class="col-xl-3 col-lg-4 col-md-4 col-6">
		<div class="card card-sm card-product-grid card-md">
			<a href="#" class="img-wrap"> <img src="https://assets.materialup.com/uploads/a14124b7-abc7-4956-bcc2-655acd61a5fb/teaser.png"></a>
			<figcaption class="info-wrap">
				<a href="#" class="title">Great product name here</a>
				<div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
			</figcaption>
		</div>
	</div> <!-- col.// -->
<div class="col-xl-3 col-lg-4 col-md-4 col-6">
		<div class="card card-sm card-product-grid card-md">
			<a href="#" class="img-wrap"> <img src="https://assets.materialup.com/uploads/a14124b7-abc7-4956-bcc2-655acd61a5fb/teaser.png"></a>
			<figcaption class="info-wrap">
				<a href="#" class="title">Just another product name</a>
				<div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
			</figcaption>
		</div>
	</div> <!-- col.// -->
<div class="col-xl-3 col-lg-4 col-md-4 col-6">
		<div class="card card-sm card-product-grid card-md">
			<a href="#" class="img-wrap"> <img src="https://assets.materialup.com/uploads/a14124b7-abc7-4956-bcc2-655acd61a5fb/teaser.png"> </a>
			<figcaption class="info-wrap">
				<a href="#" class="title">Just another product name</a>
				<div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
			</figcaption>
		</div>
	</div> <!-- col.// -->
<div class="col-xl-3 col-lg-4 col-md-4 col-6">
		<div class="card card-sm card-product-grid card-md">
			<a href="#" class="img-wrap"> <img src="https://assets.materialup.com/uploads/a14124b7-abc7-4956-bcc2-655acd61a5fb/teaser.png"> </a>
			<figcaption class="info-wrap">
				<a href="#" class="title">Some item name here</a>
				<div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
			</figcaption>
		</div>
	</div> <!-- col.// -->
<div class="col-xl-3 col-lg-4 col-md-4 col-6">
		<div class="card card-sm card-product-grid card-md">
			<a href="#" class="img-wrap"> <img src="https://assets.materialup.com/uploads/a14124b7-abc7-4956-bcc2-655acd61a5fb/teaser.png"> </a>
			<figcaption class="info-wrap">
				<a href="#" class="title">Some item name here</a>
				<div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
			</figcaption>
		</div>
	</div> <!-- col.// -->
<div class="col-xl-3 col-lg-4 col-md-4 col-6">
		<div class="card card-sm card-product-grid card-md">
			<a href="#" class="img-wrap"> <img src="https://assets.materialup.com/uploads/a14124b7-abc7-4956-bcc2-655acd61a5fb/teaser.png"> </a>
			<figcaption class="info-wrap">
				<a href="#" class="title">Some item name here</a>
				<div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
			</figcaption>
		</div>
	</div> <!-- col.// -->
<div class="col-xl-3 col-lg-4 col-md-4 col-6">
		<div class="card card-sm card-post card-lg">
			<a href="#" class="img-wrap"> <img src="https://assets.materialup.com/uploads/73001380-3512-45db-8a8e-2e4c70065b3a/preview.jpg"> </a>
			<figcaption class="info-wrap">
				<a href="#" class="title">Some item name here</a>
				<div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
			</figcaption>
		</div>
	</div> <!-- col.// -->
<div class="col-xl-3 col-lg-4 col-md-4 col-6">
		<div class="card card-sm card-product-grid card-md">
			<a href="#" class="img-wrap"> <img src="https://assets.materialup.com/uploads/a14124b7-abc7-4956-bcc2-655acd61a5fb/teaser.png"> </a>
			<figcaption class="info-wrap">
				<a href="#" class="title">Some item name here</a>
				<div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
			</figcaption>
		</div>
	</div> <!-- col.// -->
<div class="col-xl-3 col-lg-4 col-md-4 col-6">
		<div class="card card-md card-product-grid card-md">
			<a href="#" class="img-wrap"> <img src="https://assets.materialup.com/uploads/a14124b7-abc7-4956-bcc2-655acd61a5fb/teaser.png"> </a>
			<figcaption class="info-wrap">
				<a href="#" class="title">Some item name here</a>
				<div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
			</figcaption>
		</div>
	</div> <!-- col.// -->
<div class="col-xl-3 col-lg-4 col-md-4 col-6">
		<div class="card card-sm card-product-grid card-md">
			<a href="#" class="img-wrap"> <img src="https://assets.materialup.com/uploads/a14124b7-abc7-4956-bcc2-655acd61a5fb/teaser.png"> </a>
			<figcaption class="info-wrap">
				<a href="#" class="title">Some item name here</a>
				<div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
			</figcaption>
		</div>
	</div> <!-- col.// -->
</div> <!-- row.// -->
</section>
<!-- =============== SECTION ITEMS .//END =============== -->


<!-- =============== SECTION SERVICES =============== -->
<section  class="container padding-bottom">

<header class="section-heading ">
	<h4 class="title-section text-uppercase">Trade services</h4>
</header>

<div class="row">
	<div class="col-md-3 col-sm-6">
		<article class="card card-post card-product-grid ">
		  <img src="https://assets.materialup.com/uploads/a14124b7-abc7-4956-bcc2-655acd61a5fb/teaser.png" class="card-img-top">
		  <div class="card-body">
		    <h6 class="title">Trade Assurance</h6>
		    <p class="small text-uppercase text-muted">Order protection</p>
		  </div>
		</article> <!-- card.// -->
	</div> <!-- col.// -->
	<div class="col-md-3 col-sm-6">
		<article class="card card-post">
		  <img src="https://assets.materialup.com/uploads/a14124b7-abc7-4956-bcc2-655acd61a5fb/teaser.png" class="card-img-top">
		  <div class="card-body">
		    <h6 class="title">Pay anytime</h6>
		    <p class="small text-uppercase text-muted">Finance solution</p>
		  </div>
		</article> <!-- card.// -->
	</div> <!-- col.// -->
	<div class="col-md-3 col-sm-6">
		<article class="card card-post">
		  <img src="https://assets.materialup.com/uploads/a14124b7-abc7-4956-bcc2-655acd61a5fb/teaser.png" class="card-img-top">
		  <div class="card-body">
		    <h6 class="title">Inspection solution</h6>
		    <p class="small text-uppercase text-muted">Easy Inspection</p>
		  </div>
		</article> <!-- card.// -->
	</div> <!-- col.// -->
	<div class="col-md-3 col-sm-6">
		<article class="card card-post">
		  <img src="https://assets.materialup.com/uploads/a14124b7-abc7-4956-bcc2-655acd61a5fb/teaser.png" class="card-img-top">
		  <div class="card-body">
		    <h6 class="title">Ocean and Air Shipping</h6>
		    <p class="small text-uppercase text-muted">Logistic services</p>
		  </div>
		</article> <!-- card.// -->
	</div> <!-- col.// -->
</div> <!-- row.// -->

</section>
<!-- =============== SECTION SERVICES .//END =============== -->


<!-- =============== SECTION REGION .//END =============== -->


<!-- container end.// -->

<!-- ========================= SECTION SUBSCRIBE  ========================= -->

<!-- ========================= SECTION SUBSCRIBE END// ========================= -->
<a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2"></span><i class="btn-scroll-top-icon czi-arrow-up"> </i></a>

<!-- ========================= FOOTER ========================= -->
  <?php include('main-page/footer-page.php'); ?>
<!-- ========================= FOOTER END // ========================= -->



</body>

<!-- Mirrored from bootstrap-ecommerce.com/templates/alistyle-html/page-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Apr 2021 08:36:39 GMT -->
</html>