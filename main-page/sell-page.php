<?php
if(session_status()==PHP_SESSION_NONE){
  session_start();

}
?>
  <style>
    .bg-primar {
      background-color: #F4F6F9;
    }
  </style>
<div class="page-title-overlap bg- bg-primar pt-4">
    <div class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center pt-2">
      <div class="media media-ie-fix align-items-center pb-3">
        <div class="img-thumbnail rounded-circle position-relative" style="width: 6.375rem;"><img class="rounded-circle" src="img/marketplace/account/avatar.png" alt="Createx Studio"></div>
        <div class="media-body pl-3">
          <h3 class="text-dark font-size-lg mb-0"><?php if(!isset($_SESSION['username']) == "0"){ echo $_SESSION['username'] ;} ?> <span  data-toggle="tooltip" data-placement="top" title="Verified User"><i class="fas fa-check-circle text-dark "></i></span></h3>
          <span class="d-block text-dark font-size-ms opacity-60 py-1">Member since November 2017</span>
        </div>
      </div>
      <div class="d-flex">
        <div class="text-sm-right mr-5">
          <div class="text-dark font-size-base">Total sales</div>
          <h3 class="text-dark">426</h3>
        </div>
        <div class="text-sm-right">
          <div class="text-dark font-size-base">Seller rating</div>
          <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
          </div>
          <div class="text-dark opacity-60 font-size-xs">Based on 98 reviews</div>
        </div>
      </div>
    </div>
  </div>