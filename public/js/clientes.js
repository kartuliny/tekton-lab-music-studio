$(function(){ 
var url = location.protocol + "//" + location.host+"/sala/cliente";
//EDITAR CLIENTE
$(document).on('click','.editCliente',function(){

    var id_cli = $(this).val();
   
    $.get(url+ '/' + id_cli+'/edit', function (data){
  
            console.log(data);
            $('#cliente_id').val(data.id);
            $('#name').val(data.name);
            $('#name').prop('disabled', false);
            $('#email').val(data.email);
            $('#email').prop('disabled', false);
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

 //var formData = $('#frmUsers').serialize();
         var formData = {
                    name: $('#name').val(),
                    email: $('#email').val(),
                   
                }
         var state = $('#btn-save').val();
         var type = "POST";//CON ESTE POST SE CREARA NUEVO USUARIO
         var id_cli = $('#cliente_id').val();
         var my_url = url;

 //CREO CONDICION DEL BOTON UPDATE/POST
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url = url+'/'+id_cli;
        }
    

        $.ajax({
                type: type,
                url: my_url,
                data: formData,
                dataType: 'json',
                success: function (data) {

                    var cliente = '<tr id="cliente' + data.id + '"><td>' + data.id + '</td><td>' + data.name + '</td><td>' + data.email + '</td>';
                    cliente += '<td><button class="btn btn-success icon-eye viewCliente" value="'+data.id+'"></button> ';
                    cliente += '<button class="btn btn-warning icon-edit editCliente" value="'+data.id+'"></button> ';
                    cliente += '<button id="btn_Delete" value="'+data.id+'" class="btn btn-danger icon-trash btn_Delete"></button></td></tr>';
                     if (state == "add"){ //if user added a new record

                        $('#cliente-list').append(cliente);
                        //Alerta a agregar
                        alertify.set('notifier','position', 'top-center');
                        alertify.success('Se ha agregado a '+data.name+' correctamente');
                    }
                    if (state == "update"){ //if user updated an existing record
                        
                        $("#cliente" + id_cli).replaceWith(cliente);
                        //Alerta a editar
                        alertify.set('notifier','position', 'top-center');
                        alertify.warning('Se ha editado a '+data.name);
                    }
                    $('#frmClientes').trigger("reset");
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
        $('#email').prop('disabled', false);
        $('#btn-save').val("add");
        $('#frmClientes').trigger("reset");
        $('#btn-save').show();
        $('#myModal').modal('show');
    });

 //BORRAR DE LA LISTA Y ELIMINAR CLIENTE
    $(document).on('click','.btn_Delete',function(){
        var cliente_id = $(this).val();
        //alert(user_id);
          $.ajaxSetup({
             headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        })
        $.ajax({
            type: "delete",
            url:  url+"/"+cliente_id,
            success: function (data) {
                console.log(data);
                $("#cliente" + cliente_id).remove();

                  
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
    $(document).on('click','.viewCliente',function(){
            $('#myModal').trigger('reset');
            var id_cli = $(this).val();

          $.get(url+ '/' + id_cli+'/edit', function (data){  
            $('#name').val(data.name);
            $('#name').prop('disabled', true);
            $('#email').val(data.email);
            $('#email').prop('disabled', true);
            $("#btn-save").hide();
            $('#myModal').modal('show');
        });
    }); 
});