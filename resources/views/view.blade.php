
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>View Page</title>

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   <div class="container margin:0 auto;">
      <div style="">
    <div class="panel  panel-primary">
      <div class="panel-heading ">
           <a class="btn btn-info pull-right" href="{{url('index')}}">HOME</a>
        <h1 class="text-light bg-dark font-weigt-bold"> View</h1>
      </div>
     <div class="panel-body">
                                                                                                                                                                                
          <div class="col-md-9">
            <table class="table">

              <thead>
                <th>SI</th>
                <th>Name</th>
                <th>Depatment</th>
                 <th>Phone</th>
                <th>Describtion</th>
                </thead>
               <tbody>
                <tr>
                  <td>{{$students->id}}</td>
                  <td>{{ $students->name}}</td>
                  <td>{{ $students->department}}</td>
                   <td>{{ $students->phone}}</td>
                  <td>{{ $students->description}}</td>
                  <td>
                </tbody>
       </div>
      </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
  </body>
</html>