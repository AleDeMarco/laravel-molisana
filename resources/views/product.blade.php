@extends('layouts.app')

@section('title', 'I nostri prodotti')

@section('content')
  <div class="card-container">
    @foreach ($tipologie as $tipo)
    <div class="card">
      <img src="{{ $tipo['src'] }}" alt="{{ $tipo['titolo'] }}">
    </div>
    @endforeach
  </div>
@endsection
