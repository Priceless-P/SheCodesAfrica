<?php require_once APPROOT.'/views/incl/header.php'; 

?>
<section id="lgoin-page-wrap" class="section-padding">
 
<div class="container">
    
<div class="row">
<div class="col-lg-5 col-md-8 m-auto">
     <? flash('reg_success');
flash('login_err'); ?>  
<div class="login-page-content">
<div class="login-form">
<h3>Log In</h3>
<form method = "POST"action="">

<div class="username">
<input type="email" name="email" placeholder="Email">
</div>

<div class="password">
<input type="password" name="password" placeholder="Password">
</div>

<div class="log-btn">
<button type="submit" name="submit"><i class="fa fa-check-square"></i>Login</button>
</div>
</form>
</div>

<div class="create-ac">
<p>No account? <a href="register">Sign Up</a></p>
</div>
</div>
</div>
</div>
</div>
</section>
<?php require_once APPROOT.'/views/incl/footer.php'; ?>