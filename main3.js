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
    
var fila; //capturar la fila para editar o borrar el registro
    
//botón EDITAR    
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    idusuarios_equipo = parseInt(fila.find('td:eq(0)').text());
    nombre = fila.find('td:eq(1)').text();
    idEquipo = parseInt(fila.find('td:eq(2)').text());
    idPerfil = parseInt(fila.find('td:eq(3)').text());
    
    $("#nombre").val(nombre);
    $("#idEquipo").val(idEquipo);
    $("#idPerfil").val(idPerfil);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Update User");            
    $("#modalCRUD").modal("show");  
    
});
    
$("#formPersonas").submit(function(e){
    e.preventDefault();    
    nombre = $.trim($("#nombre").val());
    idEquipo = $.trim($("#idEquipo").val());
    idPerfil = $.trim($("#idPerfil").val());
    alert(idEquipo);
    alert(idPerfil);  
    $.ajax({
        url: "bd/crud copy.php",
        type: "POST",
        dataType: "json",
        data: {nombre:nombre, idEquipo:idEquipo, idPerfil:idPerfil, idusuarios_equipo:idusuarios_equipo, opcion:opcion},
        success: function(data){  
            console.log(data);
            idusuarios_equipo = data[0].idusuarios_equipo;            
            nombre = data[0].nombre;
            idEquipo = data[0].idEquipo;
            idPerfil = data[0].idPerfil;
            if(opcion == 1){tablaPersonas.row.add([idusuarios_equipo,nombre,idEquipo,idPerfil]).draw();}
            else{tablaPersonas.row(fila).data([idusuarios_equipo,nombre,idEquipo,idPerfil]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});


    
});