<?php require_once APPROOT.'/views/incl/header.php' ?>

<h1><?php echo $data['title'] ?></h1>

<?php flash('login_success'); ?>
<?php flash('delete_success');?>
<? flash('delete_fail'); ?>
<?php flash('add'); ?>
<form class="text-right" method = "post" action ="Products/massDelete">
<?php if(isLoggedIn()):?>
      <input type="submit" name="delete" value="MASS DELETE"class="btn btn-danger delete">  
      <?php endif; ?>


<div class="row d-flex justify-content-center">
    <?php if ($data['Products']): ?>
<?php foreach($data['Products'] as $product): ?>

<div class="col-md-3 col-sm-4">
    <input type ="checkbox" name="checkboxes[<?php echo $product->product_id ?>]" value= "<?php echo $product->product_id ?>" class="delete-checkbox card-text">
<div class="single-new-arrival">
<div class="single-new-arrival-bg">
<img src="/images/<?php echo $product->filename; ?>" alt="product image">
<div class="single-new-arrival-bg-overlay"></div>
<div class="sale bg-1">
	<p>sale</p>
</div>
<div class="new-arrival-cart">
	<p>
	   <?php echo $product->SKU ?> 
	</p>
	<p>
	  <?php
$class = $product->type;
new Display(new $class($product->product_id));
?>  
	</p>
	<p class="arrival-review pull-right">
		<span class="lnr lnr-heart"></span>
		<span class="lnr lnr-frame-expand"></span>
	</p>
</div>
</div>
<h4><a href="#"><?php echo $product->name ?></a></h4>
<p class="arrival-product-price">$<?php echo $product->price ?></p>
</div>
</div>


</form>
<?php endforeach?>
<?php else : ?>

            <div class="card">
                  <h2>You currently have no Products</h2>
</div>

<?php endif; ?>
<?php require_once APPROOT.'/views/incl/footer.php' ?>