<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="@yield('estilito404')">
    <script src="https://kit.fontawesome.com/b6028d284b.js" crossorigin="anonymous"></script>
</head>
<body>
    @yield('nav')
    
  <nav class="bg-white shadow-lg  w-full">
    <div class="max-w-6xl mx-auto px-4">
      <div class="flex justify-between">
        <div class="flex space-x-7">

          <div>
            <!-- Website Logo -->
            <a href="#" class="flex items-center py-4 px-2">
              <img src="{{asset('img/logo.png')}}" alt="Logo" class="h-20 w-50 mr-2">
            </a>
          </div>

          <!-- Primary Navbar items -->
          <div class="hidden md:flex items-center space-x-1">
            <a href="" class="py-4 px-2 text-yellow-500 border-b-4 border-yellow-500 font-semibold ">Inicio</a>
            <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-yellow-500 transition duration-300">Servicios</a>
            <a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-yellow-500 transition duration-300">Contactenos</a>
          </div>

        </div>

        <!-- Secondary Navbar items -->
        <div class="hidden md:flex items-center space-x-3 ">
          <a href="" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Iniciar Sesion</a>
          <a href="" class="py-2 px-2 font-medium text-white bg-yellow-500 rounded hover:bg-green-400 transition duration-300">Registrarse</a>
        </div>

        <!-- Mobile menu button -->
        <div class="md:hidden flex items-center">
          <button class="outline-none mobile-menu-button">
          <svg class=" w-6 h-6 text-gray-500 hover:text-yellow-500 "
            x-show="!showMenu"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
        </div>
      </div>
    </div>
    <!-- mobile menu -->
    <div class="hidden mobile-menu">
      <ul class="">
        <li><a href="#" class="block text-sm px-2 py-4  hover:bg-yellow-500 hover:text-white font-semibold">Inicio</a></li>
        <li><a href="#services" class="block text-sm px-2 py-4 hover:bg-yellow-500 hover:text-white transition duration-300">Servicios</a></li>
        <li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-yellow-500 hover:text-white transition duration-300">Contactenos</a></li>
      </ul>
    </div>
  </nav>

  @yield('content')
  
  @yield('js')
  <script>
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");
  
    btn.addEventListener("click", () => {
      menu.classList.toggle("hidden");
    });
  </script>
</body>
</html>