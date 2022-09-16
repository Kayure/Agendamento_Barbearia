<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Servicos", 'rota' => "servicos.create"])
<!-- Preenche o conteúdo da seção "titulo" -->
@section('titulo') Servicos @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div class="col">

            <!-- Utiliza o componente "datalist" criado -->
            <x-servicoDatalist
                :header="['ID', 'NOME','PREÇO','AÇÕES']"
                :data="$dados"
                :hide="[true, false, false, true]"
            />

        </div>
    </div>
@endsection
