<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
        .container{
            margin-top:10%; 
        }
    </style>
    <title>interface</title>
</head>
<body>
    <div class="container">
        <div class="row">
          <div class="col-12">
            <table class="table table-bordered">
              
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Check the product lists</td>
                 
                  <td>
                    <button type="button" onclick="window.location='{{ url("/product") }}'" class="btn btn-primary">View</button>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Check the orders</td>
                  
                  <td>
                    <button type="button" onclick="window.location='{{ url("/order") }}'" class="btn btn-primary">View</button>
                  
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Check the order-items</td>
                 
                  <td>
                    <button type="button" onclick="window.location='{{ url("/orderitem") }}'" class="btn btn-primary">View</button>
                   
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

</body>
</html>