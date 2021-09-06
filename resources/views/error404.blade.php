@extends('layouts.master')
@section('title','Aliados tecno')
@section('estilito404','css/style.css')
@section('nav')
@endsection
@section('content')
<div class="">
    <div class="grid grid-cols-2">
            <div class="col-span-2 p-5">
                <h2 class="text-6xl text-center mt-6 text-white">Oops! Pagina no funciona.</h2>
            </div>
            <div class=" col-span-2 h-full  text-center">
                <p class="number text-white" ">404</p>
            </div>
            <div class="col-span-2 h-30 w-48 items-center m-auto">
                <img src="{{asset("img/imagen1.svg")}}" class="w-full h-full ">
            </div>
            <div class="col-span-2 text-center mt-5 text-white">
                <p class="text-3xl">No podemos encontrar la página que busca.</p>
            </div>
      </div>
    </div>
    
 
@endsection
