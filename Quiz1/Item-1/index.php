<?php

  require_once "Date.php";
  use Date\Date;

  $msg = "";

  if (isset($_POST['submit'])) {
    $inputDate = $_POST['date'];
    $convertedDate = Date::convertDateFormat($inputDate);
    $msg = "Converted date: " . $convertedDate;
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
    <div class="d-flex align-items-center justify-content-center vh-100">
      <form action="" method="POST" name="date-form">
        <div class="mb-3">
          <label for="input_date" class="form-label">Enter a date : </label>
          <input id="input_date" class="form-control" type="text" name="date" required>
        </div>
        <div style="text-align: center; margin-top: 10px; margin-bottom: 10px">
          <input name="submit" value="Convert" type="submit" class="btn btn-primary">
        </div>
        <div style="text-align: center">
          <?php echo $msg; ?>
        </div>
      </form>
    </div>
  </body>
</html>
