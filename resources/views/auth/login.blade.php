@extends('layouts.master')
@section('title','Aliados tecno')
@section('nav')
@endsection
@section('content')
@section('estilosbody','bg-white font-family-karla h-screen')
<div class="w-full flex flex-wrap">

    <!-- Login Section -->
    <div class="w-full md:w-1/2 flex flex-col">

        

        <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
            <p class="text-center text-3xl font-bold">Bienvenido.</p>
            <form class="flex flex-col pt-3 md:pt-8" method="POST" >
                @csrf
                <div class="flex flex-col pt-4">
                    <label for="email" class="text-lg">Correo Electronico</label>
                    <input type="email" name="email" id="email" placeholder="your@email.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="flex flex-col pt-4">
                    <label for="password" class="text-lg">Contraseña</label>
                    <input type="password" name="password" id="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                </div>
               <input type="submit" value="Entrar" class="bg-yellow-600 text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8">
               
               @error(  'message')
                    
               @enderror
            </form>
            <div class="text-center pt-12 pb-12">
                <p>Don't have an account? <a href="register.html" class="underline font-semibold">Register here.</a></p>
            </div>
        </div>

    </div>

    <!-- Image Section -->
    <div class="w-1/2 shadow-2xl">
        <img class="object-cover w-full h-screen hidden md:block" src="{{asset("img/bg.jpg")}}">
    </div>
</div>
@endsection