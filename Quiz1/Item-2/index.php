<?php

  require_once 'Product.php';
  use Product\Movie;
  use Product\Book;

  $msg = "";

  switch($_POST['selectedOption']){
    case 'Book':
      $book = new Book();
      $book->display();
      break;
    case 'Movie':
      $movie = new Movie();
      $movie->display();
      break;
    default:
      // Something went wrong or form has been tampered.
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
        <label>Choose between a book or a movie :
            <select class="form-select" name="selectedOption">
              <option value="Book">Harry Potter and the Philosopher's Stone (Book)</option>
              <option value="Movie">The Shawshank Redemption (Movie)</option>
            </select>
          <div style="text-align: center; margin-top: 10px; margin-bottom: 10px">
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
