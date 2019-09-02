@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Inscrições Abertas</div>

                <div class="card-body">
                    @if (session('meus eventos'))
                        <div class="alert alert-success" role="alert">
                            {{ session('meus eventos') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <tr class="text-center">
                            <th>Nome</th>
                            <th>cpf</th>                       
                        </tr>
                        @foreach ($users as $usuario)
                        <tr>
                            <td>{{ $usuario->nome }}</td>
                            <td>{{ $usuario->cpf }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
