@extends('layouts.main')
@section('title', 'Editar Evento')
@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Editar Evento</h1>
        <form action="/eventos/atualizar/{{ $evento->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="image">Capa do evento:</label>
                <input type="file" id="image" name="image" class="form-control-file">
                <p>Capa atual:</p>
                <img src="/img/events/{{ $evento->image }}" alt="{{ $evento->image }}" class="img-preview">
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento"
                    required
                    value="{{ $evento->title }}"
                    >
            </div>
            <div class="form-group">
                <label for="date">Data do evento:</label>
                <input type="date" class="form-control" id="date" name="date" required value="{{ $evento->date }}">
            </div>
            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Cidade do evento"
                    required
                    value="{{ $evento->city }}"
                    >
            </div>
            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control" required value="{{ $evento->private }}">
                    <option value="0">Não</option>
                    <option value="1" {{ $evento->private == 1 ? "selected='selected'" : "" }}>Sim</option>

                </select>
            </div>
            <div class="form-group">
                <label for="title">Descrição do Evento:</label required>
                <textarea name="description" id="description" class="form-control"
                 placeholder="O que vai acontecer no evento?"
                 > {{ $evento->description }} </textarea>
            </div>
            <div class="form-group" >
                <label for="title">Adicione itens de infraestrutura:</label>
                <div class="from-group">
                    <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
                </div>
                <div class="from-group">
                    <input type="checkbox" name="items[]" value="Palco"> Palco
                </div>
                <div class="from-group">
                    <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja grátis
                </div>
                <div class="from-group">
                    <input type="checkbox" name="items[]" value="Comida grátis"> Comida grátis
                </div>
                <div class="from-group">
                    <input type="checkbox" name="items[]" value="Brindes"> Brindes
                </div>
            </div>
            <input type="submit" class="btn btn-primary" id="btn-criar-evento" value="Editar Evento">
        </form>
    </div>
@endsection
