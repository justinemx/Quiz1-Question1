<?php

  use shape\Cube;
  use shape\Sphere;

  require_once "Shapes.php";

  $shapeOptions = array("Cube", "Sphere");
  $surfaceArea = "";
  $volume = "";
  $length = "";
  $msg = "";

  if(isset($_POST['Submit'])) {
    if (isset($_POST["shape"]) && isset($_POST['length'])) {
      $chosenShape = $shapeOptions[$_POST['shape']];
      $length = $_POST['length'];

      $shape = $chosenShape == "Sphere" ? new Sphere($length) : new Cube($length);

      $length = ($chosenShape == "Sphere" ? "Radius : " : "Edge : "). $length;
      $surfaceArea = "Surface Area : " .round($shape->getSurfaceArea(), 2);
      $volume = "Volume : " .round($shape->getVolume(), 2);
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
        <label>Choose a shape:
          <select class = "form-select" name="shape">
            <?php foreach($shapeOptions as $index => $shape): ?>
              <option value ="<?= $index ?>" <?= isset($_POST['shape']) && $_POST['shape'] == $index ? 'selected' : '' ?>>
                <?= $shape ?>
              </option>
            <?php endforeach; ?>
          </select>
          <div class="mb-3">
            <label for="input_number" class="form-label">Enter the cube's side length or sphere's radius: </label>
            <input id="input_length" class="form-control" type="number" name="length" required>
          </div>
          <div style="text-align: center; margin-top: 10px; margin-bottom: 10px">
            <input name="Submit" value="Submit" type="Submit" class="btn btn-primary"/>
          </div>
        </label>
      </form>
      <?php echo $length . "<br>" ?>
      <?php echo $surfaceArea . "<br>" ?>
      <?php echo $volume . "<br>" ?>
      <div style="text-align: center">
        <?php echo '<br/>' . $msg; ?>
      </div>
    </div>
  </body>
</html>
