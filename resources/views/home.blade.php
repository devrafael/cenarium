@extends('layouts.main')
@section('title', 'Cenarium')
@section('content')
<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" class="form-control" name="search" placeholder="Procurar">
    </form>
</div>

<div id="events-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach ($eventos as $evento)
        <div class="card col-md-3">
            <img src="/img/banner.png" alt=" {{ $evento->title }}">
            <div class="card-body">
                <p class="card-date">23/06/2025</p>
                <h5 class="card-title">{{$evento->title}}</h5>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>



</div>
@endsection
