
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>main page</title>
  
     
    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
   <script src="{{asset('js/bootstrap.min.js')}}"></script>   
  </head>
  <body>
   
   <div "navbar-header"> 
    <nav  class="navbar navbar-default">
    <ul class="nav navbar-nav pull-right">
      <script src="{{ asset('js/app.js') }}" defer></script>
                        <!-- Authentication Links -->
                        @guest

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
   </div>
                     <!-- Authentication Links -->
      
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
        <h1 class="text-light bg-dark font-weigt-bold">List View</h1>
      </div>
     
     <div class="panel-body">                                                                                                                                                                            
        <div class="col-md-4">
          <a class="btn btn-info" href="{{route('addpost')}}">Add Post</a>

        </div>
          <div class="col-md-9">
            
     @if(Session::has('Success'))
      <div class=" alert alert-success">
        {{Session::get('Success')}}
      </div>
      @endif
            <table class="table">
              <thead>
                <th>SI</th>
                <th>Name</th>
                <th>Department</th>
                 <th>Phone</th>
                <th>Describtion</th>
                </thead>
               <tbody>
               </tbody>
               
               
            @foreach ($students as $user)
               
            
                <tr>
                  <td>{{ $user->id}}</td>
                  <td>{{ $user->name}}</td>
                  <td>{{ $user->department}}</td>
                   <td>{{ $user->phone}}</td>
                  <td>{{ $user->description}}</td>
                  <td>
                    <a class="btn btn-info" href="{{URL::to('view/create/'.$user->id)}}">view</a>
                    <a class="btn btn-warning "onclick="return confirm('Are you sure?') "href="{{url('delete/create/'.$user->id)}}" "=>Delete</a>
                   <a class="btn btn-info" href="{{url('ed/create/'.$user->id)}}"">Update</a>
                  </td>
                </tr>
             
              @endforeach
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