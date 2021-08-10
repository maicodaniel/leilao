@extends('layout.adm')

@section('content')
    <div class="col ">
        <div class='row '>
            <div class="col-md-12 ">
                <div class="card">
                    <table id="table" class="tb hover dataTable table-striped no-footer" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Data de nascimento</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pessoa as $pessoas )
                            <tr>
                                <td>{{$pessoas->nome}}</td>
                                <td>{{date('d/m/Y',strtotime($pessoas->dtaNasc))}}</td>

                                <td>
                                    <div class="row">
                                        <div>
                                            <a class="btn btn-link" href="{{ route('pessoa.show',['pessoa' => $pessoas->id]) }}">Detalhes</a>
                                        </div>
                                        <div>
                                            <form method="POST" action="{{ route('pessoa.destroy',['pessoa'=>$pessoas->id]) }}">
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
                </div>
                <hr>
                <div class="card-footer">
                    <a href=#  class="nav-link">Home</a>
                </div>
            </div>
        </div>
    </div>

@endsection
