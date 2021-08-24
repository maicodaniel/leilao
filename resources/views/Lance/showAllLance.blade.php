@extends('layout.adm')

@section('content')
    <div class="col ">
        <div class='row '>
            <div class="col-md-12 ">
                <div class="card">
                    @if(count($lances) == 0 )
                        <p>Não existem cadastros registrados</p>
                    @else
                    <table id="table" class="tb hover dataTable table-striped no-footer" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th>Usuario</th>
                                <th>Valor</th>
                                <th>Hora</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lances as $lance )
                            <tr>
                                <td>{{$lance->nomeProduto}}</td>
                                <td>{{$lance->nomePessoa}}</td>
                                <td>{{$lance->valor}}</td>
                                <td>{{$lance->hora}}</td>

                                <td>
                                    <div class="row">
                                        <div>
                                            <a class="btn btn-link" href="{{ route('lance.show',['lance' => $lance->id]) }}">Detalhes</a>
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
                    <a href={{route('pessoa.index')}}  class="nav-link">Home</a>
                </div>
            </div>
        </div>
    </div>

@endsection
