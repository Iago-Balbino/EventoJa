@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header text-center">
                <table class="table table-bordered">
                    <tr class="text-center">
                        <th>Nome</th>
                        <th>cpf</th>                       
                    </tr>
                    @foreach ($principal as $usuario)
                    <tr class="text-center">
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->cpf }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            
            <div class="card-body text-center">
                <a href="#" class="mr-5 text-dark">Meus Eventos</a>
                <a href="{{route('home')}}" class="mr-5 text-dark">Inscrições Abertas</a>
                <a href="{{route('buscar')}}" class="mr-5 text-dark">Atualizar dados</a>
            </div>
             {{-- <table class="table table-bordered">
                    <tr class="text-center">
                        <th>Nome</th>
                        <th>cpf</th>                       
                    </tr>
                    @foreach ($principal as $usuario)
                    <tr class="text-center">
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->cpf }}</td>
                    </tr>
                    @endforeach
                </table> --}}
        </div>
    <div>
</div>
@endsection
