@extends('layouts.main')

@section('head')
    <title>Home</title>
    <link href="{{ asset('vendor/materialize/css/materialize.css') }}" rel="stylesheet">
    <style>
    /* pantallas grandes */
    @media (min-width: 1500px) {
      .container {
          min-width: 1500px ; 
         }
    }
    </style>
@endsection
@section('content')
  {{-- carousel --}}
  @include('home.carrousel_principal')
  {{-- destacados --}}
  @include('home.destacados')
  {{-- marcas --}}
  @include('home.marcas_home')
  {{-- estilos --}}
  @include('home.estilos')
  {{-- publicidad --}}
  @include('home.publicidad')
  @if (isset($nueva_publicacion))
      {{-- agregar modal de felicitaciones  --}}
      @include('modales.modal_felicitaciones')
  @endif

  {{-- modal_login --}}
  @include('modales.modal_login_registro')
@endsection