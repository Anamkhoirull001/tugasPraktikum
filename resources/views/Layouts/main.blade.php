<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta
            name="author"
            content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
        />
        <meta name="generator" content="Hugo 0.104.2" />
        <title>{{ $title }}</title>

        <link
            rel="canonical"
            href="https://getbootstrap.com/docs/5.2/examples/sign-in/"
        />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

        {{-- my css --}}
        <link rel="stylesheet" href="/css/cover.css">

        {{-- icons bootstrap --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />

    </head>
    <body class="text-center" style="height: 100%">
        <nav>
            @include('partials.navbar')
        </nav>
        <main>
            @yield('container')
        </main>
        <footer style="position:fixed; bottom:-10px; left:8.3%">            
            @include('partials.footer')
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>