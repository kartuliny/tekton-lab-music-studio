$(function(){

    /*POR DEFAULT SE CARGARA ESTA PARTE*/
	var url = location.protocol + "//" + location.host+"/sala/reserva";
    

$("#datepicker").datetimepicker();
//-------------------------------------------------------------------

$(document).on('click','.btn_Buscar',function(){

    var a=new Date($.now());//AHORA


    $('#instrumentos').children("div").remove();
	$('#new').children("button").remove();
	var date= $('.datepicker').val();
    var mydate = new Date(date);
    //COMPARO SI ES MENOS A LA FECHA ACTUAL
    if( a>mydate){
        alert( "No se puede registrar tiempos pasados!!!" );
    }else{
    
 $.ajaxSetup({
             headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  			}
        });
           //------------------------------------------------------------                 //CONTROLADOR (BUSQYEDA2)------AJAX
	$.ajax({
            type: "post",
            url:  url,
            data: {date:date},
            dataType: 'json',
            success: function (data){

            
		/*	for(f=0;f<data.length;f++)
				{
				alert(data[f].nombre);
				}*/

            	$.each(data, function(i, item) {

                 
            	var date='<button type="button" name="'+item.id+'" class="list-group-item list-group-item-success btn_pass" value="'+item.id+'"><span class="badge">disponible</span>'+item.nombre+'   ('+item.descripcion +')</button>';
				$('#new').append(date); 
				$('.message').text("Listo!");
                $('#name_sala').text(item.nombre);
				});
            }/*,
            error: function (data){
            	alert("error");
            }*/
        });
    //------------------------------------------------------------
	
    $.ajax({
            type: "post",
            url:  url+'/fijo',
            data: {date:date},
            dataType: 'json',
            success: function (data){
                $.each(data, function(i, item) {
                var date='<button type="button" name="'+item.id+'" class="list-group-item list-group-item-success btn_pass" value="'+item.id+'"><span class="badge">disponible</span>'+item.nombre+'   ('+item.descripcion +')</button>';
                $('#new').append(date); 
                $('.message').text("Listo!");
                
                });
            }/*,
            error: function (data){
                alert("error");
            }*/
        });
    //------------------------------------------------------------
    }
   });

	$(document).on('click','.btn_pass',function(){
        $('#content_instru').children("tr").remove();
        var  nombre= "Music STUDIO";//ACA SE REALIAZARE UN CAMBIO =)
        var id_room=$(this).val();
        $('#id_room').val(id_room);
        //obtengo el id de room
        count=0;//Contador para saber cuentos instruentos hay
		$('#intrumentos').show();
        $('#name_sala').text(nombre+' - Seleccione intrumentos');
        
        //SE COMUNICA CON CONTROLLADOR /getInstrumento()
        //------------------------------------------------------------
        $.ajax({
            type: "post",
            url:  url+'/instru',
            dataType: 'json',
            success: function (data){
                
                $.each(data, function(i, item) {
                     count=count+1;
                var instru='<tr><td><div class="form-group col-md-6" value="">';
                    instru+= '<div class="checkbox"><label><input type="checkbox" class="btn_check" value="'+item.id+'">'+item.nombre+'</label></div></div>' ;
                    instru+='</td><td><div class="form-group col-md-6">';        
                    instru +='<input type="text" style="display:none" value="" placeholder="Cantidad" class="cantidad'+item.id+'"></div></td></tr>';
                $('#content_instru').append(instru); 
                });

                $('#count').val(count);
            },
            error: function (data){
                alert("error");
            }
        });
        //------------------------------------------------------------
	});
        $(document).on('click','.btn_check',function(){


             $.ajaxSetup({
             headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
        });
            $('#show_sabe').show();//Se muestra el boton
            $('#show_email').show();//Se muestra el email
            var valor=$(this).val();
            if ( $(this).is(':checked') ){
                $('input.cantidad'+valor).show();
            }
            else{
                 $('input.cantidad'+valor).hide();
                }
        });
//------------------------------------------------------------------

        $(document).on('click','.btn_sabe',function(){
            var id_room =$('#id_room').val();
            var fecha_ini=$('#datepicker').val();
            
            n_hora=parseInt($('#hora').val());
            fecha_ini = new Date(fecha_ini);
            hour = fecha_ini.getHours();
            fecha_fin = fecha_ini.setHours(hour+n_hora);
           
            var fecha_fin=new Date(fecha_fin);
            var d = fecha_fin.getDate();
            var me =  fecha_fin.getMonth();
            var me=me+1;
             // JavaScript months es 0-11
            var y = fecha_fin.getFullYear();
            var h = fecha_fin.getHours();
            var m = fecha_fin.getMinutes();
            var s = fecha_fin.getSeconds();
            if (h < 10) h = '0' + h;
            if (m < 10) m = '0' + m;
            if (s < 10) s = '0' + s;
            if (me < 10) me = '0' + me;


            var fecha_fin2=y+'.'+me+'.'+d+' '+h+':'+m+':'+s;
             var fecha_ini1=$('#datepicker').val();
            


             var alldata = {
            user_id: 1,
            room_id: id_room,
            horas: 4,
            inicio_ensayo: fecha_ini1,
            fin_ensayo: fecha_fin2,
            costo:500,
            observacion:'Aca puede ir alguna onservacion',
            }

    //SE COMUNICARA CON EL CONTROLLANOR/ guardar()
    //------------------------------------------------------------
            $.ajax({
            type: "post",
            url:  url+'/save',
            data: alldata,
            dataType: 'json',
            success: function (data){
                //datos de la tabla reserva 
                id=parseInt(data.id);

                swal({
                  title: 'Reservar',
                  text: "precione guardar para reservar!",
                  type: 'info',
                  showCancelButton: false,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Guardar!',
                  allowOutsideClick:false
                }).then(function () {
                    //-------------------------------------------------
                        $('input:checkbox:checked').each(function() {
                        id_instru=$(this).val();
                        cantidad=$('input.cantidad'+id_instru).val();
                        alldata={
                                instrumento_id:id_instru,
                                reserva_id: id,
                                cantidad:cantidad,
                                precio:50,
                            }
                             $.ajax({
                                    type: "post",
                                    url:  url+'/save2',
                                    data: alldata,
                                    dataType: 'json',
                                    success: function (data){
                                       alert("realizado");
                                },
                                    error: function (data){
                                        alert("error");
                                    }
                                });
                            });
                        //-----------------------------------------------
                        
                        
                            
                        //---------------------------------------------------
                  
                         })
                        
                        email=$('#s_email').val();

                        alldata1={
                                email:email,
                                id:id,
                            }
                             $.ajax({
                                    type: "post",
                                    url:  url+'/send_email',
                                    data: alldata1,
                                   
                                    success: function (data){
                                       alert("verificado");
                                },
                                    error: function (data){
                                        alert("error");
                                    }
                                });
        },error: function (data){
                alert("error");
            }
        });
//------------------------------------------------------------ACABA AJAX
    });  
           
});