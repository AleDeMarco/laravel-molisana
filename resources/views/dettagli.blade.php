@extends('layouts.app')

@section('title', $formato['titolo'])

@section('content')
  <h1>{{ $formato['titolo'] }}</h1>
  <div class="img-box">
    <img src="{{ $formato['src-h'] }}" alt="{{ $formato['titolo'] }}">
  </div>
  <div class="info">
    <div class="box-info">
      <i class="fas fa-info"></i>
      <p>Tipo di pasta: {!! $formato['tipo'] !!}</p>
    </div>
    <div class="box-info">
      <i class="far fa-clock"></i>
      <p>Tempo di cottura: {!! $formato['cottura'] !!}</p>
    </div>
    <div class="box-info">
      <i class="fas fa-balance-scale-right"></i>
      <p>Peso: {!! $formato['peso'] !!}</p>
    </div>
  </div>
  <div class="container-box">
    <div class="left">
      <div class="description">
        {!! $formato['descrizione'] !!}
      </div>
    </div>
    <div class="right">
      <img src="{{ $formato['src-p'] }}" alt="{{ $formato['titolo'] }}">
    </div>
  </div>
@endsection
