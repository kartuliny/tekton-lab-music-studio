$(function(){ 
var url = location.protocol + "//" + location.host+"/sala/room";
//EDITAR CLIENTE
$(document).on('click','.editRoom',function(){

    var id_room = $(this).val();
   
    $.get(url+ '/' + id_room+'/edit', function (data){
  
            console.log(data);
            $('#room_id').val(data.id);
            $('#name').val(data.nombre);
            $('#name').prop('disabled', false);
            $('#medida').val(data.medida);
            $('#medida').prop('disabled', false);
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

 //var formData = $('#frmUsers').serialize();
         var formData = {
                    nombre: $('#name').val(),
                    medida: $('#medida').val(),
                    descripcion: $('#descripcion').val(),
                   
                }
         var state = $('#btn-save').val();
         var type = "POST";//CON ESTE POST SE CREARA NUEVO USUARIO
         var id_room = $('#room_id').val();
         var my_url = url;

 //CREO CONDICION DEL BOTON UPDATE/POST
        if (state == "update"){
            type = "PUT"; //for updating existing resource
            my_url = url+'/'+id_room;
        }if(state== "view"){
            $('#myModal').modal('hide');
            $("#btn-save").html('Guardar');
        }
    

        $.ajax({
                type: type,
                url: my_url,
                data: formData,
                dataType: 'json',
                success: function (data) {

                    var room = '<tr id="room'+ data.id + '"><td>' + data.id + '</td><td>' + data.nombre + '</td><td>' + data.medida + '</td><td>' + data.descripcion + '</td>';
                    room += '<td><button class="btn btn-success icon-eye viewRoom" value="'+data.id+'"></button> ';
                    room += '<button class="btn btn-warning icon-edit editRoom" value="'+data.id+'"></button> ';
                    room += '<button id="btn_Delete" value="'+data.id+'" class="btn btn-danger icon-trash btn_Delete"></button></td></tr>';
                     if (state == "add"){ //if user added a new record

                        $('#room-list').append(room);
                        //Alerta a agregar
                        alertify.set('notifier','position', 'top-center');
                        alertify.success('Se ha agregado a '+data.nombre+' correctamente');
                    }
                    if (state == "update"){ //if user updated an existing record
                        
                        $("#room" + id_room).replaceWith(room);
                        //Alerta a editar
                        alertify.set('notifier','position', 'top-center');
                        alertify.warning('Se ha editado a '+data.nombre);
                    }
                    $('#frmRoom').trigger("reset");
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
        $('#medida').prop('disabled', false);
        $('#descripcion').prop('disabled', false);
        $('#btn-save').val("add");
        $('#btn-save').show();
         $('#frmRoom').trigger("reset");
        $('#myModal').modal('show');
    });

 //BORRAR DE LA LISTA Y ELIMINAR CLIENTE
    $(document).on('click','.btn_Delete',function(){
        var room_id = $(this).val();
        //alert(user_id);
          $.ajaxSetup({
             headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        })
        $.ajax({
            type: "delete",
            url:  url+"/"+room_id,
            success: function (data) {
                console.log(data);
                $("#room"+room_id).remove();

                  
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
    $(document).on('click','.viewRoom',function(){
            $('#myModal').trigger('reset');
            var id_cli = $(this).val();

          $.get(url+ '/' + id_cli+'/edit', function (data){  
            $('#name').val(data.nombre);
            $('#name').prop('disabled', true);
            $('#medida').val(data.medida);
            $('#medida').prop('disabled', true);
            $('#descripcion').val(data.descripcion);
            $('#descripcion').prop('disabled', true);
            $("#btn-save").hide();       
            $('#myModal').modal('show');
        });  
    });
});