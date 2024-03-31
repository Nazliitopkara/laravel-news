@extends('front.layouts.master')
@section('content')
@section('title', 'Anasayfa')

<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-4">
            @include('front.widgets.categoryWidget')
        </div>
        <div class="col-md-8 ">
            @foreach($news as $new)
            <!-- Post preview-->
            <div class="post-preview">
                <a href="{{route('single',$new->slug)}}">
                    <h2 class="post-title">{{$new->title}}</h2>
                    <img src="{{$new->image}}" alt="">
                    <h3 class="post-subtitle">{{ Str::limit($new->content, 75) }}</h3>

                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!" class="justify-content-between">
                        <span>{{$new->getCategory->name}} </span>
                        <span>{{$new->created_at->diffForHumans()}}</span></a>
                    
                </p>
            </div>
            @if(!$loop->last)
            <hr class="my-4" />
            @endif
            @endforeach
            <!-- Pager-->
            <!--<div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts
                    →</a></div>-->
        </div>
    </div>
</div>
@endsection