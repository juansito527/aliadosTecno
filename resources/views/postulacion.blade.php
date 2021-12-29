@extends('layouts.master')
@section('title','Aliados tecno - Postulacion')
@section('nav')
@endsection
@section('content')

    <div class="bg-gray-100 mx-auto max-w-6xl bg-white py-20 px-12 lg:px-24 shadow-xl mb-24 mt-24">
        <div class="w-80 mx-auto mb-10 text-center">
            <h1 class="text-yellow-600 text-3xl mb-4 font-bold">TUS DATOS</h1>
            <img class="rounded-full" src="{{asset('img/20943593.jpg')}}" alt="">
        </div>
        <div class="sgForm">
      <form>
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="">¿A qué convocatoria te has presentado?</label><br>


                <input type="radio" name="Numconvocatoria" value="1"> 1<br>

                <input type="radio" name="Numconvocatoria" value="2 o más"> 2 o más<br>

                <input type="radio" name="Numconvocatoria" value="Ninguna"> Ninguna

            </div>
  
              <div class="md:w-1/2 px-3 ">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="department">
                  ¿Cuáles?
                </label>

                <!-- inicio Multi selector -->
                <style>
                  .input-selector{
                    outline: none;
                    border: none;
                    background-color: transparent;
                  }

                  .multi-selector{
                    width: max-content;
                  }

                  .select-field{
                    border: 1px solid black;
                  }

                  .select-field, .convocatoria, .lista{
                    width: 100%;
                    background-color: white;
                    padding: 0.3rem;
                  }

                  .lista{
                    box-shadow: 0 30px 60px rgb(0,0,0,0.2);
                    display: none;
                  }

                  .down-arrow{
                    font-size: 1.2rem;
                    display: inline-block;
                    cursor: pointer;
                    transition: 0.2s linear;
                  }

                  .convocatoria{
                    display: block;
                    padding-left: 0;
                  }

                  .show{
                    display: block;
                  }

                  .rotate180{
                    transform: rotate(-60deg);
                  }

                </style>

                <div class="multi-selector">
                  <div class="select-field">
                    <input type="text" placeholder="Convocatorias" class="input-selector">
                    <span class="down-arrow">&blacktriangledown;</span>
                  </div>

                  <div class="lista">
                    <label for="convocatoria1" class="convocatoria">
                        <input type="checkbox" id="convocatoria1">
                          Convocatoria 1: internet de las coasas
                    </label>
                    <label for="convocatoria2" class="convocatoria">
                      <input type="checkbox" id="convocatoria2">
                        Convocatoria 2
                    </label>
                    <label for="convocatoria3" class="convocatoria">
                    <input type="checkbox" id="convocatoria3">
                        Convocatoria 3
                    </label>
                    <label for="convocatoria4" class="convocatoria">
                    <input type="checkbox" id="convocatoria4">
                        Convocatoria 4
                    </label>
                  </div>

                <script>
                  document.querySelector('.select-field').addEventListener('click',()=>{
                    document.querySelector('.lista').classList.toggle('show');
                    document.querySelector('.down-arrow').classList.toggle('rotate180');
                    });
                </script>  

                  
                </div>

                <!-- Fin Multi selector -->

              </div>
          </div>
      </div>

          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                Dirección de residencia*
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="application-link" type="text" >
            </div>
          </div>
          <div class="-mx-3 md:flex mb-2">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                Departamento*
              </label>
              <div>
                <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="location">
                  <option>Abuja</option>
                  <option>Enugu</option>
                  <option>Lagos</option>
                </select>
              </div>
            </div>
            <div class="md:w-1/2 px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="job-type">
                Ciudad*
              </label>
              <div>
                <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="job-type">
                  <option>Full-Time</option>
                  <option>Part-Time</option>
                  <option>Internship</option>
                </select>
              </div>
            </div>   
          </div>

          <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
            <div class="-mx-3 md:flex mb-6">
              <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                  <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="">¿Haces parte de la comunidad SENA?</label><br>
  
  
                  <input type="radio" name="parteComuni" value="Sí"> Sí<br>

                  <input type="radio" name="parteComuni" value="No"> No
  
              </div>
              <div class="md:w-1/2 px-3">
                  <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="department">
                    Regional
                  </label>
                  <div>
                    <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="department">
                      <option>Engineering</option>
                      <option>Design</option>
                      <option>Customer Support</option>
                    </select>
                  </div>
                </div>
                <div class="md:w-1/2 px-3 " >
                  <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="department">
                    Cargo
                  </label>
                  <div class="">
                    <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="department">
                      <option>Engineering</option>
                      <option>Design</option>
                      <option>Customer Support</option>
                    </select>
                  </div>
                </div>
            </div>
        </div>


          <div class="-mx-3 md:flex mt-2">
            <div class="md:w-full px-3"> 
              <button type="button" class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full btnDot" onclick="currentSlide(2)">
                Continuar
              </button>
            </div>
          </div>
        </div>
      </form>
    
    {{-- form 2  DATOS DE LA EMPRESA--}}
    <div class="sgForm">
      <form>
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
          
          <h1 class="text-yellow-600 text-center mb-2 font-semibold">DATOS DE LA EMPRESA</h1>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                Razón social de la empresa y/o negocio /nombre y apellidos*
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" >
            </div>
          </div>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                Nombre comercial*
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" >
            </div>
          </div>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                Naturaleza jurídica*
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" >
            </div>
          </div>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                Representante legal*
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" >
            </div>
          </div>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                Cédula del representante legal*
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" >
            </div>
          </div>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                Dirección de la empresa y/o negocio*
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" >
            </div>
          </div>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                Teléfonos*
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" >
            </div>
          </div>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                Correo electrónico (empresa)*
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" >
            </div>
          </div>
          

          <div class="-mx-3 md:flex mt-2 ">
            <div class="md:w-full px-3  flex justify-around"> 
              <button  type="button" class="md:w-80 bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full btnDot" onclick="currentSlide(1);window.scrollTo(0, 0);"> Volver</button>
              <button type="button" class="md:w-80 bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full btnDot" onclick="currentSlide(3); window.scrollTo(0, 70);">
                Continuar
              </button>
              
            </div>
          </div>
        </div>
      </form>
    </div>
 {{-- form 2  DATOS DE LA EMPRESA--}}


    {{-- form 3  DATOS DE LA EMPRESA--}}
    <div class="sgForm">
      <form>
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
          
          <h1 class="text-yellow-600 text-center mb-2 font-semibold">DATOS DE LA EMPRESA</h1>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                Registro Mercantil #:
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" >
            </div>
          </div>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                Matrícula de industria y Comercio #:
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" >
            </div>
          </div>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                Régimen Tributario:
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" >
            </div>
          </div>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                Registro Único Tributario:
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" >
            </div>
          </div>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                Sector económico:
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" >
            </div>
          </div>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
               Actividad principal:
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" >
            </div>
          </div>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                Descripción de productos
              </label>
              <textarea  class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" ></textarea>
            </div>
          </div>
          
          

          <div class="-mx-3 md:flex mt-2 ">
            <div class="md:w-full px-3  flex justify-around"> 
              <button  type="button" class="md:w-80 bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full btnDot" onclick="currentSlide(2);window.scrollTo(0, 0);"> Volver</button>
              <button type="button" class="md:w-80 bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full btnDot" onclick="currentSlide(4); window.scrollTo(0, 70);">
                Continuar
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
 {{-- form 3  DATOS DE LA EMPRESA--}}


 {{-- FORM4 PARA ADJUNTAR LOS ARCHIVOS --}}
 <div class="sgForm">
  <form>
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
      
      
      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full px-3">
          <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
            Subir modelo de negocio:
          </label>
          <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="file" >
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full px-3">
          <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
            Rut de la empresa:
          </label>
          <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="file" >
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full px-3">
          <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
            Cámara de comercio de la empresa:
          </label>
          <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="file" >
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full px-3">
          <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
            Portafolio de servicios(opcional):
          </label>
          <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="file" >
        </div>
      </div>
      
      

      <div class="-mx-3 md:flex mt-2 ">
        <div class="md:w-full px-3  flex justify-around"> 
          <button  type="button" class="md:w-80 bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full btnDot" onclick="currentSlide(3);window.scrollTo(0, 0);"> Volver</button>
          <button type="button" class="md:w-80 bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full btnDot">
            Continuar
          </button>
        </div>
      </div>
    </div>
  </form>
</div>
 {{-- CIERRE FORM4 PARA ADJUNTAR LOS ARCHIVOS --}}


</div>
  
@endsection
@section('js')
@endsection
@section('signup')
@endsection