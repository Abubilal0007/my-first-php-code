<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
 .form-control {
    padding: 15px;
}
.btn {
    display: flex;
    justify-content: center;
    width: 10%;
    margin-left: 255px;
}
  </style>
  <body>
  
<?php require_once 'process.php'; ?>

  <form action="process.php" method="POST">
  <div class="container mb-3 mt-5 w-50">
    <label for="name" class="form-label">NAME:</label>
    <input type="text" class="form-control"  value="Enter Your Name" name="name">
  </div>


  <div class="container mb-4 w-50">
    <label for="pwd" class="form-label">LOCATION</label>
    <input type="text" class="form-control" value="Enter Your Location"  name="location">
  </div>
  
  <div class="container mb-3 justify-content-center">
  <button type="submit" name="save-btn" class="btn btn-primary">SAVE</button>
</form> 































    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>