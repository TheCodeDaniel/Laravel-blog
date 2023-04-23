<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Index</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
@include('breaks.navbar')

<body>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-8 mt-5">
                <h4 class="mb-3">Today's topic</h4>
                <span class="text-success">{{ $data->created_at }} </span>
                <h3 class="mt-2"> {{ $data->title }} </h3>
                </a>
                <br>
                <p>
                    {{ $data->description }}
                </p>
            </div>
            @include('breaks.sidebar')
        </div>
    </div>
</body>


@include('breaks.footer')

</html>