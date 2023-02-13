<?php
  function calculate()
  {
    $num1 = $_POST['FirstNum'];
    $num2 = $_POST['SecondNum'];

    switch($_POST['operators']) {
      case "Add":
        $sum = $num1 + $num2;
        return $sum;
        break;
      case "Subtract":
        $difference = $num1 - $num2;
        return $difference;
        break;
      case "Multiply":
        $product = $num1 * $num2;
        return $product;
        break;
      case "Divide":
        $quotient = $num1 / $num2;
        return $quotient;
        break;
      default:
        echo "Operation error!";
    }
  }
      echo "The result is: ". calculate();
?>
      <br>
      <a href = "calculator.html">Back</a>
