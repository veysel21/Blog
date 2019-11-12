@extends('front.layouts.master')
@section('title','İletişim')
@section('bg','https://blackrockdigital.github.io/startbootstrap-clean-blog/img/contact-bg.jpg')
@section('content')

    <div class="col-md-8">
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h3><p>Bizimle iletişime geçmeye için ne dersin..?</p></h3>

        <form name="sentMessage" id="contactForm" novalidate method="post" action="{{route('contact.post')}}">
            @csrf
            <div class="control-group">
                <div class="form-group controls">
                    <label>İsim Soyisim</label>
                    <input type="text" class="form-control" value="{{old('name')}}" placeholder="İsim ve Soyisminiz"
                           name="name" required>
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group controls">
                    <label>Email Adresi</label>
                    <input type="email" class="form-control" value="{{old('email')}}" placeholder="Email Adresiniz" name="email" required>
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group col-xs-12 controls">
                    <label>Konu</label>
                    <select class="form-control" name="topic">
                        <option @if(old('topic')=="Bilgi") selected @endif>Bilgi</option>
                        <option @if(old('topic')=="Destek") selected @endif>Destek</option>
                        <option @if(old('topic')=="Genel") selected @endif>Genel</option>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group controls">
                    <label>Mesajınız</label>
                    <textarea rows="5" name="message" class="form-control"
                              placeholder="Mesajınız">{{old('message')}}</textarea>
                </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" id="sendMessageButton">Gönder</button>
            </div>
        </form>
    </div>
    <div class="col-md-4">
        <div class="card-header">
            <div class="card-body">
                Bilgilerim
            </div>
        </div>
        <div class="card-header">
            <div class="card-body">
                Veysel YILDIRIM</br></br>
                +90 534 877 7632</br></br>
                veyselyyildirim@gmail.com</br></br>
                Adnan menderes mahallesi Kıralan Dink mevki Ömer 2 Sitesi D Blok Kat 2 No 10
            </div>

        </div>
    </div>
@endsection
