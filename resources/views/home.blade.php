@extends('layouts.main')
@section('title', 'Cenarium')
@section('content')
<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="GET">
        <input type="text" id="search" class="form-control" name="search" placeholder="Procurar">
    </form>
</div>

<div id="events-container" class="col-md-12">
    @if ($buscar)
    <h2>Buscando por: {{$buscar}}</h2>
    @else
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    @endif
    <div id="cards-container" class="row">
        @foreach ($eventos as $evento)
        <div class="card col-md-3">
            <img src="/img/events/{{ $evento->image }}" alt=" {{ $evento->title }}">
            <div class="card-body">
                <p class="card-date">{{ date('d/m/Y', strtotime($evento->date)) }}</p>
                <h5 class="card-title">{{$evento->title}}</h5>
                <a href="/eventos/{{ $evento->id }}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach

    </div>
    @if (count($eventos) == 0 && $buscar)
    <p>Não foi possível encontrar nenhum evento com '{{ $buscar }}'! <a href="/">Ver todos.</a></p>

    @elseif (count($eventos) == 0)
        <p>Não há eventos disponíveis no momento!</p>
    @endif


</div>
@endsection
