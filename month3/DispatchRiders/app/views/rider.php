<?php require_once APPROOT.'/views/incl/header.php'; ?>

<section id="choose-car" class="section-padding" id="riders">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title  text-center">
<span class="title-line"><i class="fa fa-car"></i></span>
</div>
</div>

</div>
<?php
foreach($data as $key => $value):
foreach($value as $v): ?>
<h2>
<? echo $v->username?></h2>
<div class="row">
<div class="col-lg-12">
<div class="row popular-car-gird">
<div class="col-lg-10 col-md-10 con suv mpv">
<div class="single-popular-car">
<div class="p-car-thumbnails">
<a class="" href="tel:<?php echo $v->phone ?>">
    <? if(isset($v->filename)): ?>
<img src=<?php echo URLROOT;?>/rider/<?php echo $v->filename ?> alt="rider_img">

<? else :?>
<img src="/riders/default.jpeg" alt="rider_img">
<? endif ?>
</a>
</div>
<div class="p-car-content">
<h3>
<a href="#"><?php echo $profile->username ?></a>
?>
<span class="price"><i class="fa fa-money"></i> Price range <?php echo $v->price ?></span>
</h3>
<h5>Location : <?php echo $v->routes ?></h5>
<div class="p-car-feature">
<p >Days Available: <?php echo $v->days_of_work ?></p>
<p >Hours Available: <?php echo $v->time_of_work ?></p>
<p >Packages Delivered <?php echo $v->type_of_delivery ?></p>
</div>
<div>
    <span class="price"><a  href="tel:<?php echo $profile->phone ?>"><i class="fa fa-phone"></i> Call</a></span>
</div>
</div>
</div>
</div>
<? endforeach;
endforeach ?>
</div>
</div>
</div>
</div>
</section>
<?php require_once APPROOT.'/views/incl/footer.php'; ?>
