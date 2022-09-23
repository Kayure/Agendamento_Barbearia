<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Eixo;
use Illuminate\Support\Facades\Auth;
use App\Facades\UserPermissions;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('nome')->get();
        $data = Evento::with(['eixo'])
            ->orderBy('nome')->get();
        return view('evento.index', compact(['eixos']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eixos = User::orderBy('nome')->get();
        return view('middleware.blade', compact(['eixos']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    //    $_GET['date'];
    //$start = new \DateTime($_GET['date'], new \DateTimeZone('America/Sao_Paulo'));

        //DEFINE A HORA DE ATENDIMENTO
        $horaAtendimento =1;

        //DEFINE QUE A HORA FINAL É A HORA INICIAL + 1 HORA
        //$end =$start->modify('+'.$horaAtendimento.'hours');


        $event = new Evento();

        //NEM USEI




        $event->title = $request->title;
        $event->start = $request->start;
        $event->end = $request->end;
        // $event->end = $request->$end;
        $event->color = $request->color;
        $event->description = $request->description;
        $event->user_id = Auth::user()->id;
        $event->finished = 0;

        $event->save();

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     *
     */
    public function destroy($id)
    {
        if(!UserPermissions::isAuthorized('eventos.destroy')) {
            return response()->view('templates.restrito');
        }

        $obj = Evento::find($id);

        if (isset($obj)) {
            $obj->delete();
        } else {
            $msg = "Curso";
            $link = "cursos.index";
            return view('erros.id', compact(['msg', 'link']));
        }

        return redirect()->route('tarefas.index');
    }


    //FUNÇÃO QUE ERA PRA CARREGAR EVENTOS MAS N FUNCIONOU
    public function loadEvents( Request $request )
    {

        {


            //FUNÇÃO QUE CARREGA APENAS ALGUMAS DATAS DO BANCO
             $returnedColumns = ['id', 'title', 'start', 'end', 'color', 'description'];
             $start = (!empty($request->start)) ? ($request->start) : ('');
             $end = (!empty($request->end)) ? ($request->end) : ('');
              /** Retornaremos apenas os eventos ENTRE as datas iniciais e finais visiveis no calendário */
             $events = Evento::whereBetween('start', [$start, $end])->get($returnedColumns);







            //FUNÇÃO QUE PUXA TUDO DO BANCO
            //$events = Evento::all();

            return response () ->json ($events);






        }






    }
}
