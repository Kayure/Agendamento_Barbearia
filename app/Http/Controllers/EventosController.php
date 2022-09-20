<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use App\Models\Eixo;



class EventosController extends Controller
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

        // $conn = mysqli_cFonnect($DB_HOST, $usuario, $senha, $dbname);

        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
        $color = filter_input(INPUT_POST, 'color', FILTER_SANITIZE_STRING);
        $start = filter_input(INPUT_POST, 'start', FILTER_SANITIZE_STRING);
        $end = filter_input(INPUT_POST, 'end', FILTER_SANITIZE_STRING);

        if (!empty($title) && !empty($color) && !empty($start) && !empty($end)) {
            //Converter a data e hora do formato brasileiro para o formato do Banco de Dados
            $data = explode(" ", $start);
            list($date, $hora) = $data;
            $data_sem_barra = array_reverse(explode("/", $date));
            $data_sem_barra = implode("-", $data_sem_barra);
            $start_sem_barra = $data_sem_barra . " " . $hora;

            $data = explode(" ", $end);
            list($date, $hora) = $data;
            $data_sem_barra = array_reverse(explode("/", $date));
            $data_sem_barra = implode("-", $data_sem_barra);
            $end_sem_barra = $data_sem_barra . " " . $hora;

            $result_events = "INSERT INTO events (title, color, start, end) VALUES ('$title', '$color', '$start_sem_barra', '$end_sem_barra')";


            //Verificar se salvou no banco de dados através "mysqli_insert_id" o qual verifica se existe o ID do último dado inserido
            if (isset($data)) {
                $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>O Evento Cadastrado com Sucesso<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                header("Location: index.php");
            } else {
                $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao cadastrar o evento <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                header("Location: index.php");
            }
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao cadastrar o evento <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
            header("Location: index.php");
        }

        return view('docencias.index');
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

        $returnedColumns = ['id', 'title', 'start', 'end', 'color', 'description'];

        $start = (!empty($request->start)) ? ($request->start) : ('');
        $end = (!empty($request->end)) ? ($request->end) : ('');



        /** Retornaremos apenas os eventos ENTRE as datas iniciais e finais visiveis no calendário */
        $events = Evento::whereBetween('start', [$start, $end])->get($returnedColumns);

        return response()->json($events);
    }
}
