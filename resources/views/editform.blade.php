<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
.edit{

    margin-left: 35%;
    margin-top: 10%;
}


.btn{

    margin-left: 41%;
}
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <form method="post" class="edit">
    @csrf
    @method('PUT')
          <div class="col-md-6 mb-3">
            <label>Product-Name</label>
            <input type="text" name="name" class="form-control"  placeholder="Product-Name" value="{{$read['name']}}" required>
          </div>

        
          <div class="col-md-6 mb-3">
            <label >Description</label>
            <input type="text" name="description" class="form-control" placeholder="Description" value="{{$read['description']}}" required>
          </div>
          <div class="col-md-6 mb-3">
            <label>Price</label>
            <input type="number" name="price" class="form-control" placeholder="Price" value="{{$read['price']}}" required>
          </div>
          <div class="col-md-6 mb-3">
            <label>Quantity</label>
            <input type="number" name="inventory_level" class="form-control" placeholder="Quantity" value="{{$read['inventory_level']}}" required>
          </div>
        
        <button class="btn btn-primary" type="submit" class="btn">Update</button>
      </form>
</body>
</html>