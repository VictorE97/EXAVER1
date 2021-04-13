$(document).ready(function(){
    tablaPersonas = $("#tablaPersonas").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"  
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
    $(".modal-title").text("Nueva Persona");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
//botón EDITAR    
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    idexamen_parte = parseInt(fila.find('td:eq(0)').text());
    idUsuario = parseInt(fila.find('td:eq(1)').text());
    nombreUsuario = fila.find('td:eq(2)').text();

    $("#idUsuario").val(idUsuario);
    $("#nombreUsuario").val(nombreUsuario);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    if(){
        $("#idexamen_parteModalRevisor").val(idexamen_parte);
        $(".modal-title").text("Register Check out");
        //alert($("#idUsuarioModalPerfil").val());
        $("#ModalRevisor").modal("show");
    }else{
        $(".modal-title").text("Editar Persona");            
        $("#modalCRUDusuarios_examen_parte").modal("show");
    }
      
    
});

    
$("#formPersonas").submit(function(e){
    e.preventDefault();
    idUsuario = $.trim($("#idUsuario").val());    
    nombreUsuario = $.trim($("#nombreUsuario").val());    
    $.ajax({
        url: "bd/crud.php",
        type: "POST",
        dataType: "json",
        data: {idUsuario:idUsuario, nombreUsuario:nombreUsuario,  idusuarios_examen_parte:idusuarios_examen_parte, opcion:opcion},
        success: function(data){  
            console.log(data);
            idusuarios_examen_parte = data[0].idusuarios_examen_parte;
            idUsuario = data[0].idUsuario;            
            nombreUsuario = data[0].nombreUsuario;
            if(opcion == 1){tablaPersonas.row.add([idusuarios_examen_parte,idUsuario,nombreUsuario]).draw();}
            else{tablaPersonas.row(fila).data([idusuarios_examen_parte,idUsuario,nombreUsuario]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});    
    
});