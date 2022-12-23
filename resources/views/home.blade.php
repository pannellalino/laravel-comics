@php
    $cards = config('db.cards')
@endphp

@extends('layouts.main')

@section('content')


<main>
    <div class="container">
        @foreach ($cards as $card)
          <div class="card">
            <img src="{{ $card['thumb'] }}" alt="">
            <h4>{{ $card['series'] }}</h4>
          </div>
        @endforeach
      <div class="button">
        <button><a href="#">LOAD MORE</a></button>
      </div>
    </div>
  </main>


@endsection
