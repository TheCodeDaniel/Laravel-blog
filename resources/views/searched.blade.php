<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog search results</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

@include('breaks.navbar')

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="mt-4">
                    <h5>Search results for <b> "{{ $request->blog_name }}"</b> </h5>
                </div>
                @foreach ($searched as $post)
                <div class="card shadow mt-3 br-0">
                    <!-- <img class="card-img-top" src="holder.js/100x180/" alt=""> -->
                    <div class="card-body">
                        <span class="text-success">{{ $post->created_at }} </span>
                        <h4 class="card-title mt-2"> {{ $post->title }} </h4>
                        <p class="card-text fxh"> {{ $post->description }} </p>
                        <a class="btn btn-dark br-0" href="{{ route('PI', $post->id) }}"> Read more </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-2"></div>
            @include('breaks.sidebar')
        </div>
    </div>
</body>

@include('breaks.footer')

</html>