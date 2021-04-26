$(document).ready(function(){
    tablaPersonas = $("#tablaPersonas").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Edit</button><button class='btn btn-danger btnBorrar'>Delete</button></div></div>"  
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
    $(".modal-title").text("New Team");            
    $("#modalCRUD").modal("show");        
    idequipo_version=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
//botón EDITAR    
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    idequipo_version = parseInt(fila.find('td:eq(0)').text());

    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Update Team");            
    $("#modalCRUD").modal("show");  
    
});

//botón BORRAR
$(document).on("click", ".btnBorrar", function(){    
    fila = $(this);
    idequipo_version = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Are you sure to delete the record: "+idequipo_version+"?");
    if(respuesta){
        $.ajax({
            url: "bd/crudGestionEquipos.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, idequipo_version:idequipo_version},
            success: function(){
                tablaPersonas.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});
    
$("#formPersonas").submit(function(e){
    e.preventDefault();    
    idEquipo = $.trim($("#idEquipo").val());
    idVersion = $.trim($("#idVersion").val());
    //edad = $.trim($("#edad").val());    
    $.ajax({
        url: "bd/crudGestionEquipos.php",
        type: "POST",
        dataType: "json",
        data: {idEquipo:idEquipo, idVersion:idVersion, idequipo_version:idequipo_version, opcion:opcion},
        success: function(data){  
            console.log(data);
            idequipo_version = data[0].idequipo_version;
            location.reload();           
            if(opcion == 1){tablaPersonas.row.add([idequipo_version, idEquipo, idVersion]).draw();}
            else{tablaPersonas.row(fila).data([idequipo_version, idEquipo, idVersion]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});    
    
});