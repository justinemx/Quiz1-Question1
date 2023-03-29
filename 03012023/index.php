<?php

  require_once "P2.php";

  $product="";

  $products = array(
    new Products("Avocado", 10),
    new Products("Cereal", 20),
    new Products("Yogurt", 30),
    new Products("Peas", 40),
    new Products("Bread", 50),
  );

  $selectedProducts = array();
  $total_price = null;

  if (isset($_POST['Submit'])) {
    foreach ($products as $product) {
      if (isset($_POST[$product->name])) {
        $selectedProducts[] = $product;
      }
    }

    foreach ($selectedProducts as $product) {
      $total_price += $product->price;
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="d-flex align-items-center justify-content-center vh-100" style="flex-direction: column;">
      <form method="POST">
      <?php foreach ($products as $productIndex => $product) :?>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" name="<?= $product->name ?>" value="<?= $productIndex ?>">
          <label class="form-check-label"><?= $product->name ?> - $<?= $product->price ?>
          </label>
        </div>
        <?php endforeach ?>
        <div style="text-align: center; margin-top: 10px; margin-bottom: 10px">
          <input name="Submit" value="Submit" type="submit" class="btn btn-primary">
        </div>
      </form>
      <div style="text-align: center;">
        <?php foreach ($selectedProducts as $product) echo $product->name . " - $" . $product->price . "<br>" ?>
        <?php if($total_price != null) echo "Total price of all selected products : $" . $total_price ; ?>
      </div>
    </div>
  </body>
</html>
