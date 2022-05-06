@extends('layouts.app')
@section('content')

<div class="container">
    <div id="agendaeventos"></div>

    <!-- Modal -->
    <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Evento</h5>
                        </button>
                </div>
                <div class="modal-body">
                    
                    <form action="">

                    {!! csrf_field() !!}
                        
                        <div class="form-group d-none">
                          <label for="id">ID</label>
                          <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                          <small id="helpId" class="form-text text-muted"></small>
                        </div>

                        <div class="form-group">
                          <label for="title">Título</label>
                          <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Digite o nome do compromisso:" require>
                          <small id="helpId" class="form-text text-muted"></small>
                        </div>

                        <div class="form-group">
                            <label for="observacao">Observações</label>
                            <textarea class="form-control" name="observacao" id="observacao" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="start">start</label>
                          <input type="datetime-local" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="Data de início">
                          <small id="helpId" class="form-text text-muted"></small>
                        </div>

                        <div class="form-group">
                          <label for="end">end</label>
                          <input type="datetime-local" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="Data de fim">
                          <small id="helpId" class="form-text text-muted"></small>
                        </div>

                        <div class="form-group">
                          <label for="local">Local</label>
                          <input type="text" class="form-control" name="local" id="local" aria-describedby="helpId" placeholder="Digite o local:">
                          <small id="helpId" class="form-text text-muted"></small>
                        </div>

                        <div class="form-group">
                          <label for="status">Status</label>
                          <input type="text" class="form-control" name="status" id="status" aria-describedby="helpId" placeholder="(Agendado, Realizado, Cancelado)">
                          <small id="helpId" class="form-text text-muted"></small>
                        </div>

                    </form>

                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-success" id="btnSalvar" >Salvar</button>
                    <button type="button" class="btn btn-warning" id="btnEditar">Editar</button>
                    <button type="button" class="btn btn-danger" id="btnApagar">Apagar</button>
                    <button type="button" class="btn btn-secondary" onclick="$('#evento').modal('hide');">Fechar</button>
                    
                </div>
            </div>
        </div>
    </div>
    <footer>
        <section class="conteudo">
            <section id="loc" class="endereço">
                <h1>Endereço</h1>
                <p>R.Antônio Pádua Vasconcelos, 128 - Cristo, João Pessoa - PB, 58071-400</p>
            </section>
            <section id="contato" class="redesecontato">
                <h1>Redes Sociais</h1>
                <ul>
                    <li>
                    <a href="https://www.instagram.com/gabriel_sbritto/?hl=pt-br"><i class="fa fa-instagram fa-2x" aria-hidden="false"></i></a>
                    </li>
                    <li>
                    <a href="https://www.linkedin.com/in/gabriel-sbritto/"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </section>
            <section id="sobre" class="sobre">
                <h1>Sobre</h1>
                <p>Agenda de Eventos para desafio.</p>
            </section>
        </section>
    </footer>
</div>

@endsection