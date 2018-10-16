
          <!-- Modal -->
          <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Solicite sua música</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="get" action="{{ route('pedir_musica') }}">
                    {{ csrf_field() }}
                      <div class="row">
                          <div class="col-12">
                              <div class="form-group">
                                <label for="text">Encontre sua música aqui</label>
<!--                                 <input type="text" class="form-control" id="musica_input" placeholder="Nome da musica desejada" onkeyup="buscarMusicas(this.value)" name="musica">
 -->                            <select class="form-control" required="required">
                                    @foreach($musicas as $musica)
                                      <option id='{{ $musica->id }}'>
                                           {{ $musica->nome }} - {{ $musica->cantor }} ({{ $musica->banda }})
                                      </option>
                                    @endforeach      
                                </select>
                              </div>
                          </div>
                      </div>
                  </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
                </form>
              </div>
            </div>
          </div>
<!-- 
          <script type="text/javascript">
                function buscarMusicas(valor){

                }
          </script> -->