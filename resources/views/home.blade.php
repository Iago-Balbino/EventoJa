@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center mr-3">
                    <a href="{{route('home')}}" class ="text-dark mr-4">Inscrições Abertas </a>
                    <a href="{{route('index')}}" class ="ml-4">Voltar a Tela Principal</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <tr class="text-center">
                            <th>Tipo Evento</th>
                            <th>Nome</th>
                            <th>Data Inicio</th>
                            <th>Data Fim</th>
                            <th>Local</th>
                            <th>Numero Máximo de Participantes</th>
                            <th>Ação</th>
                        </tr>
                        @foreach ($eventos as $evento)
                        <tr class="text-center">
                            <td>{{ $evento->evento->nome}}</td>
                            <td>{{ $evento->nome }}</td>
                            <td>{{ $evento->data_inicio }}</td>
                            <td>{{ $evento->data_fim }}</td>
                            <td>{{ $evento->local }}</td>
                            <td>{{ $evento->num_max_participantes}}</td>
                            <td><a href="{{route('inscrever', $evento->id)}}" class ="text-dark">
                            {{ $evento->acao}}Inscrever</a></td>

                            {{-- <td>
                                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td> --}}
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
