<?php

  require_once "Grocery.php";
  require_once "User.php";

  $products = array (
    new Grocery("Broccoli", 1.99, 1.00),
    new Grocery("Eggs", 2.99, 2.50),
    new Grocery("Ground Beef", 4.99, 1.00),
    new Grocery("Bananas", 0.59, 1.80),
    new Grocery("Chicken Breast", 3.99, 1.00),
    new Grocery("Apples", 1.49, 1.00),
    new Grocery("Salmon Fillet", 9.99, 1.00),
    new Grocery("Brown Rice", 5.99, 4.00),
    new Grocery("Sweet Potato", 3.50, 2.00),
    new Grocery("Cranberries", 3.50, 1.50)
  );

  $username = null;

  if (isset($_POST['submit'])){
    if (isset($_POST['name']) && isset($_POST['spend-limit']) && isset($_POST['selected-products'])) {
      $selectedprodIndex = $_POST['selected-products'];
      $selectedProducts = array();
      foreach ($selectedprodIndex as $index => $productIndex) {
        $product = $products[$productIndex];
        $selectedProducts[$index] = $product;
      }
      $username = new User($_POST['name'], $_POST['spend-limit'], $selectedProducts);
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
          crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
  </head>
  <body>

    <div class="d-flex align-items-center justify-content-center vh-100" style="flex-direction: column;">
      <form method="POST">
        <div class="mb-3">
          <label for="input-name" class="form-label" id="input-name-label">Username</label>
          <input id="input-name" class="form-control" type="text" name="name" required>
        </div>
        <div class="mb-3">
          <label for="input-spending-limit" class="form-label" id="input-spending-limit-label">Spending limit</label>
          <input id="input-spending-limit" class="form-control" type="number" name="spend-limit" step="0.01" required>
        </div>
        <?php foreach ($products as $index => $product): ?>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="<?= $index ?>" id="flexCheckDefault" name="selected-products[]"
              <?php
                if (isset($_POST['selected-products']) && in_array($index, $_POST['selected-products'])){
                  echo "checked";
                }
              ?>
            >
            <label class="form-check-label" for="flexCheckDefault">
              <?= $product ?>
            </label>
          </div>
        <?php endforeach ?>
        <div style="text-align: center; margin-top: 10px">
          <input name="submit" value="Submit" type="submit" class="btn btn-primary">
        </div>
      </form>
      <div style="text-align: center; margin-top: 10px">
        <?php
          if (!empty($selectedProducts)){
            $totalPrice = $username->getTotalSpent();
            if ($totalPrice > $username->getSpendLimit()) {
              echo "Total price: $$totalPrice<br>";
              echo "Spending limit: $" . $username->getSpendLimit() . "<br>";
              echo "User has exceeded the spending limt.<br>";
            } else {
              foreach ($selectedProducts as $product) echo $product . "<br>";
              if ($totalPrice != null) echo "<br>Total price: $" . round($totalPrice, 2) . "<br>";
              echo "User's spending limit: $" . round($username->getSpendLimit(), 2) . "<br>";
              echo "User's remaining balance: $" . round($username->getSpendLimit() - $totalPrice, 2);
            }
          }
        ?>
      </div>
    </div>
  </body>
</html>
