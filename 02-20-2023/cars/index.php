<?php

  require_once "Car.php";
  use Car\Car;

  $msg = "";
  $carOptions = array (

    new Car('Honda', 'Civic', 2022),
    new Car('Toyota', 'Corolla', 2022),
    new Car('Ford', 'Mustang', 2022)
  );

  if(isset($_POST['Submit'])) {
    if (isset($_POST['car'])) {
      $carIndex = $_POST['car'];
      $car = $carOptions [$carIndex];
      $msg = "Selected car: " . $car;
    }
  }

  ?>

  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
    <body>
      <div class="d-flex align-items-center justify-content-center vh-100" style="flex-direction: column;">
      <form method="POST">
        <label>Choose a car:
            <select class = "form-select" name="car">
              <?php foreach($carOptions as $index => $car): ?>
              <option value ="<?= $index ?>" <?= isset($_POST['car']) && $_POST['car'] == $index ? 'selected' : '' ?>>
              <?= $car ?>
              </option>
                <?php endforeach; ?>
            </select>
            <div style="text-align: center; margin-top: 10px">
            <input name="Submit" value="Submit" type="Submit" class="btn btn-primary"/>
            </div>
          </label>
      </form>
        <div style="text-align: center">
        <?php echo '<br/>' . $msg; ?>
        </div>
      </div>
    </body>
  </html>


