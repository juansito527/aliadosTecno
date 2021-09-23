@extends('layouts.master')
@section('title','Aliados tecno - Filtro Empresas')
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
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="">¿a que convocatoria te has presentado?</label><br>


                <input type="radio" name="1" value="gusta"> 1<br>

                <input type="radio" name="2+" value="gusta"> 2 o mas<br>

                <input type="radio" name="nd" value="gusta"> ninguna

            </div>
            <div class="md:w-1/2 px-3">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="department">
                  cual?
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
                  cuales?
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

          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                Direccion de residencia*
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="application-link" type="text" >
            </div>
          </div>
          <div class="-mx-3 md:flex mb-2">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                departamento*
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
                ciudad*
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
                  <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="">¿haces parte de la comunidad SENA?</label><br>
  
  
                  <input type="radio" name="1" value="gusta"> Si<br>
  
                  <input type="radio" name="2+" value="gusta"> No<br>
  
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
                Razon social de la empresa y/o negocio /nombre y apellidos*
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
                Naturaleza juridica*
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
                Cedula del representante legal*
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" >
            </div>
          </div>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
               Direccion de la empresa y/o negocio*
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" >
            </div>
          </div>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                Telefonos*
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" >
            </div>
          </div>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
               Correo electronico (empresa)*
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" >
            </div>
          </div>
          

          <div class="-mx-3 md:flex mt-2 ">
            <div class="md:w-full px-3  flex justify-around"> 
              <button  type="button" class="md:w-80 bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full btnDot" onclick="currentSlide(1)"> Volver</button>
              <button type="button" class="md:w-80 bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full btnDot" onclick="currentSlide(3); window.scrollTo(0, 69);">
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
                MUÑEÑOOO*
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
                Naturaleza juridica*
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
                Cedula del representante legal*
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" >
            </div>
          </div>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
               Direccion de la empresa y/o negocio*
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" >
            </div>
          </div>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                Telefonos*
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" >
            </div>
          </div>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
               Correo electronico (empresa)*
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-1 px-2 mb-3" id="application-link" type="text" >
            </div>
          </div>
          

          <div class="-mx-3 md:flex mt-2 ">
            <div class="md:w-full px-3  flex justify-around"> 
              <button  type="button" class="md:w-80 bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full btnDot" onclick="currentSlide(2)"> Volver</button>
              <button type="button" class="md:w-80 bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full btnDot" >
                Continuar
              </button>
              
            </div>
          </div>
        </div>
      </form>
    </div>
 {{-- form 3  DATOS DE LA EMPRESA--}}


</div>
  
@endsection
@section('js')
@endsection
@section('signup')
@endsection