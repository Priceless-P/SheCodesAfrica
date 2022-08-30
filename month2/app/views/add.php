<? require_once APPROOT.'/views/incl/header.php' ?>
<form method="post" action="" enctype="multipart/form-data" id="product_form" class="needs-validation"  name="form" novalidate>
    <div class="align-self-center">
   <div class="col-md-4">
    <label class="form-label">SKU:</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control" name="sku" id="sku" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
       Please submit required data.
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <label class="form-label">Name:</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control" name="name" id="name" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
       Please submit required data.
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <label class="form-label">Price:</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control" name="price" id="price" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
       Please submit required data.
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <label class="form-label">Product Image:</label>
    <div class="input-group has-validation">
      <input type="file" class="form-control" name="filename" id="filename" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
       Please submit required data.
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <label class="form-label">Category:</label>
    <div class="input-group has-validation">
    <select id="productType" name="type" onChange="prodType(this.value);" required>
      <option value="" selected hidden>Select type</option>
      <option value="Gadget">Gadgets</option>
      <option value="Book" >Books</option>
      <option value="Furniture">Furniture</option>
    </select>
    <div class="invalid-feedback">
       Please submit required data.
      </div>
      </div>
    </div>

	<div class="fieldbox" id="Gadget">
        <div class="col-md-4">
    <label class="form-label">Model:</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control child" name="model" value="" id="size" aria-describedby="inputGroupPrepend" >
      <span class="hide">
        Please provide size in mb.
      </span>

      <div class="invalid-feedback">
        Please, provide data of indicated type.
      </div>
    </div>
    </div>
    </div>

    <div class="fieldbox" id="Book">
      <div class="col-md-4">
    <label class="form-label">Weight(kg):</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control child" name="weight" value="" id="weight" aria-describedby="inputGroupPrepend">
      <span class="hide">
        Please, provide weight in kg.
      </span>
      <div class="invalid-feedback">
        Please, provide data of indicated type.
      </div>
    </div>
    </div>
    </div>

    <div class="fieldbox" id="Furniture">
      <div class="col-md-4">
    <label class="form-label">Length(cm):</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control child" name="length" id="length" value="" aria-describedby="inputGroupPrepend">
      </div>

    <label class="form-label">Width(cm):</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control child" name="width" id="width" value="" aria-describedby="inputGroupPrepend">
      </div>

    <label class="form-label">Height(cm):</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control child" name="height" id="height" value="" aria-describedby="inputGroupPrepend">
      <div class="hide">
        Please, provide dimensions in cm.
      </div>
      <div class="invalid-feedback">
        Please, provide data of indicated type.
      </div>
     </div>
    </div>
   </div>
</div>
 <? if(isset($data['string'])): ?>
    <div class= "err"> <? echo $data['string'] ?></div>
<?endif?>
      <br />
<a href="index" class="btn btn-danger">Cancel</a>
<button type="submit" name="Save" class="btn btn-primary">Save</button>
</form>
<script src="<? echo URLROOT. '/js/validator.js'?>"></script>
<? require_once APPROOT.'/views/incl/footer.php' ?>