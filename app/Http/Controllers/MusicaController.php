<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Musicas;
use Session;
use Redirect;


class MusicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.cadastroMusica');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
          

          $file_img = $request->file('arquivo_img_album');
          $file_musica = $request->file('arquivo_musica');

          $file_name_img = 'Album-' . time() . '.' . $file_img->getClientOriginalExtension();
          $file_name_musica = 'Musica-' . time() . '.' .$file_musica->getClientOriginalExtension();

          $location = public_path('albuns/' . $file_name_img);
          $location1 = public_path('audios/' . $file_name_musica);

          $file_img->move($location,$file_name_img);
          $file_musica->move($location1,$file_name_musica);

          
          $time = date('Y-m-d');

          $musica = new Musicas();

          $musica->nome = $request->nome;
          $musica->banda = $request->banda;
          $musica->album = $request->album;
          $musica->cantor = $request->cantor;
          $musica->id_arquivo_musica = $location1;
          $musica->id_arquivo_img = $location;
          $musica->created_at = $time;
          $musica->updated_at = $time;
          $musica->save();

          Session::put('alert', 'OK');
          return Redirect::to( route('cadastroMusica') );
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
