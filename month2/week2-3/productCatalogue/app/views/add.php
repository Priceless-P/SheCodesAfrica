<?php require_once APPROOT.'/views/incl/header.php' ?>
<section class="vh-100 gradient-custom">
    <h2>Add New Product</h2>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <div class="mb-md-5 mt-md-4 pb-5">
<form method="post" action="" enctype="multipart/form-data" id="product_form" class="needs-validation"  name="form" novalidate>
    <div class="align-self-center">
   
    <label class="form-label">Product SKU:</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control form-control-lg" name="sku" id="sku" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
       Please submit required data.
      </div>
    </div>

    <label class="form-label">Name:</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control form-control-lg" name="name" id="name" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
       Please submit required data.
      </div>
    </div>

    <label class="form-label">Price:</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control form-control-lg" name="price" id="price" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
       Please submit required data.
      </div>
    </div>
    
    <label class="form-label">Product Image:</label>
    <div class="input-group has-validation">
      <input type="file" class="form-control form-control-lg" name="filename" id="filename" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
       Please submit required data.
      </div>
    </div>

    <label class="form-label">Product Category:</label>
    <div class="input-group has-validation">
    <select id="productType" class="form-control form-control-lg" name="type" onChange="prodType(this.value);" required>
      <option value="" selected hidden>Select type</option>
      <option value="Gadget">Gadgets</option>
      <option value="Book" >Books</option>
      <option value="Furniture">Furniture</option>
    </select>
    <div class="invalid-feedback">
       Please submit required data.
      </div>
      </div>


	<div class="fieldbox" id="Gadget">
    <label class="form-label">Model:</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control form-control-lg child" name="model" value="" id="size" aria-describedby="inputGroupPrepend" >
      <span class="hide">
        Please provide model.
      </span>

      <div class="invalid-feedback">
        Please, provide data of indicated type.
      </div>
    </div>
    </div>

    <div class="fieldbox" id="Book">
    <label class="form-label">Weight(kg):</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control form-control-lg child" name="weight" value="" id="weight" aria-describedby="inputGroupPrepend">
      <span class="hide">
        Please, provide weight in kg.
      </span>
      <div class="invalid-feedback">
        Please, provide data of indicated type.
      </div>
    </div>
    </div>

    <div class="fieldbox" id="Furniture">
    <label class="form-label">Length(cm):</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control form-control-lg child" name="length" id="length" value="" aria-describedby="inputGroupPrepend">
      </div>

    <label class="form-label">Width(cm):</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control form-control-lg child" name="width" id="width" value="" aria-describedby="inputGroupPrepend">
      </div>

    <label class="form-label">Height(cm):</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control form-control-lg child" name="height" id="height" value="" aria-describedby="inputGroupPrepend">
      <div class="hide">
        Please, provide dimensions in cm.
      </div>
      <div class="invalid-feedback">
        Please, provide data of indicated type.
      </div>
     </div>
    </div>
</div>
 <?php if(isset($data['string'])): ?>
    <div class= "err"> <? echo $data['string'] ?></div>
<?php endif?>
      <br />
<a href="index" class="btn btn-danger">Cancel</a>
<button type="submit" name="Save" class="btn btn-primary">Save</button>
</form>
</div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="<? echo URLROOT. '/js/validator.js'?>"></script>
<?php require_once APPROOT.'/views/incl/footer.php' ?>