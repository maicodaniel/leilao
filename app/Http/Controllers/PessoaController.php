<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = Pessoa::all();
        return view('Pessoa\\showAllPessoa', ['pessoa' => $pessoas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pessoa\\createPessoa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = new Pessoa();
        $user->nome = $request->name;

        $user->dtaNasc = $request->dataNascimento;

        $user->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoa $pessoa)
    {
        var_dump($pessoa);
        $usuario = array();
        $usuario['id'] = $pessoa->id;
        $usuario['nome'] = $pessoa->nome;

        $usuario['dtaNasc'] = $pessoa->dtaNasc;

        $usuario['created_at'] = $pessoa->created_at;
        $date1 = Carbon::create($pessoa->dtaNasc);
        $date2 = Carbon::now();
        $usuario['idade'] = $date1->diffInYears($date2);
        $obj = (Object)$usuario;

        return view('Pessoa\\showPessoa', ['pessoa' => $obj]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoa $pessoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoa $pessoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoa $pessoa)
    {
        $pessoa->delete();
        return redirect()->route('pessoa.index');
    }
}
