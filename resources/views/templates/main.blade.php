<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Define uma seção "titulo" -->
    <title>IFPR Gestão @yield('titulo')</title>

    <!-- Bootstrap 5 / CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


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
                <span class="ms-3 fs-5">Seu Pedro - Barbearia </span>
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

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
                                <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z"/>
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                              </svg>
                            <span class="ps-1 text-white">Barbeiros</span>

                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('dashboard') }}"" class="dropdown-item">Pedro</a></li>
                            <li><a href="" class="dropdown-item">Fulano</a></li>


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

                            <li><a href="{{ route('clientes.index') }}" class="dropdown-item">Cientes</a></li>
                            <li><a href="{{ route('servicos.index') }}" class="dropdown-item">Cortes e Servicos</a></li>
                            <li><a href="{{ route('tarefas.index') }}" class="dropdown-item">Tarefas</a></li>

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
    <div class="container py-4">
        <div class="row">
            <div class="col">

            </div>
            @if(isset($rota))
            <div class="col d-flex justify-content-end">

                <a href="{{ route($rota) }}" class="btn btn-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
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
                <button type="button" class="btn-close" data-bs-dismiss="infoModal" onclick="closeInfoModal()" aria-label="Close"></button>
            </div>
            <div class="modal-body text-secondary">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-block align-content-center" onclick="closeInfoModal()">
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
                <button type="button" class="btn-close" data-bs-dismiss="removeModal" onclick="closeRemoveModal()" aria-label="Close"></button>
            </div>
            <input type="hidden" id="id_remove">
            <div class="modal-body text-secondary">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-block align-content-center" onclick="closeRemoveModal()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                        <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z" />
                    </svg>
                    &nbsp; Não
                </button>
                <button type="button" class="btn btn-danger" onclick="remove()">
                    Sim &nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 / JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- JQuery / JS -->
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

<script type="text/javascript">
    function showInfoModal(nome) {
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
        $('#removeModal').modal().find('.modal-body').append("Deseja remover o registro <b class='text-danger'>'" + nome + "'</b> ?");
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
