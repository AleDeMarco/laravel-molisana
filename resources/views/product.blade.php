@extends('layouts.app')

@section('title', 'I nostri prodotti')

@section('content')
  @foreach ($formati as $tipo => $formato)
    <h2>{{ $tipo }}</h2>
    <div class="card-container">
      @foreach ($formato as $key => $pasta)
        <div class="card">
          <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
          <div class="overlay">
            <a href="{{ route('pagina-dettagli', ['id' => $key]) }}"></a>
            <i class="fas fa-utensils"></i>
          </div>
        </div>
      @endforeach
    </div>
  @endforeach
@endsection
