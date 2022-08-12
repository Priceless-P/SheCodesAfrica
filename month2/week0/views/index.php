<?
require_once 'incl/header.php';
require_once '../categories/Gadgets.php';
require_once '../categories/Books.php';
require_once '../categories/Shoes.php';
?>


<h1 class ="text-center">Product Catalogue</h1>
<?$gadget = new Gadgets();

$data = file_get_contents('../data/gadgets.json');
$decoded =json_decode($data, true);?>
<h3 class="text-center" style="color:red">Gadget's section</h3>
<div class="row d-flex justify-content-center">

<? foreach($decoded as $key): ?>

  <div class="card" style="width: 19rem; margin:3%; padding:2%; ">
  <div class="card-body">
  <img class="card-title" src = "<? echo $key[img]?>">
  <div class="card-text">
  <?
  echo $gadget->setName($key['name']). "<br>";
  echo $gadget->setPrice($key['price']). "<br>";
  echo $gadget->setExcerpt($key['excerpt']). "<br>";
  $gadget->setDescription($key['description']). "<br>";
  $category = $gadget->setCategory($key['category']). "<br>";
  echo $gadget->model($key['model']). "<br>";
  $gadget->weight($key['weight']). "<br>";
  $type = $gadget->type($key['type']). "<br>";
  $available = $gadget->is_available($key['is_available']). "<br>";
  ?>
  <img >>
  </div>
  </div>
  </div>

<? endforeach?>
</div>

<?$books = new Books();

$data = file_get_contents('../data/books.json');
$decoded =json_decode($data, true);?>
<h3 class="text-center" style="color:red">Book's section</h3>
<div class="row d-flex justify-content-center">

<? foreach($decoded as $key): ?>

  <div class="card" style="width: 19rem; margin:3%; padding:2%;">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <div class="card-text">
  <?
  echo $books->setName($key['name']). "<br>";
  echo $books->setPrice($key['price']). "<br>";
  echo $books->setExcerpt($key['excerpt']). "<br>";
  $books->setDescription($key['description']). "<br>";
  $category = $books->setCategory($key['category']). "<br>";
  echo $books->author($key['author']). "<br>";
  $books->pages($key['pages']). "<br>";
  $type = $books->type($key['type']). "<br>";
  $available = $books->is_available($key['is_available']). "<br>";
  ?>
  </div>
  </div>
  </div>

<? endforeach?>
</div>

<?$shoes = new Shoes();

$data = file_get_contents('../data/shoes.json');
$decoded =json_decode($data, true);?>
<h3 class="text-center" style="color:red">Shoes section</h3>
<div class="row d-flex justify-content-center">

<? foreach($decoded as $key): ?>

  <div class="card" style="width: 19rem; margin:3%; padding:2%;">
  <div class="card-body">
  <h5 class="card-title">Card title</h5>
  <div class="card-text">
  <?
  echo $shoes->setName($key['name']). "<br>";
  echo $shoes->setPrice($key['price']). "<br>";
  echo $shoes->setExcerpt($key['excerpt']). "<br>";
  $shoes->setDescription($key['description']). "<br>";
  $category = $shoes->setCategory($key['category']). "<br>";
  echo $shoes->size($key['size']). "<br>";
  $shoes->color($key['color']). "<br>";
  $shoes->gender($key['gender']). "<br>";
  $type = $shoes->type($key['type']). "<br>";
  $available = $shoes->is_available($key['is_available']). "<br>";
  ?>
  </div>
  </div>
  </div>

<? endforeach?>
</div>
<? require_once 'incl/footer.php'; ?>