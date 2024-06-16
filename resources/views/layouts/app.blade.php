<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <!-- Includiamo gli assets con la direttiva vite -->
  @vite('resources/js/app.js')
</head>
<style>
  header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #f0f0f0;
    border-bottom: 1px solid #ccc;
  }


  nav ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
    display: flex;
  }

  nav ul li {
    margin-right: 15px;
  }

  nav ul li a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
  }

  nav ul li a:hover {
    text-decoration: underline;
  }


  main {
    padding: 20px;
  }
</style>

<body>

  <header>
    <div class="logo">
      <a href="{{ url('/') }}">
        <img src="/images/logo.png" alt="Logo" style="height: 50px;">
      </a>
    </div>
    <nav>
      <ul>
        <li>
          <a href="{{ route('comics.index') }}">Scopri il catalogo</a>
        </li>
        <li>
          <a href="{{ route('comics.create') }}">Aggiungi una voce</a>
        </li>
      </ul>
    </nav>
  </header>



  <main>
    @yield('content')
  </main>

</body>

</html>