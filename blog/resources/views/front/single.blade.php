@extends('front.layouts.master')
@section('title',$article->title)
@section('content')

                <div class="col-md-9 mx-auto">
                    {!! $article->content !!}
                </div>
                @include('front\widgets\categoryWidget')
@endsection
