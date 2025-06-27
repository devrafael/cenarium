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
                    X Participantes
                </p>
                <p class="event-owner">
                    <ion-icon name="start-outline"></ion-icon>
                    Dono do Evento
                </p>
                <a href="" class="btn btn-primary" id="event-submit">Confirmar Presença</a>
            </div>
            <div class="col-md-12" id="description-container">
                <h3>Sobre o evento: </h3>
                <p class="event-description">{{$evento->description}}</p>
            </div>
        </div>
    </div>
@endsection
