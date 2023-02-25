<?php

  require_once "Salary.php";

  $employee = null;

  if (isset($_POST['submit']) && isset($_POST['position']) && isset($_POST['name']) && isset($_POST['salary']) && isset($_POST['months-stay'])) {
    $position = $_POST['position'];
    $name = $_POST['name'];
    $salary = $_POST['salary'];
    $monthStay = $_POST['months-stay'];

    $employee = $position == "employee" ?
      new Employee($name, $salary, $monthStay) : new Manager($name, $salary, $monthStay);
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
        <div class="form-group">
          <label for="employee_type">Employee Type:</label>
          <div class="form-check" style="margin-bottom: 10px">
            <input class="form-check-input" type="radio" name="position" id="employee" value="employee" checked>
            <label class="form-check-label" for="employee">Employee</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="position" id="manager" value="manager">
            <label class="form-check-label" for="manager">Manager</label>
        <div class="mb-3" style="margin-top: 10px">
          <div class="form-group">
            <label for="name">Name :</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="salary">Salary :</label>
            <input type="number" class="form-control" id="salary" name="salary" required>
          </div>
          <div class="form-group">
            <label for="months_of_stay">Months of Stay (12 months maximum):</label>
            <input type="number" class="form-control" id="months_of_stay" name="months-stay" min="1" max="12" required>
          </div>
            </div>
        <div style="text-align: center; margin-top: 10px">
          <input name="submit" value="Submit" type="submit" class="btn btn-primary">
        </div>
      </form>
      <div style="text-align: center;">
        <?= $employee != null ? "Name: " . $employee->getName() . "<br>Position : " . ($employee instanceof Manager ? "Manager" : "Employee") .
          "<br>Salary : " . $employee->getSalary() . " / month" . "<br>Months of Stay : " . $employee->getMonthStay() . "<br>Hourly-Rate : " . $employee->calcuHourlyRate() .
          "<br>13th-Month Pay : " . $employee->calcuThirteenPay() : "" ?>
      </div>
      </div>
    </div>
  </body>
</html>
