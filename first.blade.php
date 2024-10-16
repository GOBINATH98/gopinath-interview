<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
   
<div class="container">
  <h2>Client form</h2>
  <form action="/in" METHOD="POST" enctype="multipart/form-data">
  @csrf

    <div class="form-group"><br>
      <label for="name">Product Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter Product name" name="name">
    </div>
    <div class="form-group"><br>
      <label for="price">Product Price</label>
      <input type="number" class="form-control" id="price" placeholder="Enter Product price" name="price">
    </div>
    <div class="form-group"><br>
      <label for="stock">Product Stock</label>
      <input type="number" class="form-control" id="stock" placeholder="Enter Product stock" name="stock">
    </div>
    <div class="form-group"><br>
    <label for="image">Product Image</label>
    <input type="file" class="form-control" id="image" name="image" accept="image/*">
</div><br>
   
<button type="submit" class="btn" style="background-color: #28a745; border-color: #28a745;align-items:center">
    Submit
</button>

  </form><a href="{{'/home'}}">To visit the page</a>

</div>

    </form>
   
</body>
</html>