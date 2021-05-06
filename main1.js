$(document).ready(function(){
    tablaPersonas = $("#tablaPersonas").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Actualizar</button><button class='btn btn-danger btnBorrar'>Eliminar</button></div></div>"  
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
    $(".modal-title").text("Nuevo Examen");            
    $("#modalCRUD").modal("show");        
    idVersion=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
//botón EDITAR    
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    idVersion = parseInt(fila.find('td:eq(0)').text());
    nombre = fila.find('td:eq(1)').text();
    fechaInicio = fila.find('td:eq(2)').text();
    fechaTermino = fila.find('td:eq(3)').text();
    
    $("#nombre").val(nombre);
    $("#fechaInicio").val(fechaInicio);
    $("#fechaTermino").val(fechaTermino);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Actualizar Examen");            
    $("#modalCRUD").modal("show");  
    
});

//botón BORRAR
$(document).on("click", ".btnBorrar", function(){    
    fila = $(this);
    idVersion = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Seguro decea eliminar el registro: "+idVersion+"?");
    if(respuesta){
        $.ajax({
            url: "bd/crudVersion.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, idVersion:idVersion},
            success: function(){
                tablaPersonas.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});
    
$("#formPersonas").submit(function(e){
    e.preventDefault();    
    nombre = $.trim($("#nombre").val());
    fechaInicio = $.trim($("#fechaInicio").val());
    fechaTermino = $.trim($("#fechaTermino").val());
    alert(nombre);
    alert(fechaInicio);
    alert(fechaTermino);
    $.ajax({
        url: "bd/crudVersion.php",
        type: "POST",
        dataType: "json",
        data: {nombre:nombre, fechaInicio:fechaInicio, fechaTermino:fechaTermino, idVersion:idVersion, opcion:opcion},
        success: function(data){  
            console.log(data);
            idVersion = data[0].idVersion;            
            nombre = data[0].nombre;
            fechaInicio = data[0].fechaInicio;
            fechaTermino = data[0].fechaTermino;
            if(opcion == 1){tablaPersonas.row.add([idVersion,nombre,fechaInicio,fechaTermino]).draw();}
            else{tablaPersonas.row(fila).data([idVersion,nombre,fechaInicio,fechaTermino]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});


    
});