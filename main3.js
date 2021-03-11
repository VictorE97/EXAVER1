$(document).ready(function(){
    tablaExamenesParte = $("#tablaExamenesParte").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button title='Update Examen' class='btn btn-primary btnEditarExamenRol'>ExamenRol</button></div></div>"  
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
    idusuarios_examen_parte=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
//botón EDITAR ExamenParte y Rol    
$(document).on("click", ".btnEditarExamenRol", function(){
    fila = $(this).closest("tr");
    idusuarios_examen_parte = parseInt(fila.find('td:eq(0)').text());
    nombre = fila.find('td:eq(1)').text();
    idexamen_parte = parseInt(fila.find('td:eq(2)').text());
    //equipo = fila.find('td:eq(2)').text();
    //idEquipo = parseInt(fila.find('td:eq(2)').text());
    //idPerfil = (fila.find('td:eq(3)').text());
    rol = fila.find('td:eq(3)').text();
    
    $("#nombre").val(nombre);
    $("#idexamen_parte").val(idexamen_parte);
    $("#rol").val(rol);
    //$("#nombrePerfilE").val(idPerfil);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    if(rol==""){
        $("#idUsuarioModalEquipo").val(idusuarios_examen_parte);
        $(".modal-title").text("Register Exam/Part and Rol");
        //alert($("#idUsuarioModalEquipo").val());
        $("#ModalEquipo").modal("show");
    }else{
        $(".modal-title").text("Update ExamenParte and Rol");

        $("#modalCRUD").modal("show"); 
    }
      
    
});
    
$("#formExamPartRol").submit(function(e){
    e.preventDefault();    
    nombre = $.trim($("#nombre").val());
    alert(nombre);
    idexamen_parte = $.trim($("#idexamen_parte").val());
    alert(idexamen_parte);
    rol = $.trim($("#rol").val());
    alert(rol); 
    $.ajax({
        url: "bd/examPart_rol.php",
        type: "POST",
        dataType: "json",
        data: {nombre:nombre, idexamen_parte:idexamen_parte, rol:rol, idusuarios_examen_parte:idusuarios_examen_parte, opcion:opcion},
        success: function(data){  
            console.log(data);
            nombre = $.trim($("#nombre").val());
            idexamen_parte = $.trim($("#idexamen_parte").val());
            rol = $.trim($("#rol option:selected").text().toUpperCase());
                tablaExamenesParte.row(fila).data([idusuarios_examen_parte,nombre,idexamen_parte,rol]).draw();//}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});
    
});