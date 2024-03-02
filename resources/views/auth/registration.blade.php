<!DOCTYPE html>
<html lang="en">

   <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Custom authentication</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">  
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
    </head>    


    <body>
        <div class="container col-lg-8 mt-4 offset-lg-4 d-flex row justify-content-center">
            <div class="row">
                <div class=" col-md-8 col-md-offset-4 style="margin-top:20px; ">
                    <h4>Registration</h4>
                    <hr>
                    <form action="{{route('register-user')}}" method="post">
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                              {{Session::get('success')}}
                        </div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">
                              {{Session::get('fail')}}
                        </div>
                        @endif
                        @csrf 
                          <div class=" form-floating mb-3">
                               <label for="name">Full Name</label>
                               <input type="text" class="form-control" id="name" placeholder="Enter Full Name " name="name" value="{{old('name')}}">
                               <span class="text-danger">@error('name'){{$message}} @enderror</span>
                          </div>
                          <div class="form-floating mb-3 ">
                               <label for="email">Email</label>
                               <input type="text" class="form-control" id="email" placeholder="Enter Email " name="email" value="{{old('email')}} ">
                               <span class="text-danger">@error('email'){{$message}} @enderror</span>
                          </div>
                          <div class=" form-floating mb-3">
                               <label for="password">Password</label>
                               <input type="password" class="form-control" id="password" placeholder="Enter Password " name="password" value="">
                               <span class="text-danger">@error('password'){{$message}} @enderror</span>
                          </div>
                          <div class="form-floating mb-3">
                               <button class="btn btn-block btn-primary" type="register" > Register </button>
                          </div>

                           <br>
                           <a href="login">Already registered, Click Here! </a>


                    </form>
                </div>
            </div>
        </div>

    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>    