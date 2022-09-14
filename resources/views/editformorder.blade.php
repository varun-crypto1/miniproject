<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .edit{
        
            margin-left: 35%;
            margin-top: 5%;
        }
        
        
        .btn{
        
            margin-left: 41%;
        }
            </style>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
    
    <form method="post" class="edit">
        @csrf
        @method('PUT')
              <div class="col-md-6 mb-3">
                <label>First-name</label>
                <input type="text" name="first_name" class="form-control"  placeholder="First-name" value="{{$read['first_name']}}" required>
              </div>
    
            
              <div class="col-md-6 mb-3">
                <label >Last-name</label>
                <input type="text" name="last_name" class="form-control" placeholder="Last-name" value="{{$read['last_name']}}" required>
              </div>
              <div class="col-md-6 mb-3">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="email" value="{{$read['email']}}" required>
              </div>
              <div class="col-md-6 mb-3">
                <label>City</label>
                <input type="text" name="city" class="form-control" placeholder="city" value="{{$read['city']}}" required>
              </div>
              <div class="col-md-6 mb-3">
                <label>State</label>
                <input type="text" name="state" class="form-control" placeholder="state" value="{{$read['state']}}" required>
              </div>
              <div class="col-md-6 mb-3">
                <label>Zip-code</label>
                <input type="text" name="zip" class="form-control" placeholder="Zip-code" value="{{$read['zip']}}" required>
              </div>
            
            <button class="btn btn-primary" type="submit" class="btn">Update</button>
          </form>


</body>
</html>