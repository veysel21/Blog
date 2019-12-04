@extends('adminlte::page')

@section('title', 'Kontrol Paneli')

@section('content_header')
    <h1>Yeni Kategori Ekle</h1>
@stop

@section('content')

    <form method="post" action="{{route('addCategoryPost')}}">
        <b>Kategori Adı     :
            @csrf
            <input type="text" name="fname">
            <input type="submit" value="Ekle">
            <br></b>


    </form>
@stop





