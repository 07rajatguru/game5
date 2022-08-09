<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>STUDENT UPDATE FORM</h2>
     <form action={{route('update',$data->id)}} method="post">
  @csrf
    <div class="form-group">
      <label for="text">USERNAME:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter Name" name="name" value="{{$data->name}}" >
    </div>
    <div class="form-group">
      <label for="number">ROLL_NO:</label>
      <input type="number" class="form-control" id="number" placeholder="Enter Roll no" name="roll" value="{{$data->roll}}">
    </div>
    <div class="form-group">
      <label for="pwd">PASSWORD:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" value="{{$data->password}}">
    </div>
    <button type="submit" class="btn btn-primary">UPDATE</button>
  </form>
</div>
</body>
</html>
