@extends('layouts.main')

@section('container')
    <h1>Profil Developer</h1>
    <img src="img/{{ $profil }}" alt="{{ $nama }}" width="200" class="img-thumnail rounded-circle">
    <h3>Nama : {{ $nama }}</h3>
    <h3>Email : {{ $email }}</h3>
@endsection
