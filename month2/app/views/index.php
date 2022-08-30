<? require_once APPROOT.'/views/incl/header.php' ?>
<h1><? echo $data['title'] ?></h1>
<form class="text-right" method = "post" action ="Products/massDelete">

<input type="submit" name="delete" value="MASS DELETE"class="btn btn-danger delete">

<div class="row d-flex justify-content-center">
<? foreach($data['Products'] as $product): ?>
	<div class=" product-card">
            <div class="card">
              <div class="card-body">
                <input type ="checkbox" name="checkboxes[<? echo $product->product_id ?>]" value= "<? echo $product->product_id ?>" class="delete-checkbox card-text">
                <div class=" text-center">
                <img src="./images/<? echo $product->filename; ?>" style="height:100px; width:100px;">
             	<p class="card-text">SKU: <?echo $product->SKU ?></p>
	            <p class="card-text">Name: <?echo $product->name ?></p>
              	<p class="card-text">Price ($): <?echo $product->price ?> </p>
             	<p class="card-text"><?
                 $class = $product->type;
             	new Display(new $class($product->product_id));
             	?></p>
              </div>
              </div>
            </div>
          </div>
</form>
<?endforeach?>
<? require_once APPROOT.'/views/incl/footer.php' ?>