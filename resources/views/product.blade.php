<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Product</title>
</head>
<body>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">View Count</th>
            <th scope="col">Quantity</th>
            <th scope="col">Edit & Update</th>
            
          </tr>
        </thead>
        @foreach ($reads as $read)
        <tbody>
          <tr>
            <td>{{$read['id']}}</td>
            <td>{{$read['name']}}</td>
            <td>{{$read['description']}}</td>
            <td>{{$read['price']}}</td>
            <td>{{$read['view_count']}}</td>
            <td>{{$read['inventory_level']}}</td>
           <td> <button type="button" class="btn btn-primary" onclick="window.location='{{ url('/edit', $read['id']) }}'">Edit</button></td>
          </tr>
          
        </tbody>
        @endforeach  
      </table>



</body>
</html>
