$(document).ready(function(){
    tablaUsuarios_examen_parte = $("#tablaUsuarios_examen_parte").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button title='Update Team' class='btn btn-primary btnEditarElaborador'>Elaborates</button><button class='btn btn-success btnEditarRevisor'>Check out</button></div></div>"  
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
        $(".modal-title").text("Update Elaborates");

        $("#modalCRUD").modal("show"); 
    }
      
    
});

//botón EDITAR Revisor   
$(document).on("click", ".btnEditarRevisor", function(){
    fila = $(this).closest("tr");
    idexamen_parte = parseInt(fila.find('td:eq(0)').text());
    nombre = fila.find('td:eq(1)').text();
    perfil = fila.find('td:eq(3)').text();
    idEquipo = (fila.find('td:eq(2)').text());
    idPerfil = parseInt(fila.find('td:eq(3)').text());
    $("#nombrePerfil").val(nombre);
    $("#nombreEquipoP").val(idEquipo); 
    $("#idPerfil").val(idPerfil);
    opcion = 3; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    if(perfil==""){
        $("#idexamen_parteModalRevisor").val(idexamen_parte);
        $(".modal-title").text("Register Check out");
        //alert($("#idUsuarioModalPerfil").val());
        $("#ModalRevisor").modal("show");
    }else{
        $(".modal-title").text("Update Check out");            
        $("#modalActualizarPerfil").modal("show");
    }
      
    
});

    
$("#formElaborador").submit(function(e){
    e.preventDefault();    
    nombre = $.trim($("#nombre").val());
    idUsuario = $.trim($("#idUsuario").val());
    alert(idUsuario);
    //idPerfil = $.trim($("#nombrePerfilE").val()); 
    $.ajax({
        url: "bd/ActualizarElaboradorRevisor.php",
        type: "POST",
        dataType: "json",
        data: {nombre:nombre, idUsuario:idUsuario, idexamen_parte:idexamen_parte, opcion:opcion},
        success: function(data){  
            console.log(data);
            nombre = $.trim($("#nombre").val());
            idUsuario = $.trim($("#idUsuario").val());
            alert(idUsuario);
            //idPerfil = $.trim($("#nombrePerfilE").val());
            if(opcion == 1){tablaUsuarios_examen_parte.row.add([idexamen_equipo,nombre,idUsuario]).draw();}
            else{tablaUsuarios_examen_parte.row(fila).data([idexamen_equipo,nombre,idUsuario]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});

$("#formPerfil").submit(function(e){
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
    
});


    
});