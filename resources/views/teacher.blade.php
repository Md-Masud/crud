<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Add post</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <br>
    <div class="container margin:0 auto;">
      <div style="max-width:1000px">
    <div class="panel panel-primary">
      <div class="panel-heading d-flex justify-context-between">
         <a class="btn btn-info pull-right" href="{{url('index')}}">Back All information</a>
        <h1 class="text-light bg-dark  font-weigt-bold">Add Post</h1>
        
      </div>

  <div class="panel-body">
     @if(Session::has('Success'))
      <div class=" alert alert-success">
        {{Session::get('Success')}}
      </div>
      @endif
     <form action="{{route('store.add')}}" method="post">
       @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
     @endif
      @csrf
        <div class="form-group">
         <label for="exampleInputEmail1">Name</label>
         <input type="text" class="form-control"name="name"  id=" name" placeholder="Name">
        </div>
         <div class="form-group">
         <label for="exampleInputEmail1">Department</label>
         <input type="department" class="form-control"name="department"  id=" department" placeholder="Department">
        </div>
         <div class="form-group">
         <label for="exampleInputEmail1">phone</label>
         <input type="text" class="form-control"name="phone"  id=" phone" placeholder="Phone">
        </div>
        <div class="form-group">
         <label for="exampleInput Desciption ">Desciption </label>
          <textarea class="form-control" name="description" id="description"></textarea>
        </div>
        <button type="submit"  class="btn btn-info" name="Save"value="Save">Submit</button>
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