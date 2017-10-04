<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Rooms</h4>
            </div>
            <div class="modal-body">
            <form id="frmRoom" name="frmRoom" class="form-horizontal" novalidate="">
                {{ csrf_field() }}
                <div class="form-group error">
                 <label for="inputName" class="col-sm-3 control-label">Nombre</label>
                   <div class="col-sm-9">
                   {!! Form::text('name',null,['class'=>'form-control has-error','placeholder'=>'Nombre','id'=>'name','required autofocus'])!!}
                   </div>
                   </div>
                 <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Medida</label>
                    <div class="col-sm-9">
                    {!! Form::text('medida',null,['class'=>'form-control','placeholder'=>'Ingresa Correo','id'=>'medida'])!!}
                    </div>
                </div>
                <div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Descripcion</label>
                    <div class="col-sm-9">
                    {!! Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Ingresa Descripcion','id'=>'descripcion'])!!}
                    </div>
                </div>
                <!--<div class="form-group">
                 <label for="inputDetail" class="col-sm-3 control-label">Cargo</label>
                    <div class="col-sm-9">
                    {!! Form::select('type',[''=>'Ingresar Nivel ..','member'=>'Miembro','admin'=>'Administrador'],null,['class'=>'form-control','id'=>'type'])!!}
                    </div>
                </div>-->
             </form> 
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btn-save" value="add">Guardar</button>
            <input type="hidden" id="room_id" name="room_id" value="0">
          </div>
        </div>
      </div>
  </div>
