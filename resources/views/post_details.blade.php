<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $ind->title }} </title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

@include('breaks.navbar')

<body>
    <div class="container mt-5">
        <div class="row">
            <center>
                <div class="col-md-10 mt-5">
                    <span class="text-success"> {{ $ind->created_at  }} </span>
                    <h3 class="mt-2"> {{ $ind->title }} </h3>
                    <br>
                    <p>
                        {{ $ind->description }}
                    </p>
                </div>
            </center>
        </div>
    </div>
</body>

@include('breaks.footer')

</html>