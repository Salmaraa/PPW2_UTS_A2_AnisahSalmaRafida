<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BolaSkuyy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>

  @include('partials.navbar')
  
  <body>

    <header>
        <h1>Hello atlet kebanggan Indonesia, silahkan masukan data Anda!</h1>
    </header>

    <!-- <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/tentang">About</a></li>
            <li><a href="/kontak">Produk</a></li>
        </ul>
    </nav> -->

    <!-- <div class="container mt-4">
        @yield('container')
    </div>
     -->

     <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} Sebagai Footer
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
