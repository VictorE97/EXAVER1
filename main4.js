$(document).ready(function(){
    tablaUsuarios_examen_parte = $("#tablaUsuarios_examen_parte").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": ""  
       }],
        
        //Para cambiar el lenguaje a español
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });      
    
$("#btnNuevo").click(function(){
    $("#formPersonas").trigger("reset");
    $(".modal-header").css("background-color", "#28a745");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("New User");            
    $("#modalCRUD").modal("show");        
    idusuarios_equipo=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
//botón EDITAR Elaborador    
$(document).on("click", ".btnEditarElaborador", function(){
    fila = $(this).closest("tr");
    idexamen_parte = parseInt(fila.find('td:eq(0)').text());
    nombre = fila.find('td:eq(1)').text();
    usuario = fila.find('td:eq(2)').text();
    idUsuario = fila.find('td:eq(2)').text();
    //equipo = fila.find('td:eq(2)').text();
    //idEquipo = parseInt(fila.find('td:eq(2)').text());
    //idPerfil = (fila.find('td:eq(3)').text());
    
    $("#nombre").val(nombre);
    $("#nombreUsuarioEdita").val(idUsuario);
    //$("#nombrePerfilE").val(idPerfil);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    if(usuario==""){
        $("#idexamen_parteModal").val(idexamen_parte);
        $(".modal-title").text("Register Elaborates");
        //alert($("#idUsuarioModalEquipo").val());
        $("#ModalElabora").modal("show");
    }else{
        $(".modal-title").text("Actualizar Elaborador");

        $("#modalCRUD").modal("show"); 
    }
      
    
});

$(document).on("click", ".btnEditarElaboradorA", function(){
    fila = $(this).closest("tr");
    idexamen_parte = parseInt(fila.find('td:eq(0)').text());
    nombre = fila.find('td:eq(1)').text();
    usuario = fila.find('td:eq(2)').text();
    idUsuario = fila.find('td:eq(2)').text();
    //equipo = fila.find('td:eq(2)').text();
    //idEquipo = parseInt(fila.find('td:eq(2)').text());
    //idPerfil = (fila.find('td:eq(3)').text());
    
    $("#nombre").val(nombre);
    $("#nombreUsuarioEdita").val(idUsuario);
    //$("#nombrePerfilE").val(idPerfil);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
        $("#idexamen_parteModal").val(idexamen_parte);
        $(".modal-title").text("Registrar Elaborador");
        //alert($("#idUsuarioModalEquipo").val());
        $("#ModalElabora").modal("show");
    
      
    
});

//botón EDITAR Revisor   
$(document).on("click", ".btnEditarRevisor", function(){
    fila = $(this).closest("tr");
    idexamen_parte = parseInt(fila.find('td:eq(0)').text());
    nombre = fila.find('td:eq(1)').text();
    revisa = fila.find('td:eq(3)').text();
    //idEquipo = (fila.find('td:eq(2)').text());
    //idPerfil = parseInt(fila.find('td:eq(3)').text());
    $("#nombreRevisa").val(nombre);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    if(revisa==""){
        $("#idexamen_parteModalRevisor").val(idexamen_parte);
        $(".modal-title").text("Registrar Revisor");
        //alert($("#idUsuarioModalPerfil").val());
        $("#ModalRevisor").modal("show");
    }else{
        $(".modal-title").text("Actualizar Revisor");            
        $("#modalActualizarPerfil").modal("show");
    }
      
    
});

$(document).on("click", ".btnEditarRevisorA", function(){
    fila = $(this).closest("tr");
    idexamen_parte = parseInt(fila.find('td:eq(0)').text());
    nombre = fila.find('td:eq(1)').text();
    revisa = fila.find('td:eq(3)').text();
    //idEquipo = (fila.find('td:eq(2)').text());
    //idPerfil = parseInt(fila.find('td:eq(3)').text());
    $("#nombreRevisa").val(nombre);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
        $("#idexamen_parteModalRevisor").val(idexamen_parte);
        $(".modal-title").text("Registrar Revisor");
        //alert($("#idUsuarioModalPerfil").val());
        $("#ModalRevisor").modal("show");
    
      
    
});

    
$("#formElaborador").submit(function(e){
    e.preventDefault();    
    nombre2 = $.trim($("#nombre").val());
    //alert(nombre);
    //idUsuario = $.trim($("#idUsuario").val());
    idUsuario2 = $('select[name=idUsuarioActualiza]').val();
    //alert(idUsuario);
    //alert(idexamen_parte);
    //alert(opcion);
    //idPerfil = $.trim($("#nombrePerfilE").val()); 
    $.ajax({
        cache: false,
        url: "bd/ActualizarElaboradorRevisor.php",
        type: "POST",
        dataType: "json",
        data: {nombre:nombre2, idUsuario:idUsuario2, idusuarios_examen_parte:idexamen_parte, opcion:opcion},
        success: function(data){
            //alert(JSON.stringify(data, '', 2));  
            console.log(data);
            nombre = $.trim($("#nombre").val());
            idUsuario = $.trim($("#idUsuario").val());
            location.reload();
            //alert(idUsuario);
            //idPerfil = $.trim($("#nombrePerfilE").val());
            if(opcion == 1){tablaUsuarios_examen_parte.row.add([idexamen_equipo,nombre,idUsuario]).draw();}
            else{tablaUsuarios_examen_parte.row(fila).data([idexamen_equipo,nombre,idUsuario]).draw();}            
        },
        error: function(exception) {
            alert('Exception:'+exception);
            alert(JSON.stringify(exception, '', 2));
        }        
    });
     
    $("#modalCRUD").modal("hide"); 
      
    
});

$("#formRevisor").submit(function(e){
    e.preventDefault();    
    nombre = $.trim($("#nombre").val());
    //alert(nombre);
    //idUsuario = $.trim($("#idUsuario").val());
    idUsuario = $('select[name=idUsuarioActualizaRevisa]').val();
    //alert(idUsuario);
    //alert(idexamen_parte);
    //alert(opcion);
    //idPerfil = $.trim($("#nombrePerfilE").val()); 
    $.ajax({
        cache: false,
        url: "bd/ActualizaRevisor.php",
        type: "POST",
        dataType: "json",
        data: {nombre:nombre, idUsuario:idUsuario, idusuarios_examen_parte:idexamen_parte, opcion:opcion},
        success: function(data){
            //alert(JSON.stringify(data, '', 2));  
            console.log(data);
            nombre = $.trim($("#nombre").val());
            idUsuario = $.trim($("#idUsuario").val());
            location.reload();
            //alert(idUsuario);
            //idPerfil = $.trim($("#nombrePerfilE").val());
            if(opcion == 1){tablaUsuarios_examen_parte.row.add([idexamen_equipo,nombre,idUsuario]).draw();}
            else{tablaUsuarios_examen_parte.row(fila).data([idexamen_equipo,nombre,idUsuario]).draw();}            
        },
        error: function(exception) {
            alert('Exception:'+exception);
            alert(JSON.stringify(exception, '', 2));
        }        
    });
     
    $("#modalActualizarPerfil").modal("hide"); 
      
    
});

/*$("#formRevisor").submit(function(e){
    e.preventDefault();    
    nombre = $.trim($("#nombrePerfil").val());
    idEquipo = $.trim($("#nombreEquipoP").val());
    idPerfil = $.trim($("#idPerfil").val());  
    $.ajax({
        url: "bd/crudAsignaciones.php",
        type: "POST",
        dataType: "json",
        data: {nombre:nombre, idPerfil:idPerfil, idusuarios_perfiles:idusuarios_perfiles, opcion:opcion},
        success: function(data){  
            console.log(data);            
            nombre = $.trim($("#nombrePerfil").val());
            idPerfil = $.trim($("#idPerfil option:selected").text());
                tablaPersonas.row(fila).data([idusuarios_perfiles,nombre,idEquipo,idPerfil]).draw();//}            
        }        
    });
    $("#modalActualizarPerfil").modal("hide");    
    
});*/


    
});