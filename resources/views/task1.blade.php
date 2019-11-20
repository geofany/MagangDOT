<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Task 1</title>
  </head>
  <body>
    <div class="col-md-4 mx-auto" style="margin-top:50px; background-color:rgba(255,0,0,0.3); padding:50px; border-radius:10px">
      <a href="{{url('/')}}">Home</a> / <a href="{{url('/task2')}}">Task #2</a>
      <br>
      <br>
    <h2>Find The 2nd Biggest Number</h2>
    <form class="" action="{{url('/task1/findNumber')}}" method="post">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="form-group">
        <input type="text" class="form-control" name="angka" value="" placeholder="Input Your Number Here">
        <small class="form-text text-muted">Example : 5, 3, 2, 1, 10</small>
      </div>

      <button type="submit" class="btn btn-info col-md-12">Find</button>
    </form>
    <br>
      <h3>Result : </h3>
      <h4>{{$var}}</h4>
    </div>
  </body>

</html>
