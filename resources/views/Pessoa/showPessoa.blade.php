@extends('layout.adm')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>{{ __($pessoa->nome) }}</h1>
                </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p><strong>ID: </strong>{{$pessoa->id}}</p>
                        <p><strong>Nome: </strong>{{$pessoa->nome}}</p>
                        <p><strong>Data de nascimento: </strong>{{date('d/m/Y',strtotime($pessoa->dtaNasc))}}</p>
                        <p><strong>Cadastrado em: </strong>{{date('d/m/Y',strtotime($pessoa->created_at))  }}</p>
                        <p><strong>Idade: </strong>{{$pessoa->idade}} anos</p>

                    </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col d-flex justify-content-center mt-2">
                            <a href="{{ route('pessoa.edit',['pessoa' => $pessoa->id]) }}">Editar</a>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <a href="{{ route('pessoa.index') }}"  class="nav-link">Listar Usuarios</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
