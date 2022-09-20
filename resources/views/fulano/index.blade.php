<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Define uma seção "titulo" -->
    <title>Barbearia Seu Pedro @yield('titulo')</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.png" />

    <!-- Bootstrap 5 / CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='css/core/main.min.css' rel='stylesheet' />
    <link href='css/daygrid/main.min.css' rel='stylesheet' />
    <script src='js/core/main.min.js'></script>
    <script src='js/interaction/main.min.js'></script>
    <script src='js/daygrid/main.min.js'></script>
    <script src='js/core/locales/pt-br.js'></script>

    <!-- Inclusao do Full Calendar-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.js"></script>



</head>

<body>
    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="{{ route('dashboard') }}" class="navbar-brand ms-sm-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="3 6" fill="currentColor"
                    class="bi bi-scissors" viewBox="0 0 16 16">
                    <path
                        d="M3.5 3.5c-.614-.884-.074-1.962.858-2.5L8 7.226 11.642 1c.932.538 1.472 1.616.858 2.5L8.81 8.61l1.556 2.661a2.5 2.5 0 1 1-.794.637L8 9.73l-1.572 2.177a2.5 2.5 0 1 1-.794-.637L7.19 8.61 3.5 3.5zm2.5 10a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zm7 0a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z" />
                </svg>
                <span class="ms-3 fs-5">Seu Pedro - Agendamentos </span>
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#itens">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                    class="bi bi-menu-button-wide" viewBox="0 0 16 16">
                    <path
                        d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v2A1.5 1.5 0 0 1 14.5 5h-13A1.5 1.5 0 0 1 0 3.5v-2zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-13z" />
                    <path
                        d="M2 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm10.823.323-.396-.396A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z" />
                </svg>

            </button>



            <div class="collapse navbar-collapse" id="itens">

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown ps-2">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-person" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            </svg>
                            <path fill-rule="evenodd"
                                d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            <path fill-rule="evenodd"
                                d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                            </svg>
                            <span class="ps-1 text-white">Barbeiros</span>

                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('professores.index') }}" class="dropdown-item">Pedro</a></li>
                            <li><a href="{{ route('disciplinas.index') }}" class="dropdown-item">Fulano</a></li>


                        </ul>
                    </li>
                    <li class="nav-item dropdown ps-2">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-gear-fill" viewBox="0 0 16 16">
                                <path
                                    d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                            </svg>
                            <span class="ps-1 text-white">Configurações</span>

                        </a>
                        <ul class="dropdown-menu">

                            <li><a href="{{ route('docencias.index') }}" class="dropdown-item">Disciplina / Professor
                                </a></li>
                            <li><a href="{{ route('servicos.index') }}" class="dropdown-item">Cortes e Servicos</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown ps-2">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-coin" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z" />
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
                            </svg>
                            <span class="ps-1 text-white">Financeiro </span>

                        </a>


                        <ul class="dropdown-menu">
                            <li><a href="{{ route('clientes.index') }}" class="dropdown-item">Cientes</a></li>

                            <li><a href="{{ route('cursos.index') }}" class="dropdown-item">Cursos</a></li>


                        </ul>
                    </li>
                    {{-- COLOCAR AQUI O BOTAO PRA SAIR --}}
                    <li class="nav-item ps-2 me-3">
                        <form method="POST" action="{{ route('logout') }}" id="form">
                            @csrf
                            <a nohref style="cursor:pointer" class="nav-link"
                                onclick="document.getElementById('form').submit()">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF"
                                    class="bi bi-door-closed-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>
                                <span class="ps-1 text-white">Sair</span>
                            </a>
                        </form>
                    </li>


                </ul>
            </div>
        </div>
    </nav>

    {{-- INCIALIZAÇÃO DO CALENDARIO --}}
    <div class="container">
        <div id="agenda" data-route-load-events="{{ route('routeLoadEvents') }}"
            data-route-load-store="{{ route('routeEventStore') }}">

        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modalCalendar" tabindex="-1" role="dialog" aria-labelledby="titleModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="titleModal">Escolha um horário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label for="title">Tipo de serviço</label>
                            <input type="text" class="form-control" name="title" id="title"
                                aria-describedby="" placeholder="Corte/Barba/Sobrancelha">
                            <small id="helpId" class="form-text text-muted"> Escolha um horário </small>
                        </div>









                        <!-- Modal
                        <div class="row">
                            <div class="col mb-3">
                                <div
                                    class="form-check form-check-inline @if ($errors->has('radio')) is-invalid @endif p-0 m-0 ">
                                    <input class="btn-check" type="radio" name="radio" id="08"
                                        value="08">
                                    <label class="btn btn-outline-dark" for="08">08:00</label>
                                </div>
                                <div
                                    class="form-check form-check-inline @if ($errors->has('radio')) is-invalid @endif p-0 m-0 ">
                                    <input class="btn-check" type="radio" name="radio" id="09"
                                        value="09">
                                    <label class="btn btn-outline-dark" for="09">09:00</label>
                                </div>
                                <div
                                    class="form-check form-check-inline @if ($errors->has('radio')) is-invalid @endif p-0 m-0 ">
                                    <input class="btn-check" type="radio" name="radio" id="10"
                                        value="10">
                                    <label class="btn btn-outline-dark" for="10">10:00</label>
                                </div>
                                <div
                                    class="form-check form-check-inline @if ($errors->has('radio')) is-invalid @endif p-0 m-0 ">
                                    <input class="btn-check" type="radio" name="radio" id="11"
                                        value="11">
                                    <label class="btn btn-outline-dark" for="11">11:00</label>
                                </div>
                                <div
                                    class="form-check form-check-inline @if ($errors->has('radio')) is-invalid @endif p-0 m-0 ">
                                    <input class="btn-check" type="radio" name="radio" id="14"
                                        value="14">
                                    <label class="btn btn-outline-dark" for="14">14:00</label>
                                </div>
                                <div
                                    class="form-check form-check-inline @if ($errors->has('radio')) is-invalid @endif p-0 m-0 ">
                                    <input class="btn-check" type="radio" name="radio" id="15"
                                        value="15">
                                    <label class="btn btn-outline-dark" for="15">15:00</label>
                                </div>
                                <div
                                    class="form-check form-check-inline @if ($errors->has('radio')) is-invalid @endif p-0 m-0 ">
                                    <input class="btn-check" type="radio" name="radio" id="16"
                                        value="16">
                                    <label class="btn btn-outline-dark" for="16">16:00</label>
                                </div>
                                <div
                                    class="form-check form-check-inline @if ($errors->has('radio')) is-invalid @endif p-0 m-0 ">
                                    <input class="btn-check" type="radio" name="radio" id="17"
                                        value="17">
                                    <label class="btn btn-outline-dark" for="17">17:00</label>
                                </div>
                                @if ($errors->has('radio'))
<div class='invalid-feedback'>
                                        {{ $errors->first('radio') }}
                                    </div>
@endif
                            </div>
                        </div>
                        -->

                        <div class="form-group">
                            <label for="description">Observação</label>
                            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                        </div>

                        <!-- start select -->
                        <div class="col-span-6 sm:col-span-3">
                            <label for="timeSesion"
                                class="block text-sm font-medium leading-5 text-gray-700">Duração</label>
                            <select v-model="form.session" id="timeSesion"
                                class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                <option value="900">15 minutos</option>
                                <option value="1800">30 minutos</option>
                                <option value="3600">1 hora</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="start">Iniciar</label>
                            <input type="datetime-local" class="form-control date-time" name="start"
                                id="start">
                        </div>

                        <div class="form-group">
                            <label for="end">Fim</label>
                            <input type="datetime-local" class="form-control date-time" name="end"
                                id="end">
                        </div>

                        <div class="form-group">
                            <label for="color">Cor</label>
                            <input type="color" class="form-control" name="color" id="color"
                                aria-describedby="helpId">
                        </div>




                    </form>
                </div>



                <div class="modal-footer">
                    <button type="button" class="btn btn-success saveEvent" id="btnSalvar">Salvar</button>
                    <button type="button" class="btn btn-warning" id="btnEditar">Editar</button>
                    <button type="button" class="btn btn-danger deleteEvent" id="btnExcluir">Excluir</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            margin: 40px 10px;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #agenda {
            max-width: 900px;
            margin: 0 auto;
        }
    </style>

    <div class="container py-4">
        <div class="row">
            <div class="col">
                <h3 class="display-7 text-secondary d-none d-md-block"><b>{{ $titulo }}</b></h3>
            </div>
            @if (isset($rota))
                <div class="col d-flex justify-content-end">

                    <a href="{{ route($rota) }}" class="btn btn-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF"
                            class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                        </svg>
                        &nbsp; Adicionar
                    </a>
                </div>
            @endif
        </div>
        <hr>
        @yield('conteudo')
    </div>
    <nav class="navbar fixed-bottom navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="text-white fw-light">&copy; Luccas Kayure Crisanto</span>
        </div>
    </nav>
</body>




<div class="modal fade" tabindex="-1" id="infoModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary">Mais Informações</h5>
                <button type="button" class="btn-close" data-bs-dismiss="infoModal" onclick="closeInfoModal()"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body text-secondary">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-block align-content-center"
                    onclick="closeInfoModal()">
                    OK
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="removeModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger">Operação de Remoção</h5>
                <button type="button" class="btn-close" data-bs-dismiss="removeModal" onclick="closeRemoveModal()"
                    aria-label="Close"></button>
            </div>
            <input type="hidden" id="id_remove">
            <div class="modal-body text-secondary">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-block align-content-center"
                    onclick="closeRemoveModal()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z" />
                    </svg>
                    &nbsp; Não
                </button>
                <button type="button" class="btn btn-danger" onclick="remove()">
                    Sim &nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 / JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<!-- JQuery / JS -->
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<!-- Scrip Calendario / JS -->
<script src="{{ asset('js/script.js') }}" defer></script>
<!-- Agenda / JS -->
<script src="{{ asset('js/agenda.js') }}" defer></script>

<!-- Agenda Estilos / JS -->
<script src="{{ asset('css/calendar_style.js') }}" defer></script>

<script type="text/javascript">
    function showInfoModal(data, fields) {
        data = JSON.parse(data)
        fields = JSON.parse(fields)
        $('#infoModal').modal().find('.modal-body').html("");
        for (let a = 0; a < fields.length; a++) {
            $('#infoModal').modal().find('.modal-body').append("<b>" + data[fields[a]] + "</b><br>");
        }
        $("#infoModal").modal('show');
    }

    function closeInfoModal() {
        $("#infoModal").modal('hide');
    }

    function showRemoveModal(id, nome) {
        $('#id_remove').val(id);
        $('#removeModal').modal().find('.modal-body').html("");
        $('#removeModal').modal().find('.modal-body').append("Deseja remover o registro <b class='text-danger'>'" +
            nome + "'</b> ?");
        $("#removeModal").modal('show');
    }

    function closeRemoveModal() {
        $("#removeModal").modal('hide');
    }

    function remove() {
        let id = $('#id_remove').val();
        let form = "form_" + $('#id_remove').val();
        document.getElementById(form).submit();
        $("#removeModal").modal('hide')
    }
</script>

@yield('script')

</html>
