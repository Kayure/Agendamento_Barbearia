<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use App\Models\Eixo;
use Illuminate\Support\Facades\Auth;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eixos = Eixo::orderBy('nome')->get();
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
        $eixos = Eixo::orderBy('nome')->get();
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

       
        $event = new Evento();

        $event->title = $request->title;
        $event->start = $request->start;
        $event->end = $request->end;
        $event->color = $request->color;
        $event->description = $request->description;
        $event->user_id = Auth::user()->id;

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
    public function destroy(Evento $evento)
    {
        //
    }


    //FUNÇÃO QUE ERA PRA CARREGAR EVENTOS MAS N FUNCIONOU
    public function loadEvents(Request $request)
    {

        //FUNÇÃO QUE CARREGA APENAS ALGUMAS DATAS DO BANCO
        $returnedColumns = ['id', 'title', 'start', 'end', 'color', 'description'];
        $start = (!empty($request->start)) ? ($request->start) : ('');
        $end = (!empty($request->end)) ? ($request->end) : ('');
         /** Retornaremos apenas os eventos ENTRE as datas iniciais e finais visiveis no calendário */
        $events = Evento::whereBetween('start', [$start, $end])->get($returnedColumns);

       



        //FUNÇÃO QUE PUXA TUDO DO BANCO

      //  $events = Evento::all();

        return response () ->json ($events);

        




    }
}
