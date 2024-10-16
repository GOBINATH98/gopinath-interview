<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<body>
  
<table class="table">
  <thead>
    <tr>
      <th scope="col">s.no</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product stock</th>
      <th scope="col">Product image</th>
      <th scope="col">Product edit</th>
      <th scope="col">Product delete</th>
    </tr>
  </thead>
  <tbody>
  
    @foreach($hii as $h)
    <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $h->product_name }}</td>
        <td>{{ $h->product_price }}</td>
        <td>{{ $h->product_stock }}</td>
        <td><img src="{{ $h->product_image }}" alt="Product Image" style="width: 100px; height: 100px;"></td>
        <td><button><a href="/edit/{{$h->id}}">edit</a></button></td>
        <td><button><a href="/del/{{$h->id}}">delete</a></button></td>
    </tr>
@endforeach

  </tbody>
</table>
    
</body>
</html>
