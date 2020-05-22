<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PessoaValidation;

use App\models\Pessoa;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pessoas', ['pessoas' => Pessoa::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-pessoa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     *
     */
    public function store(PessoaValidation $request)
    {
        $request->validated();

        $pessoa = new Pessoa();
        $pessoa->nome = $request->nome;
        $pessoa->cpf = $request->cpf;
        $pessoa->email = $request->email;
        $pessoa->data_nasc = $request->data_nasc;
        $pessoa->nacionalidade = $request->nacionalidade;

        $pessoa->save();


        return redirect()->route('pessoas.index')->with('success', 'Pessoa criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pessoa = Pessoa::find($id);
        return view('edit-pessoa', compact('pessoa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PessoaValidation $request, Pessoa $pessoa)
    {
        $request->validated();

        $pessoa->update($request->all());

        return redirect()->route('pessoas.index')->with('success', 'Pessoa alterada com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoa $pessoa)
    {
        $pessoa->delete();

        return redirect()->route('pessoas.index')->with('success', 'Pessoa removida com sucesso!');
    }
}
