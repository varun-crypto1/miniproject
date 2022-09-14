<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Order</title>
</head>
<body>
     <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Customer Id</th>
            <th scope="col">First-name</th>
            <th scope="col">Last-name</th>
            <th scope="col">Email</th>
            <th scope="col">City</th>
            <th scope="col">Zip-code</th>
            <th scope="col">State</th>
            <th scope="col">Edit $ Update</th> 
          </tr>
        </thead>
        @foreach ($reads as $read)
        <tbody>
          <tr>
            <td>{{$read['id']}}</td>
            <td>{{$read['customer_id']}}</td>
            <td>{{$read['first_name']}}</td>
            <td>{{$read['last_name']}}</td>
            <td>{{$read['email']}}</td>
            <td>{{$read['city']}}</td>
            <td>{{$read['zip']}}</td>
            <td>{{$read['state']}}</td>
            <td> <button type="button" class="btn btn-primary" onclick="window.location='{{ url('/editorder', $read['id']) }}'">Edit</button></td>
          <td>
          </tr>    
        </tbody>
        @endforeach  
      </table>
</body>
</html>