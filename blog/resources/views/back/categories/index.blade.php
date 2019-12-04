@extends('adminlte::page')

@section('title', 'Kategoriler')

@section('content_header')

@stop

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-black">@yield('title')</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Kategori ID</th>
                        <th>Kategori Adı</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $categories)
                        <tr>
                            <td>{{$categories->id}}</td>
                            <td>{{$categories->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop



