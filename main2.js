$(document).ready(function(){
    tablaPersonas = $("#tablaPersonas").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button title='Update Team' class='btn btn-primary btnEditarEquipo'>Equipo</button><button class='btn btn-success btnEditarPerfil'>Perfil</button></div></div>"  
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
    
//botón EDITAR Equipo    
$(document).on("click", ".btnEditarEquipo", function(){
    fila = $(this).closest("tr");
    idusuarios_equipo = parseInt(fila.find('td:eq(0)').text());
    nombre = fila.find('td:eq(1)').text();
    equipo = fila.find('td:eq(2)').text();
    idEquipo = parseInt(fila.find('td:eq(2)').text());
    idPerfil = (fila.find('td:eq(3)').text());
    
    $("#nombre").val(nombre);
    $("#idEquipo").val(idEquipo);
    $("#nombrePerfilE").val(idPerfil);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    if(equipo==""){
        $("#idUsuarioModalEquipo").val(idusuarios_equipo);
        $(".modal-title").text("Registrar Equipo");
        //alert($("#idUsuarioModalEquipo").val());
        $("#ModalEquipo").modal("show");
    }else{
        $(".modal-title").text("Actualizar Equipo");

        $("#modalCRUD").modal("show"); 
    }
      
    
});

//botón EDITAR Perfil    
$(document).on("click", ".btnEditarPerfil", function(){
    fila = $(this).closest("tr");
    idusuarios_perfiles = parseInt(fila.find('td:eq(0)').text());
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
        $("#idUsuarioModalPerfil").val(idusuarios_perfiles);
        $(".modal-title").text("Registrar Perfil");
        //alert($("#idUsuarioModalPerfil").val());
        $("#ModalPerfilAgregar").modal("show");
    }else{
        $(".modal-title").text("Actualizar Perfil");            
        $("#modalActualizarPerfil").modal("show");
    }
      
    
});

    
$("#formPersonas").submit(function(e){
    e.preventDefault();    
    nombre = $.trim($("#nombre").val());
    idEquipo = $.trim($("#idEquipo").val());
    idPerfil = $.trim($("#nombrePerfilE").val()); 
    $.ajax({
        url: "bd/crudAsignaciones.php",
        type: "POST",
        dataType: "json",
        data: {nombre:nombre, idEquipo:idEquipo, idPerfil:idPerfil, idusuarios_equipo:idusuarios_equipo, opcion:opcion},
        success: function(data){  
            console.log(data);
            nombre = $.trim($("#nombre").val());
            idEquipo = $.trim($("#idEquipo option:selected").text().toUpperCase());
            idPerfil = $.trim($("#nombrePerfilE").val());
            if(opcion == 1){tablaPersonas.row.add([idusuarios_equipo,nombre,idEquipo,idPerfil]).draw();}
            else{tablaPersonas.row(fila).data([idusuarios_equipo,nombre,idEquipo,idPerfil]).draw();}            
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