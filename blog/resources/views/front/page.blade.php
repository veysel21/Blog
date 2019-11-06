@extends('front.layouts.master')
@section('title',$page->title)
@section('bg',$page->image)
@section('content')
    <div class="col-md-12 mx-auto">
        {!! $page->content !!}
    </div>
@endsection


