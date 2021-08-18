@extends('layout.adm')

@section('content')
    <div class="col ">
        <div class='row '>
            <div class="col-md-12 ">
                <div class="card">
                    @if(count($produtos) == 0 )
                        <p>Não existem cadastros registrados</p>
                    @else
                    <table id="table" class="tb hover dataTable table-striped no-footer" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Valor</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($produtos as $produto )
                            <tr>
                                <td>{{$produto->nome}}</td>
                                <td>{{$produto->valor}}</td>

                                <td>
                                    <div class="row">
                                        <div>
                                            <a class="btn btn-link" href="{{ route('produtos.show',['produto' => $produto->id]) }}">Detalhes</a>
                                        </div>
                                        <div>
                                            <form method="POST" action="{{ route('produtos.destroy',['produto'=>$produto->id]) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-link">Remover</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif

                </div>
                <hr>
                <div class="card-footer">
                    <a href={{route('produtos.create')}}  class="nav-link">Home</a>
                </div>
            </div>
        </div>
    </div>

@endsection
