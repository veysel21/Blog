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
        <h3><p>Bizimle iletişime geçmeye için ne dersin..?</p></h3>

        <form name="sentMessage" id="contactForm" novalidate method="post" action="{{route('contact.post')}}">
            @csrf
            <div class="control-group">
                <div class="form-group controls">
                    <label>İsim Soyisim</label>
                    <input type="text" class="form-control" value="{{old('name')}}" placeholder="İsim ve Soyisminiz" name="name" required>
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
                        <option>Bilgi</option>
                        <option>Destek</option>
                        <option>Genel</option>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group controls">
                    <label>Mesajınız</label>
                    <textarea rows="5" name="message" class="form-control"  placeholder="Mesajınız">{{old('email')}}</textarea>
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
        <div class="card card-default">
            <div class="card-body">
                Panel
            </div>
            Adres: sadasdasd
        </div>
    </div>
@endsection
