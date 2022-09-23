<form action="{{ route('tarefas.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="container my-3">
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @if($errors->has('title')) is-invalid @endif" name="title" value="{{$data->title}}" placeholder="Nome" />
                        <label for="title">Nome </label>
                        @if($errors->has('title'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('title') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @if($errors->has('description')) is-invalid @endif" name="description" value="{{$data->description}}" placeholder="Descricao" />
                        <label for="description">Nome </label>
                        @if($errors->has('description'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('description') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="datetime-local" class="form-control date-time" name="start"
                                placeholder="Marque um horario livre" id="start" onKeyPress="DataHora(event, this)">
                        <label for="start">Hora inicial </label>
                        @if($errors->has('start'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('start') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="datetime-local" class="form-control date-time" name="end"
                                placeholder="Marque um horario livre" id="end" onKeyPress="DataHora(event, this)">
                        <label for="start">Hora inicial </label>
                        @if($errors->has('end'))
                        <div class='invalid-feedback'>
                            {{ $errors->first('end') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col">
                    <a href="{{route('eixos.index')}}" class="btn btn-dark btn-block align-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                            <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z" />
                        </svg>
                        &nbsp; Voltar
                    </a>
                    <button href="javascript:document.querySelector('form').submit();" class="btn btn-success btn-block align-content-center">
                        Confirmar &nbsp;
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
