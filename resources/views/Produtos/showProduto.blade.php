@extends('layout.adm')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>{{ __($produto->nome) }}</h1>
                </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p><strong>ID: </strong>{{$produto->id}}</p>
                        <p><strong>Nome: </strong>{{$produto->nome}}</p>
                        <p><strong>Data de nascimento: </strong>{{date('d/m/Y',strtotime($produto->valor))}}</p>
                        <p><strong>Cadastrado em: </strong>{{date('d/m/Y',strtotime($produto->created_at))  }}</p>

                    </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col d-flex justify-content-center mt-2">
                            <a href="{{ route('produtos.edit',['produto' => $produto->id]) }}">Editar</a>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <a href="{{ route('produtos.index') }}"  class="nav-link">Listar Produtos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
