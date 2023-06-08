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
<style lang="scss" scoped>
    main{
     
        height: 80vh;
        width:
       
    }

</style>
<body>

    @include( 'partials.header' )

    <main class="bg-light d-flex flex-wrap row flex-wrap">
        @foreach( $comics as $elem)
            <div class="card text-start">
              <img class="card-img-top" src="{{ $elem['thumb'] }}" alt="{{ $elem['title'] }}">
              <div class="card-body">
                <h4 class="card-title">{{ $elem['title'] }}</h4>
                <p class="card-text">{{ $elem['description'] }}</p>
              </div>
            </div>
            <span></span>
        @endforeach
    </main>

    @include( 'partials.footer' )

</body>

</html>