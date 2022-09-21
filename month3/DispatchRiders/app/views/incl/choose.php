
<section id="funfact-area" class="overlay section-padding">
<div class="container">
<div class="row">
<div class="col-lg-11 col-md-12 m-auto">
<div class="funfact-content-wrap">
<div class="row">

<div class="col-lg-4 col-md-6">
<div class="single-funfact">
<div class="funfact-icon">
<i class="fa fa-smile-o"></i>
</div>
<div class="funfact-content">
<p><span class="counter">10</span>+</p>
<h4>Available riders</h4>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6">
<div class="single-funfact">
<div class="funfact-icon">
<i class="fa fa-car"></i>
</div>
<div class="funfact-content">
<p><span class="counter">10</span>+</p>
<h4>Users</h4>
</div>
</div>
</div>


<div class="col-lg-4 col-md-6">
<div class="single-funfact">
<div class="funfact-icon">
<i class="fa fa-bank"></i>
</div>
<div class="funfact-content">
<p><span class="counter">50</span>+</p>
<h4>Cities reached</h4>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</section>


<section id="choose-car" class="section-padding" id="riders">
<div class="container">
<div class="row">

<div class="col-lg-12">
<div class="section-title  text-center">
<h2>Available Riders</h2>
<span class="title-line"><i class="fa fa-car"></i></span>
<p>You can choose any that best suit your needs</p>
</div>
</div>

</div>
<div class="row">
<div class="col-lg-12">
<div class="choose-ur-cars">
<div class="row">
<div class="col-lg-3">
    
<div class="home2-car-filter">
<a href="#" data-filter="*" class="active">All</a>
</div>
</div>

<div class="col-lg-9" >
<div class="row popular-car-gird">
     <?php foreach ($data['riders'] as $rider):?>
<div class="col-lg-6 col-md-6 con hat">
<div class="single-popular-car ">
<div class="p-car-thumbnails">
<? if(isset($rider->filename)): ?>
<a class="car-hover" href="tel:<?php echo $rider->phone ?>">
<img src="<?php echo URLROOT;?>/riderImages/<?php echo $rider->filename?>" alt="rider_img" width="800" height="533">
</a>
<? else :?>
<a class="car-hover" href="tel:<?php echo $rider->phone ?>">
<img src="/rider/default.jpeg" alt="rider_img">
</a>
<? endif ?>
</div>
<div class="p-car-content">
<h3><a href="#"><?php echo $rider->username ?></a>
<span class="price"><i class="fa fa-money"></i></i>  <?php if(isset($rider->price)) echo $rider->price; else {echo "Not specified";}?></span>
</h3>
<h5>Location : <?php if(isset($rider->routes)) echo $rider->routes ; else {echo "Not specified";}?></h5>
<div class="p-car-feature">
<p>Days Available: <?php if(isset($rider->days_of_work)) echo $rider->days_of_work; else {echo "Not specified";} ?></p>
<p>Hours Available: <?php if(isset($rider->time_of_work) )echo $rider->time_of_work; else {echo "Not specified";}?></p>
<p>Packages Delivered: <?php if (isset($rider->type_of_delivery)) echo $rider->type_of_delivery; else {echo "Not specified";}?></p>
<p>Means of delivery: <?php if (isset($rider->vehicle_type)) echo $rider->vehicle_type; else {echo "Not specified";}?></p>
<h3><span class="price"> <a href="tel:<?php echo $rider->phone ?>"><i class="fa fa-phone"></i></a><?php  echo $rider->phone; ?></span>
</h3>
</div>
</div>
</div>
</div>
<? endforeach ?>


</div>
</div>
</div>

</div>
</div>
</section>
