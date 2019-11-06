@extends('front.layouts.master')
@section('title',$category->name.' Kategorisi | '.count($articles).' yazı bulundu.')
@section('content')
    <div class="col-md-9 mx-auto">
        @if(count($articles)>0)
            @foreach($articles as $article)
                <div class="post-preview">
                    <a href="{{route('single',[$article->getCategory->slug,$article->slug])}}">
                        <h2 class="post-title">
                            {{$article->title}}
                        </h2>
                        <img src="{{$article->image}}"/>
                        <h3 class="post-subtitle">
                            {!! str_limit($article->content,100)!!}
                        </h3>
                    </a>
                    <p class="post-meta"> Kategori :
                        <a href="#">{{$article->getCategory->name}}</a>
                        <span class="float-right">{{$article->created_at->diffForHumans() }}</span></p>
                </div>
                @if(!$loop->last)
                    <hr>
                @endif
            @endforeach
        @else
            <div class="alert alert-danger">
                <center><h1>Bu kategoriye ait yazı bulunmamaktadır.</h1></center>
            </div>
        @endif
    </div>
    @include('front\widgets\categoryWidget')
@endsection
