@extends('adminlte::page')

@section('title', 'MAKALELER')

@section('content_header')

@stop

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-black">@yield('title')</h3>

            <h6 class="m-0 font-weight-bold float-right text-primary"><strong>{{$articles->count()}}</strong> adet makale bulundu </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Fotoğraf</th>
                        <th>Makale Başlığı</th>
                        <th>Kategori</th>
                        <th>Görüntülenme Sayısı</th>
                        <th>Oluşturma Tarihi</th>
                        <th>Durum</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                    <tr>
                        <td>
                            <img src="{{$article->image}}" width="150">
                        </td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->getCategory->name}}</td>
                        <td><center>{{$article->hit}}</center></td>
                        <td>{{$article->created_at->diffForHumans()}}</td>
                        <td>{!! $article->status==0  ? "<span class='text-danger'> Pasif </span>" : "<span class='text-succes'> Aktif </span>"!!}</td>
                        <td>
                            <a href="#" title="Görüntüle" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> </a>
                            <a href="#" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i> </a>
                            <a href="#" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> </a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop




