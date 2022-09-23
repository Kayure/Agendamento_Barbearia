<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Eixos", 'rota' => "clientes.create"])
<!-- Preenche o conteúdo da seção "titulo" -->
@section('titulo') Eixos @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div class="col">

            <!-- Utiliza o componente "datalist" criado -->
            <x-clienteDatalist
                :header="['ID', 'NOME','EMAIL','AÇÕES']"
                :data="$dados"
                :hide="[true, false, false, true]"
            />

        </div>
    </div>
@endsection
