<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
        .back{
            width: 100%;
            height: 600px;
            overflow: hidden;
            opacity: 0.6;
            background-size: 100% 100%;
        }
        body{
            overflow: hidden;
        }
        .button{
            position: absolute;
            top: 60%;
            left: 51.5%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <div>
        <h5 class="text-center text-primary p-3 bg-warning">M.A.M. College Of Engineering and Technology</h5>
        <img src='asset/img/back.jpg' class="back" 
 style="">
            <center>
                <div class="row button">
                    <div class="col"><a href="{{ route('login') }}"><button class="btn btn-info">Student Login</button></a></div>
                    <div class="col"><a href ="{{url('staff/login')}}"><button class="btn btn-success">Faculty Login</button></div>
                </div>
            </center>

    </div>  
</body>
</html>