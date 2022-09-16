<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eixo;
use App\Models\User;

class ClienteController extends Controller {



    public function index() {

        $dados = User::all();


        // Passa um array "dados" com os "clientes" e a string "clínicas"
        return view('clientes.index', compact(['dados']));
        // return view('cliente.index')->with('dados', $dados)->with('clinica', $clinica);
    }

    public function create() {


    }

    public function store(Request $request) {



    }

    public function validation(Request $request) {


    }

    public function show($id) {

        $dados = User::find($id);

        if (!isset($dados)) {
            return "<h1>ID: $id não encontrado!</h1>";
        }

        return view('eixos.show', compact('dados'));
    }

    public function edit($id) {


    }

    public function update(Request $request, $id) {



    }

    public function destroy($id) {

        $obj = Eixo::find($id);

        if (!isset($obj)) {
            return "<h1>ID: $id não encontrado!";
        }

        $obj->destroy($id);

        return redirect()->route('eixos.index');
    }
}
