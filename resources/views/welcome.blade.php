<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway';
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 20vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif
<!-- 
<form action="avatars" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
     <input type="file" name="avatar"></input>
  <button type="submit">Upload</button>
</form>
 -->
 </div>

<form action="{{url('avatars')}}" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
{{ csrf_field() }}
  <div class="form-group col-xs-12 col-sm-8 col-md-8 col-lg-5">
    <label class="col-xs-12 col-sm-6 col-md-6 col-lg-4" for="exampleInputFile">File input</label>
    <input class="col-xs-12 col-sm-6 col-md-6 col-lg-8" type="file" name="1" id="exampleInputFile">
  </div>
  <button class="col-xs-3 col-sm-3 col-md-2 col-lg-2" type="submit" class="btn btn-default">Upload</button>
</form>
<img src="{{url('items/600b16d2778645feeb238df126d07feb.jpeg')}}" alt="">

       
    </body>
</html>
