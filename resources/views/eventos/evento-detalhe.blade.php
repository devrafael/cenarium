@extends('layouts.main')
@section('title', 'Cenarium')
@section('content')
<h1 id="titulo">
    Detalhes do evento
</h1>
    <div class="col-md-10 off-set-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{$evento->image}}" class="image-fluid" alt="{{ $evento->title }}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{$evento->title}}</h1>
                <p class="event-city">
                    <ion-icon name="location-outline"></ion-icon>
                    {{ $evento->city }}
                </p>
                <p class="events-participantes">
                    <ion-icon name="people-outline"></ion-icon>
                    {{ count($evento->users) }} Participante(s)
                </p>
                <p class="event-owner">
                    <ion-icon name="star-outline"></ion-icon>
                    Criado por: {{ $donoEvento }}
                </p>
                <form id="btn-inscrever-container" action="/eventos/inscrever/{{$evento->id}}" method="POST">
                    @csrf
                    <a
                    href="/eventos/inscrever/{{$evento->id}}"
                    class="btn btn-primary"
                    d="event-submit"
                    onclick="event.preventDefault(); this.closest('form').submit();"
                    >Confirmar Presença
                    </a>
                </form>
                <h3>O evento conta com:</h3>
                <ul id="items-list">
                    @foreach ($evento->items as $item)
                        <li><ion-icon name="play-outline"></ion-icon> <span>{{$item}}</span></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12" id="description-container">
                <h3>Sobre o evento: </h3>
                <p class="event-description">{{$evento->description}}</p>
            </div>
        </div>
    </div>
@endsection
