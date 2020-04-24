<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Edit</title>

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  </head>
  <body>
    <br>
    <div class="container margin:0 auto;">
      <div style="max-width:1000px">
    <div class="panel panel-primary">
      <div class="panel-heading ">
        <h1 class=" font-weigt-bold">Add Post</h1>
      </div>
  <div class="panel-body">
    <form>
             @csrf
             
        <div class="form-group">
         <label for="exampleInputEmail1">Name</label>
         <input type="text" class="form-control"name="name"  id=" tile" value="{{$students->name}}">
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Department</label>
         <input type="text" class="form-control"name="department"  id=" tile" value="{{$students->department}}">
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Phone</label>
         <input type="text" class="form-control"name="phone"  id=" tile"value="{{$students->phone}}">
        </div>
        <div class="form-group">
         <label for="exampleInput Desciption " ">Desciption </label>
         <input type="text" class="form-control"name="description"  id=" tile" value="{{$students->description}}">
        </div>
       </div>
        <button type="submit"  class="btn btn-info" >update</button>
      </form>
      </div>
      </div>
      </div>
    </div>
     
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>