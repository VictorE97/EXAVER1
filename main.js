$(document).ready(function(){
    tablaPersonas = $("#tablaPersonas").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Eliminar</button></div></div>"  
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
    $(".modal-title").text("Nuevo Usuario");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
//botón EDITAR    
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    nombre = fila.find('td:eq(1)').text();
    correo = fila.find('td:eq(2)').text();
    usuario = fila.find('td:eq(3)').text();
    password = fila.find('td:eq(4)').text();
    telefono = fila.find('td:eq(5)').text();
    estatus = fila.find('td:eq(6)').text();
    //idEquipo = parseInt(fila.find('td:eq(7)').text());
    //idPerfil = parseInt(fila.find('td:eq(8)').text());
    
    $("#nombre").val(nombre);
    $("#correo").val(correo);
    $("#usuario").val(usuario);
    $("#password").val(password);
    $("#telefono").val(telefono);
    $("#estatus").val(estatus);
    //$("#idEquipo").val(idEquipo);
    //$("#idPerfil").val(idPerfil);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Actualizar Usuario");            
    $("#modalCRUD").modal("show");  
    
});

//botón BORRAR
$(document).on("click", ".btnBorrar", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Seguro de eliminar el registro: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "bd/crud.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaPersonas.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});
    
$("#formPersonas").submit(function(e){
    e.preventDefault();    
    nombre = $.trim($("#nombre").val());
    correo = $.trim($("#correo").val());
    usuario = $.trim($("#usuario").val());
    password = $.trim($("#password").val());
    telefono = $.trim($("#telefono").val());
    estatus = $.trim($("#estatus").val());
    //idEquipo = $.trim($("#idEquipo").val());
    //idPerfil = $.trim($("#idPerfil").val());
    alert(nombre);
    alert(correo);
    alert(usuario);
    alert(password);
    alert(telefono);
    alert(estatus);
    //alert(idEquipo);
    //alert(idPerfil);  
    $.ajax({
        url: "bd/crud.php",
        type: "POST",
        dataType: "json",
        data: {nombre:nombre, correo:correo, usuario:usuario, password:password, telefono:telefono, estatus:estatus, id:id, opcion:opcion},
        success: function(data){  
            console.log(data);
            id = data[0].id;            
            nombre = data[0].nombre;
            correo = data[0].correo;
            usuario = data[0].usuario;
            password = data[0].password;
            telefono = data[0].telefono;
            estatus = data[0].estatus;
            //idEquipo = data[0].idEquipo;
            //idPerfil = data[0].idPerfil;
            if(opcion == 1){tablaPersonas.row.add([id,nombre,correo,usuario,password,telefono,estatus]).draw();}
            else{tablaPersonas.row(fila).data([id,nombre,correo,usuario,password,telefono,estatus]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});


    
});