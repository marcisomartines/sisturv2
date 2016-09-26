<div class="modal fade" id="cadastrarDestino" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastrar Destino</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
            <?php
                echo form_label('Nome: ');
                echo form_input([
                    "name"  =>"destino",
                    "id"    =>"destino",
                    "class" =>"form-control input-sm",
                    "style" =>"text-transform:uppercase"
                    ]);
            ?>
            <input type="hidden" id="id_destino" name="id_destino" />
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Limpar</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>