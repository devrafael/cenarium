@extends('layouts.main')
@section('title', 'Cenarium')
@section('content')


    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1 id="dashboard-title">Eventos Criados</h1>
    </div>

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        @if (count($eventosUsuario) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Participantes</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($eventosUsuario as $eventoUsuario)
                        <tr>
                            <td scropt="row">{{ $loop->index + 1 }}</td>
                            <td><a href="/eventos/{{ $eventoUsuario->id }}">{{ $eventoUsuario->title }}</a></td>
                            <td>{{ count($eventoUsuario->users) }}</td>
                            <td>
                                <a href="/eventos/editar/{{ $eventoUsuario->id }}" class="btn btn-info edit-btn"
                                    id="btn-edit"><ion-icon name="create-outline"></ion-icon>Editar
                                </a>
                                <form action="/eventos/{{ $eventoUsuario->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-btn" id="btn-delete">
                                        <ion-icon name="trash-outline"></ion-icon>Deletar
                                    </button>
                                </form>

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Você não possui nenhum evento! <a href="/eventos/form">Crie um agora mesmo.</a></p>
        @endif
    </div>


    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1 id="dashboard-title">Eventos Inscritos</h1>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        @if (count($eventsAsParticipant) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Participantes</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($eventsAsParticipant as $eventoUsuario)
                        <tr>
                            <td scropt="row">{{ $loop->index + 1 }}</td>
                            <td><a href="/eventos/{{ $eventoUsuario->id }}">{{ $eventoUsuario->title }}</a></td>
                            <td>{{ count($eventoUsuario->users) }}</td>
                            <td><a href="">Cancelar Inscrição</a></td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Ainda não foi realizada a inscrição de nenhum evento. <a href="/">Inscreva-se agora</a>!</p>
        @endif
    </div>

@endsection
