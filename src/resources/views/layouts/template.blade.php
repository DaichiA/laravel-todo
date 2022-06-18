<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" href="{{ asset('css/try.css') }}">
    </head>
    <body>
        <h1>@yield('title')</h1>
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
    </body>
    <script src="{{ asset('/js/post.js') }}"></script>
</html>