<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artigo;

class ArtigoController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artigos = Artigo::all();
        return view('artigo.index')->with('artigos',$artigos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('artigo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artigos = new Artigo();

        $artigos->codigo = $request->get('codigo');
        $artigos->nome = $request->get('nome');
        $artigos->genero = $request->get('genero');
        $artigos->data = $request->get('data');

        $artigos->save();

        return redirect('/artigos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artigo = Artigo::find($id);
        return view('artigo.edit')->with('artigo',$artigo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artigo = Artigo::find($id);

        $artigo->codigo = $request->get('codigo');
        $artigo->nome = $request->get('nome');
        $artigo->genero = $request->get('genero');
        $artigo->data = $request->get('data');

        $artigo->save();

        return redirect('/artigos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artigo = Artigo::find($id);
        $artigo->delete();
        return redirect('/artigos');
    }
}
