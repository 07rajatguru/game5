<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container pt-3">
@if(session()->has('message'))
<div class="alert alert-success">
{{ session()->get('message')}}
</div>
@endif
  <h2>STUDENTS  RECORDS</h2>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>USERNAME</th>
        <th>ROLL_NO</th>
        <th>PASSWORD</th>
        <th>ACTIONS</th>
      </tr>
    </thead>
    <tbody>
       @foreach($data as $d)
      <tr>
        <td>{{$d->id}}</td>
        <td>{{$d->name}}</td>
        <td>{{$d->roll}}</td>
        <td>{{$d->password}}</td>
        <td><a href={{route('edit',$d->id)}} class="btn btn-info dark">Edit</a>
        <a href={{route('delete',$d->id)}} class="btn btn-info dark">Delete</a></td>
        </tr>
           @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
