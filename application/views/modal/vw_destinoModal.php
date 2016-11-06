<div class="modal fade" id="cadastrarDestino" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastrar Destino</h4>
      </div>
      <div class="modal-body">
          <input type="hidden" id="acao_cadastro" value="1" />
          <input type="hidden" id="id_viagem" name="id_viagem" />
        <div class="row">
            <div class="col-md-12" id="destinoDiv">
            <?php
                echo form_label('Nome: ');
                echo form_input([
                    "name"  =>"destino",
                    "id"    =>"destino",
                    'style' =>'text-transform: uppercase;',
                    "class" =>"form-control input-sm",
                    "style" =>"text-transform:uppercase"
                    ]);
            ?> 
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"  onclick="limpaDestino();"><i class="fa fa-close"></i> Fechar</button>
        <button type="button" class="btn btn-primary" onclick="acaoDestino();"><i class="fa fa-check"></i> Salvar</button>
      </div>
    </div>
  </div>
</div>