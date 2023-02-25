<?php

    require_once "Product.php";

    $product = null ;

    if (isset($_POST['submit'])) {
      if ( isset($_POST['productType']) && isset($_POST['title']) && isset($_POST['price']) && isset($_POST['creator']) && isset($_POST['genreRating'])) {
        $productType = $_POST['productType'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $creator = $_POST['creator'];
        $genreRating = $_POST['genreRating'];

        $product = $productType == "Movie" ?
          new Movie($title,$price, $creator, $genreRating) : new Book( $title, $price, $creator, $genreRating );
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
          <div class="mb-3">
            <label for="input-producttype">Product type</label>
            <select id="input-producttype" class="form-select" name="productType">
              <option value="Book">Book</option>
              <option value="Movie">Movie</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="input-name" class="form-label" id="input-length-label">Title</label>
            <input id="input-name" class="form-control" type="text" name="title" required>
          </div>
          <div class="mb-3">
            <label for="input-price" class="form-label" id="input-length-label">Price</label>
            <input id="input-price" class="form-control" type="text" name="price"
                   required>
          </div>
          <div class="mb-3">
            <label for="input-creator" class="form-label" id="input-length-label">Author or Director</label>
            <input id="input-creator" class="form-control" type="text" name="creator"
              required>
          </div>
          <div class="mb-3">
            <label for="input-genrerating" class="form-label" id="input-length-label">Genre or Rating</label>
            <input id="input-genrerating" class="form-control" type="text" name="genreRating" required>
          </div>
          <div style="text-align: center; margin-top: 10px; margin-bottom: 10px">
            <input name="submit" value="Submit" type="submit" class="btn btn-primary">
          </div>
        </form>
        <div style="text-align: center;">
          <?php echo $product != null ? $product->display() : ""?>
        </div>
      </div>
    </body>
  </html>
