<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Models\Professor;
use App\Models\Disciplina;
use App\Models\Docencia;
use App\Models\Evento;
use App\Facades\UserPermissions;


class TarefasController extends Controller
{


    public function index()
    {
        // if(!UserPermissions::isAuthorized('tarefas.index')) {
        //     return response()->view('templates.restrito');
        // }

        $data = Evento::with(['user'])->orderBy('start')->get();






        return view('tarefas.index', compact(['data']));
    }

    public function create(Request $request)
    {
    }

    public function store(Request $request)
    {


    }

    public function finalizar(Request $request)
    {


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $data = Evento::find($id);




        if (isset($item)) {
            $item->finished == 1;
        } else {

            return view('tarefas.index');
        }
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
        $obj = Evento::find($id);

        if (isset($obj)) {
            $obj->delete();
        } else {
            $msg = "Evento";
            $link = "tarefas.index";
            return view('erros.id', compact(['msg', 'link']));
        }

        return redirect()->route('tarefas.index');
    }
}
