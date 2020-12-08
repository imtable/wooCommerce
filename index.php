<?php
	require "./assets/less/lessc.inc.php";
	function autoCompileLess($inputFile, $outputFile) {
	  // load the cache
	  $cacheFile = $inputFile.".cache";
	  if (file_exists($cacheFile)) {
		$cache = unserialize(file_get_contents($cacheFile));
	  } else {
		$cache = $inputFile;
	  }
	  $less = new lessc;
	  $newCache = $less->cachedCompile($cache);
	  if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
		file_put_contents($cacheFile, serialize($newCache));
		file_put_contents($outputFile, $newCache['compiled']);
	  }
	}
	autoCompileLess('./assets/less/style.less', './assets/css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>wooCommerce</title>
   <link rel="stylesheet" href="assets/css/lustratio.css">
   <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

   <div class="wrapper">
      <section class="section-start section">
         <div class="section-start_header">
            <div class="container header_container">
               <div class="header-wrapper">
                  <div class="header_leftside">
                     <a class="logo" href="#">
                        <img src="assets/img/logo.png" alt="logo">
                     </a>
                     <nav>
                        <ul class="header_menu">
                           <li class="menu_item"><a href="#"><span>Sell</span></a></li>
                           <li class="menu_item"><a href="#"><span>Marketplace</span></a></li>
                           <li class="menu_item"><a href="#"><span>Community</span></a></li>
                           <li class="menu_item"><a href="#"><span>Develop</span></a></li>
                           <li class="menu_item"><a href="#"><span>Resources</span></a></li>
                        </ul>
                     </nav>
                  </div>
                  <div class="header_rightside">
                     <a href="#" class="header_log-in">Log In</a>
                     <button class="header_btn btn">Get Started</button>
                     <img src="assets/img/icon-search.png" alt="" class="header_search">
                  </div>
               </div>
            </div>
         </div>

         <div class="section-start_building">
            <div class="container">
               <div class="buiding_wrapper">
                  <h1 class="building_title">Building exactly the eCommerce website you want.</h1>
                  <p class="building_subtitle subtitle">WooCommerce is a customizable, open-source eCommerce platform built on WordPress. 
                     Get started quickly and make your way.
                  </p>
                     <button class="building_btn btn">Start a New Store</button>
                     <span>or</span>
                     <a href="" class="building_link link">Customize & Extend ›</a>
                  
               </div>
            </div>
         </div>

         <div class="section-start_features">
            <div class="container">
               <h2 class="features_title title">Your eCommerce made simple</h2>
               <div class="features-wrapper">
                  <div class="features_card-start">
                     <a href="#" class="card-start_image">
                        <img src="assets/img/card-start.png" alt="features">
                     </a>
                     <p class="features_title">All You Need to Start</p>
                     <p class="features_subtitle">Add WooCommerce plugin to any WordPress site and set up a new store in minutes.
                     </p>
                     <a href="" class="features_link link">Ecommerce for Wordpress ›</a>
                  </div>
                  <div class="features_card-customize">
                     <a href="#" class="card-customize_image">
                        <img src="assets/img/card-customize.png" alt="features">
                     </a>
                     <p class="features_title">Customize and Extend</p>
                     <p class="features_subtitle">From subscriptions to gym classes to luxury cars, WooCommerce is fully customizable.
                     </p>
                     <a href="" class="features_link link">Browse Extensions ›</a>
                  </div>
                  <div class="features_card-community">
                     <a href="#" class="card-community_image">
                        <img src="assets/img/card-community.png" alt="features">
                     </a>
                     <p class="features_title">Active Community</p>
                     <p class="features_subtitle">WooCommerce is one of the fastest-growing eCommerce communities.
                     </p>
                     <a href="" class="features_link link">Check our Forums ›</a>
                  </div>
               </div>
            </div>
         </div>
      </section>

      .

   </div>
</body>

</html>