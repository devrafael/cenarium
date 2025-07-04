@extends('layouts.main')
@section('title', 'Criar Evento')
@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Criar Evento</h1>
        <form action="/eventos/criar" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Capa do evento:</label>
                <input type="file" id="image" name="image" class="form-control-file" required>
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" required>
            </div>
            <div class="form-group">
                <label for="date">Data do evento:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Cidade do evento" required>
            </div>
            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control" required>
                    <option value="0">Não</option>
                    <option value="1">Sim</option>

                </select>
            </div>
            <div class="form-group">
                <label for="title">Descrição do Evento:</label required>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            <div class="form-group">
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
            <input type="submit" class="btn btn-primary" id="btn-criar-evento" value="Criar Evento">
        </form>
    </div>
@endsection
