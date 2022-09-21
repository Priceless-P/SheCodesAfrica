<?php require_once APPROOT.'/views/incl/header.php';

?>


<section id="lgoin-page-wrap" class="section-padding">
<div class="container">
<div class="row">
<div class="col-lg-5 col-md-8 m-auto">
    <? flash('reg_err'); ?>
<div class="login-page-content">
<div class="login-form">
<h3>Sign Up</h3>
<form method="POST" action="">
<div class="name">
<input type="text" name ="fullname" placeholder="Full Name"required>
</div>
<div class="username">
<input type="email" name="email" placeholder="Email"required>
</div>
<div class="username">
<input type="text" name="username" placeholder="Username"required>
</div>
<div class="role">
<select name="role" required>
        <option value="" selected="selected">- Are you a rider or customer? -</option>
        <option value="User">Customer</option>
        <option value="Rider">Rider</option>
        </selected>
</div>
<div class="Phone">
<input type="phone" name="phone" placeholder="Phone Number"required>
</div>
<div class="password">
<input type="password" name="password" placeholder="Password"required>
</div>
<div>
 <select class = "form-control" id="states" required>
        <option value="" selected="selected">- Choose Location -</option>
        <option value="Abia">Abia</option>
        <option value="Adamawa">Adamawa</option>
        <option value="Akwa Ibom">Akwa Ibom</option>
        <option value="Anambra">Anambra</option>
        <option value="Bauchi">Bauchi</option>
        <option value="Bayelsa">Bayelsa</option>
        <option value="Benue">Benue</option>
        <option value="Borno">Borno</option>
        <option value="Cross River">Cross River</option>
        <option value="Delta">Delta</option>
        <option value="Ebonyi">Ebonyi</option>
        <option value="Edo">Edo</option>
        <option value="Ekiti">Ekiti</option>
        <option value="Enugu">Enugu</option>
        <option value="Federal Capital Territory">Federal Capital Territory</option>
        <option value="Gombe">Gombe</option>
        <option value="Imo">Imo</option>
        <option value="Jigawa">Jigawa</option>
        <option value="Kaduna">Kaduna</option>
        <option value="Kano">Kano</option>
        <option value="Katsina">Katsina</option>
        <option value="Kebbi">Kebbi</option>
        <option value="Kogi">Kogi</option>
        <option value="Kwara">Kwara</option>
        <option value="Lagos">Lagos</option>
        <option value="Nassarawa">Nassarawa</option>
        <option value="Niger">Niger</option>
        <option value="Ogun">Ogun</option>
        <option value="Ondo">Ondo</option>
        <option value="Osun">Osun</option>
        <option value="Oyo">Oyo</option>
        <option value="Plateau">Plateau</option>
        <option value="Rivers">Rivers</option>
        <option value="Sokoto">Sokoto</option>
        <option value="Taraba">Taraba</option>
        <option value="Yobe">Yobe</option>
        <option value="Zamfara">Zamfara</option>
</select>
                      </div>
             <div class = "location">
    <select class="form-control" id="gtr" name="location"required>- Select -</select>
                    </div>
<div class="log-btn">
<button type="submit" name="submit"><i class="fa fa-check-square"></i> Sign Up</button>
</div>
</form>
</div>
<!--<div class="login-other">-->
<!--<span class="or">or</span>-->
<!--<a href="#" class="login-with-btn facebook"><i class="fa fa-facebook"></i> Signup With Facebook</a>-->
<!--<a href="#" class="login-with-btn google"><i class="fa fa-google"></i> Signup With Google</a>-->
<!--</div>-->
<div class="create-ac">
<p>Have an account? <a href="login">Sign In</a></p>
</div>
</div>
</div>
</div>
</div>
</section>
<?php require_once APPROOT.'/views/incl/footer.php'; ?>