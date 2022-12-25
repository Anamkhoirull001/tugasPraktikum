<!DOCTYPE html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.104.2" />
    <title>{{ $title }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/" />

    {{-- icons bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet" />
    <style>
     .register{
      margin-left: 35%;
      margin-bottom: -10px;
      text-shadow: 1.5px 2px 2px rgb(14, 184, 214);
      color: rgb(255, 255, 255)
     }
    </style>
  </head>

  <body class="d-flex h-100 text-center text-bg-dark">
    <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="mb-auto">
          <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid ">
              <a class="navbar-brand text-white " href="/"><b>CRUD</b></a>
              <a class="navbar-brand register" href=""><h3><b>{{ ($title === 'CRUD | Register')? 'Register Now' : 'Please Login' }}</h3></b></a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">                   
                      <li class="nav-item ">
                          <a class="nav-link text-white " href="/{{ ($title === "CRUD | Login!" ) ? 'register' : 'login' }}"><i class="bi bi-box-arrow-in-right"> <b>{{ ($title === "CRUD | Login!" ) ? 'Register' : 'Login' }}</b></i></a>
                      </li>
                </ul>
              </div>
            </div>
          </nav>
          <hr>
      </header>      
        <main class="px-3">
          @yield('container')
        </main>
        <footer class="mt-auto text-white-50">
          <p>
            <a href="https://web.facebook.com/anam.khoirull001"><i class="bi bi-facebook text-white"></i></a> 
            <a href="https://github.com/Anamkhoirull001"><i class="px-2 bi bi-github text-white"></i></a>  
            <a href="https://www.instagram.com/anamkhoirull001"><i class="bi bi-instagram text-white"></i></a> <br> 
            @anamkhoirull001 G.231.21.0144 <i class="bi bi-heart"></i>
          </p>
        </footer>
    </div>
  </body>
</html>