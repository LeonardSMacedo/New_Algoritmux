<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

  {{-- CSS --}}
  @vite('resources/css/app.css')
  <title> @yield('title-page') </title>
</head>
<body>
  <header class="header">
    <div class="content-menu">
      <figure>
        <img src="{{ asset('/images/logo-algoritmux.svg') }}">
      </figure>

      <!-- Botão para abrir/fechar o menu no mobile -->
    <button class="menu-toggle" onclick="toggleMenu()">☰</button>

      <div class="menu-mobile hidden">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Metodologia</a></li>
          <li><a href="#">A equipe</a></li>
          <li><a href="#">Contato</a></li>
          <li><a href="#">Materiais</a></li>
          <li><a href="#">ROAS</a></li>
        </ul>
      </div>

      <div class="menu">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Metodologia</a></li>
          <li><a href="#">A equipe</a></li>
          <li><a href="#">Contato</a></li>
          <li><a href="#">Materiais</a></li>
          <li><a href="#">ROAS</a></li>
        </ul>
      </div>
    </div>
    </div>
  </header>

  <main>
    @yield('content')
  </main>

  <footer class="footer">
    <div class="content-footer">
      <div class="footer-right">
        <div class="content">
          <h3 class="text-xl text-primary">Institucional</h3>
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Metodologia</a></li>
            <li><a href="">A equipe</a></li>
            <li><a href="">Contato</a></li>
            <li><a href="">Roas</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-center">
        <div class="content">
          <figure>
            <img src="{{ asset('/images/logo-algoritmux.svg') }}">
          </figure>
          <span>
            <p>Desenvolvido pela agência AlgoritmUX.</p>
          </span>
        </div>
      </div>
      <div class="footer-left">
        <div class="content">
          <h3 class="text-xl text-primary">Nossas redes sociais</h3>
          <div class="social">
            <div class="icons">
              <img src="{{ asset('/images/icons/linkedin.svg') }}">
              <img src="{{ asset('/images/icons/instagram.svg') }}">
            </div>
            <div class="telEmail">
              <p><a href="">(12) 99247-4969</a></p>
              <p><a href="">contato@algoritmux.com</a></p>
            </div>

          </div>
          
        </div>
      </div>
    </div>
  </footer>

  <script>
    function toggleMenu() {
      const menuMobile = document.querySelector('.menu-mobile');
      menuMobile.classList.toggle('show');
    }
    </script>
  @vite('resources/js/app.js')
</body>
</html>