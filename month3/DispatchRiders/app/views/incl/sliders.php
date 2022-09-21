<section id="slideslow-bg">
<div class="container">
<div class="row">
<div class="col-lg-12 text-center">
<div class="slideshowcontent">
<div class="display-table">
<div class="display-table-cell">
<h1>GET A RIDER TODAY!</h1>
<p>Get your packages delivered, when and how you want it <br> at almost no price!</p>
<div class="book-ur-car">
<form method ="POST" action="home/negotiate">
<div class="drop-location bookinput-item">
<input type = "text" name="dropoff" placeholder="DropOff Location" />
</div>
<div class="pick-location bookinput-item">
<input type = "text" name="pickup" placeholder="Pickup Location" />
</div>
<div class="pick-location bookinput-item">
<input type="textarea" name="details" placeholder ="Details of delivery" />
</div>

<div class="retern-date bookinput-item">
<input type = "phone" name="phone" placeholder="Your Phone No" />
</div>
<div class="car-choose bookinput-item">
<select class="custom-select"name="rider">
<option selected>Choose a rider</option>
<?php foreach ($data['riders'] as $rider): ?>
<option value="<?php echo $rider->fullname ?>"><?php echo "$rider->fullname"?> <?if($rider->location) echo "($rider->location)" ?></option>
<? endforeach ?>
</select>
</div>
<div class="bookcar-btn bookinput-item">
<button type="submit">Speak with your Rider</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>