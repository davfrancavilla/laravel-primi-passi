@php
    
    $cards = config("products");


    $cortissima = [];
    $corta = [];
    $lunga = [];

    foreach ($cards as $card) {
        if ($card["tipo"] == "cortissima") {
            $cortissima[] = $card;
        } elseif ($card["tipo"] == "corta") {
            $corta[] = $card;
        } elseif ($card["tipo"] == "lunga") {
            $lunga[] = $card;
        }
    }
@endphp

    @extends('layout.app')
    @section('title', 'Home')
    @section('main')
        <h2>Lunga</h2>
        <div class="container">
            @foreach ($lunga as $card)
            <div class="card">
                <img src="{{$card["src"]}}" alt="{{$card["titolo"]}}">
                <div class="layer">
                    <h4>{{$card["titolo"]}}</h4>
                    <p>{{$card["descrizione"]}}</p>
                </div>
            </div>
        @endforeach
        </div>
        <h2>Corta</h2>
        <div class="container">
            @foreach ($corta as $card)
            <div class="card">
                <img src="{{$card["src"]}}" alt="{{$card["titolo"]}}">
                <div class="layer">
                    <h4>{{$card["titolo"]}}</h4>
                    <p>{{$card["descrizione"]}}</p>
                </div>
            </div>
        @endforeach
        </div>
        <h2>Cortissima</h2>
        <div class="container">
            @foreach ($cortissima as $card)
                <div class="card">
                    <img src="{{$card["src"]}}" alt="{{$card["titolo"]}}">
                    <div class="layer">
                        <h4>{{$card["titolo"]}}</h4>
                        <p>{{$card["descrizione"]}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection