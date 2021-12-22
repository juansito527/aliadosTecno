<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/styilesNav.css')}}">
    <link rel="stylesheet" href="@yield('estilito404')">
    <script src="https://kit.fontawesome.com/b6028d284b.js" crossorigin="anonymous"></script>
</head>
<body @yield('estilosbody')>
    @yield('nav')
  <div class="w-full h-full">
  <nav class=" bg-transparent shadow-lg  w-full ">
    <div class="bg-gray-100  w-full h-ful ">
      <div class="flex justify-around">
        <div class="flex space-x-8 menuuuu">
          <div class="p-4">
            <!-- Website Logo -->
            <a href="#">
              <img src="{{asset('img/logo.png')}}" alt="Logo" class="h-16 w-50 ">
            </a>
          </div>

          <!-- Primary Navbar items -->
          <div class="hidden md:flex items-center space-x-2">
            <a href="{{route('inicio')}}" class="px-2 text-gray-500 hover:text-yellow-500 font-semibold transition duration-300 text-1xl">Inicio</a>
            <a href="#" class="px-2 text-gray-500 font-semibold hover:text-yellow-500 transition duration-300 text-1xl ">Servicios</a>
            <a href="#" class="px-2 text-gray-500 font-semibold hover:text-yellow-500 transition duration-300 text-1xl ">Contactenos</a>
          </div>

        </div>

        <!-- Secondary Navbar items -->
        <div class="hidden md:flex items-center space-x-3 ">
          <a href="{{route('login')}}" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Iniciar Sesion</a>
          <a href="" class="py-2 px-2 font-medium text-white bg-yellow-500 rounded hover:bg-green-400 transition duration-300">Registrarse</a>
        </div>

        <!-- Mobile menu button -->
        <div class="md:hidden flex items-center">
          <button class="outline-none mobile-menu-button animate-bounce ">
          <svg class=" w-6 h-6 text-gray-500 hover:text-yellow-500 imagensita "
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
    <div class="hidden mobile-menu ">
      <ul class="text-center">
        <li><a href="#"         class="block text-sm px-2 py-4 border-b-2 rounded  hover:bg-yellow-500 hover:text-white  transition duration-300">Inicio</a></li>
        <li><a href="#services" class="block text-sm px-2 py-4 border-b-2 rounded hover:bg-yellow-500 hover:text-white transition duration-300">Servicios</a></li>
        <li><a href="#contact"  class="block text-sm px-2 py-4 border-b-2 rounded shadow-lg  hover:bg-yellow-500 hover:text-white transition duration-300">Contactenos</a></li>
      </ul>
    </div>
  </nav>


  @yield('content')

</div>


  @yield('js')
  <script>
    const btn = document.querySelector("button.mobile-menu-button");
    const btnimg = document.querySelector("svg.imagensita");
    const menu = document.querySelector(".mobile-menu");

    btn.addEventListener("mouseenter", () => {
      btnimg.classList.add('hover:text-red-500');
      btnimg.classList.add('transitionnnn');
    });

    btn.addEventListener("click", () => {
      menu.classList.toggle("hidden");
    });

  </script>
  @yield('signup')
  <script src="{{asset('js/main/signup.js')}}"></script>
</body>
</html>