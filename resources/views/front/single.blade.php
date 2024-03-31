 @extends('front.layouts.master')
 @section('content')
 @section('title', 'Single')
 <!-- Post Content-->
 <article class="mb-4">
     <div class="container px-4 px-lg-5">
         <div class="row gx-4 gx-lg-5 justify-content-center">
             <div class="col-md-4">
                 @include('front.widgets.categoryWidget')
             </div>
             <div class="col-md-8">
                 {{$news->content}}
                 <p class="text-danger">Okunma Sayısı: <b>{{$news->hit}}</b></p>
             </div>
         </div>
     </div>
 </article>
 @endsection