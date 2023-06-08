<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>
<style>
    main{
        background-color: black;
        color: grey;
        min-height: 90vh;
    }
    .jumbo{
        height: 300px;
        background-color: blue;
        margin-bottom: 100px;
        background-image: url(".\public\images\jumbotron.jpg");
    }
</style>
<body>

    @include( 'partials.header' )

    <main>

        <div class="jumbo"></div>
        <div class="container">

            <div class="row g-4">
                @foreach( $comics as $elem)
                    <div class="text-start col-2">
                        <img class="card-img-top" src="https://picsum.photos/200" alt="{{ $elem['title'] }}">
                        <!-- {{ $elem['thumb'] }} -->
                        <div class="card-body">
                        <h5 class="card-title">{{ $elem['title'] }}</h5>
                      </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center pb-3">
                <a name="" id="" class="btn btn-primary text-uppercase" href="#" role="button">load more</a>
            </div>
            <div>

            </div>
        </div>
    </main>

     @include( 'partials.footer' ) 

</body>

</html>