<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Servico;

class ServicosController extends Controller {



    public function index() {

        $dados = Servico::all();


        // Passa um array "dados" com os "clientes" e a string "clínicas"
        return view('servicos.index', compact(['dados']));
        // return view('cliente.index')->with('dados', $dados)->with('clinica', $clinica);
    }

    public function create() {

        return view('servicos.create');
    }

    public function store(Request $request) {

        self::validation($request);

        Servico::create(['nome' =>  mb_strtoupper($request->nome, 'UTF-8')]);
        Servico::create(['valor' =>  mb_strtoupper($request->valor, 'UTF-8')]);


        return redirect()->route('servicos.index');


    }

    public function validation(Request $request) {




    }

    public function show($id) {

        $dados = Servico::find($id);

        if (!isset($dados)) {
            return "<h1>ID: $id não encontrado!</h1>";
        }

        return view('servicos.show', compact('dados'));
    }

    public function edit($id) {

        $dados = Servico::find($id);

        if (!isset($dados)) {
            return "<h1>ID: $id não encontrado!</h1>";
        }

        return view('servicos.edit', compact('dados'));
    }

    public function update(Request $request, $id) {

        self::validation($request);

        $obj = Servico::find($id);

        if (!isset($obj)) {
            return "<h1>ID: $id não encontrado!";
        }

        //PREENCHE OS CAMPOS COM OS DADOS DO CAMPO SELECIONADO
        $obj->fill([
            'nome' => mb_strtoupper($request->nome, 'UTF-8'),

        ]);

        $obj->save();

        return redirect()->route('servicos.index');
    }

    public function destroy($id) {

        $obj = Servico::find($id);

        if (!isset($obj)) {
            return "<h1>ID: $id não encontrado!";
        }

        $obj->destroy($id);

        return redirect()->route('servicos.index');
    }
}
