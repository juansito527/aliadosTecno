@extends('layouts.master')
@section('title','Aliados tecno')
@section('nav')
@endsection
@section('content')
<div class="container mt-5" >
  <div class="grid grid-cols-4 ">
        <div class="col-span-4 lg:col-span-2 xl:ml-20 ">
            <img class="w-full" src="{{asset('img/baner.png')}}" alt="">
        </div>
        <div class="grid grid-col-4 col-span-4 lg:col-span-2  items-center  xl:ml-40">
            <div class="text-center lg:text-left  col-span-4 ">
                <h1 class="text-yellow-500 text-4xl sm:text-8xl font-bold mt-7 mb-3">Red Aliados</h1>
            </div>
            <div class=" text-center text-1xl lg:text-left md:text-2xl p-4  col-span-4 mb-5 ">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic dolores delectus debitis, unde repellat, culpa voluptates modi velit fuga minima in eligendi inventore fugiat maiores molestiae ipsa deserunt. Vero repellat, modi est officia nihil qui. Esse iusto quae ab, porro cumque ea sequi expedita molestias libero unde similique! Non iste delectus beatae, cupiditate accusantium quisquam expedita ratione dolor tenetur iure. Saepe, nisi animi. Ea reiciendis eos totam? Sed quos eius nemo facere, ad suscipit alias magnam atque quasi provident molestias natus unde iusto quidem adipisci facilis optio illo corrupti, eum odio libero quisquam repellendus similique! Laboriosam tenetur cumque earum ratione?</p>
            </div>
            <div class="col-span-4   text-center lg:text-left  ">
                <a href="{{route('postularce')}}"><button class="bg-yellow-500 text-white font-bold rounded-full w-40 h-10 mr-8 ml-3 hover:bg-green-500">POSTULARME!!</button></a>
            </div>
        </div>
  </div>
  {{-- <div class="grid grid-cols-4">
        <div class="col-span-4 lg:col-span-2">
            <img class="w-full" src="{{asset('img/baner.png')}}" alt="">
        </div>
        <div class="grid grid-col-4 col-span-4 lg:col-span-2  items-center ">
            <div class="text-center lg:text-left  col-span-4 ">
                <h1 class="text-yellow-500 text-4xl sm:text-8xl font-bold mt-7 mb-3">Red Aliados</h1>
            </div>
            <div class=" text-center text-1xl lg:text-left md:text-2xl p-4  col-span-4 mb-5">
                <p>Lorem ipsum dolor sitenetur praesentium deleniti quisquam, pariatur saepe reiciendis iure itaque nulla! Reprehenderit maxime vitae non hic! Voluptates repellat itaque molestiae vel placeat eaque perferendis illo nemo tempora distinctio dolorum fugit vero libero magni excepturi enim officia eius nihil tempore repellendus blanditiis, sequi iste neque! Numquam, eaque. Nihil veritatis delectus quam possimus. Delectus, cum?</p>
            </div>
            <div class="col-span-4   text-center lg:text-left  ">
                <a href="{{route('postularce')}}"><button class="bg-yellow-500 text-white font-bold rounded-full w-40 h-10 mr-8 ml-3 hover:bg-green-500">POSTULARME!!</button></a>
            </div>
        </div>
  </div> --}}
</div>
@endsection
@section('js')
@endsection