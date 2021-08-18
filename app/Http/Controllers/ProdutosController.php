<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produtos::all();
        return view('Produtos\\showAllProdutos', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Produtos\\createProduto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produtos();
        $produto->nome = $request->nome;

        $produto->valor = $request->valor;

        $produto->save();

        return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produtos  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produtos $produto)
    {
        return view('Produtos\\showProduto', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function edit(Produtos $produtos)
    {
        return view('Produtos.editProduto', ['produto' => $produtos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produtos $produtos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produtos $produtos)
    {
        //
    }
}
