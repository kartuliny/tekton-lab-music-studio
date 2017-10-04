$(function(){ 
var url = location.protocol + "//" + location.host+"/sala/instru";
//EDITAR CLIENTE
$(document).on('click','.editInstru',function(){

    var id_instru = $(this).val();
   
    
    $.get(url+ '/' + id_instru+'/edit', function (data){
  
           console.log(data);
            $('#instru_id').val(data.id);
            $('#name').val(data.nombre);
            $('#name').prop('disabled', false);
            $('#categoria').val(data.category.id);
            $('#categoria').prop('disabled', false);
            $('#stock').val(data.stock);
            $('#stock').prop('disabled', false);
            $('#descripcion').val(data.descripcion);
            $('#descripcion').prop('disabled', false);
            $('#btn-save').show();
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
    });

//CREAR CLIENTE NUEVO / ACTUALIZAR SI EXISTE
     $("#btn-save").click(function() {
        $.ajaxSetup({
             headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

       // var formData = $('#frmInstrumentos').serialize();
         var formData = {
                    nombre: $('#name').val(),
                    category_id: $('#categoria').val(),
                    stock: $('#stock').val(),
                    descripcion: $('#descripcion').val(),
                }
         var state = $('#btn-save').val();
         var type = "POST";//CON ESTE POST SE CREARA NUEVO USUARIO
         var id_instru = $('#instru_id').val();
         var my_url = url;

 //CREO CONDICION DEL BOTON UPDATE/POST
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url = url+'/'+id_instru;
        }if(state=="view"){
            $('#myModal').modal('hide');
            $("#btn-save").html('Guardar');
        }
    
        $.ajax({
                type: type,
                url: my_url,
                data: formData,
                dataType: 'json',
                success: function (data) {
                   
                    var instrumento = '<tr id="instrumento' + data.id + '"><td>' + data.id + '</td><td>' + data.nombre+ '</td><td>' + data.category.nombre+ '</td><td>' + data.stock + '</td><td>' + data.descripcion + '</td>';
                    instrumento += '<td><button class="btn btn-success icon-eye viewInstru" value="'+data.id+'"></button> ';
                    instrumento += '<button class="btn btn-warning icon-edit editInstru" value="'+data.id+'"></button> ';
                    instrumento += '<button id="btn_Delete" value="'+data.id+'" class="btn btn-danger icon-trash btn_Delete"></button></td></tr>';
                     if (state == "add"){ //if user added a new record
                        $('#instrumento-list').append(instrumento);
                        //Alerta a agregar
                        alertify.set('notifier','position', 'top-center');
                        alertify.success('Se ha agregado un '+data.nombre+' correctamente');
                    }
                    if (state == "update"){ //if user updated an existing record
                        
                        $("#instrumento" + id_instru).replaceWith(instrumento);
                        //Alerta a editar
                        alertify.set('notifier','position', 'top-center');
                        alertify.warning('Se ha editado a '+data.nombre);
                    }
                    $('#frmInstrumentos').trigger("reset");
                    $('.table').trigger("reset");
                    $('#myModal').modal('hide'); 
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
    /* ABRIR MODAL*/

    $('#btn_add').click(function(){
        
        $('#name').prop('disabled', false);
        $('#categoria').prop('disabled', false);
        $('#stock').prop('disabled', false);
        $('#descripcion').prop('disabled', false);
        $('#btn-save').show();
        $('#btn-save').val("add");
        $('#frmInstrumentos').trigger("reset");
        $('#myModal').modal('show');
    });

 //BORRAR DE LA LISTA Y ELIMINAR CLIENTE
    $(document).on('click','.btn_Delete',function(){
        var instru_id = $(this).val();
        //alert(user_id);
          $.ajaxSetup({
             headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        }) 
        $.ajax({
            type: "delete",
            url:  url+"/"+instru_id,
            success: function (data) {
                console.log(data);
                $("#instrumento" + instru_id).remove();
                //ALERT DE ELIMINAR
                alertify.set('notifier','position', 'top-center');
                alertify.error('Se ha eliminado correctamente');    
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

    //VER CLIENTE
    $(document).on('click','.viewInstru',function(){
            $('#myModal').trigger('reset');
            var id_intru = $(this).val();

          $.get(url+ '/' + id_intru+'/edit', function (data){  
            
            $('#name').val(data.nombre);
            $('#name').prop('disabled', true);
            $('#categoria').val(data.category.id);
            $('#categoria').prop('disabled', true);
            $('#stock').val(data.stock);
            $('#stock').prop('disabled', true);
            $('#descripcion').val(data.descripcion);
            $('#descripcion').prop('disabled', true);
            $("#btn-save").hide();
            $('#myModal').modal('show');
        });  
    });
});