<?php

    session_start();

    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }

    $nombre = $_SESSION['nombreUsuario'];
    $idUsuario = $_SESSION['id'];
    $nombreNivel = $_SESSION['nombreNivel'];

?>
<!DOCTYPE html>
<html lang="en" translate="no">
<!DOCTYPE html>
<html lang="en" translate="no">
<head>
	<meta charset="UTF-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Bootstrap CSS--locales -->
	<link rel="stylesheet" href="E3/bootstrap/css/bootstrap.css" />
	  <!-- Bootstrap CSS -->

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
	<link rel="stylesheet" href="E3/CSS/StylesPag.css" />
	<link rel="stylesheet" href="E3/CSS/mysstyles.css" />
	<link rel="stylesheet" href="E3/CSS/Check3.css" />
	<link rel="stylesheet" href="E3/CSS/MenuLateral3.css" />
	<link rel="stylesheet" href="E3/CSS/botones.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">	
	</script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link rel="stylesheet" href="E3/CSS/Head.css" />
	<link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
	>
	
        
     
         
      
</head><head>
	<title>EXAVER Pagina 3-1</title>
</head>

<body >
	<div class="container">
				<header class="header notranslate" style="margin: 5px; margin-right: 0px">
				<div class="border-bottom"></div>
					<br>
				</header>
      <!--header-->
      <section class="section1">
         <div class="contenedorPrincipal">
            <div class="alert miBordeDoble">
               <div class="row">
                  <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <p><b>Part One</b> </p>
                  </div>
                  <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                     <div class="text-right">
                        <p><b>Numbers 1-5</b>  </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <form action="Agregar/E3ParteOneAgregar.php" method="POST">
      <section>
         <div class="contenedorPrincipal">
            <div class="alert miBordeDoble">
               <div>
                  <p><b>
                     <textarea name="e3p1p1_Instruccion" id="e3p1p1_Instruccion" style="width:1060px;height:80px;"></textarea>
                     </b>
                  </p>
               </div>
            </div>
         </div>
      </section>
      
      <section>
         <div class="contenedorPrincipal">
            <div class="alert miBordeSencillo">
               <div class="row">
                  <div class="col-3">
                     <p><b> EXAMPLE</b></p>
                     <P> <B> <input type="text" name="e3p1p1_pg0" id="e3p1p1_pg0"> </B></P>
                  </div>
                  <div class="col-6"></div>
                  <div class="col-3 text-right">
                     <p><b>CORRECT ANSWER</b> </p>
                     <p>
                        <button class="button button4">
                     <p>G</p>
                     </button>
                     <textarea name="e3p1p1_opcG" id="e3p1p1_opcG"></textarea></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
         
            <div class="row">
               <div class="col-9" >
                  <div style="margin-left: 20px">
                  
                           <div class="text-center">
                              <h5><input type="text" name="e3p1p1_pg1" id="e3p1p1_pg1"></h5>
                           </div>
                           <div class="text-justify">
                              <p><b><input type="text" name="e3p1p1_pg2" id="e3p1p1_pg2"></b></p><br>
                              <p><textarea name="e3p1p1_pg3" id="e3p1p1_pg3" style="width:800px;height:130px;"></textarea></p>
                           </div>
                           <div class="text-justify">
                              <p><b><input type="text" name="e3p1p1_pg4" id="e3p1p1_pg4"></b></p><br>
                              <p><textarea name="e3p1p1_pg5" id="e3p1p1_pg5" style="width:800px;height:130px;"></textarea></p>
                           </div>
                           <div class="text-justify">
                              <p><b><input type="text" name="e3p1p1_pg6" id="e3p1p1_pg6"></b></p><br>
                              <p><textarea name="e3p1p1_pg7" id="e3p1p1_pg7" style="width:800px;height:130px;"></textarea></p>
                           </div>
                           <div class="text-justify">
                              <p><b><input type="text" name="e3p1p1_pg8" id="e3p1p1_pg8"></b></p><br>
                              <p><textarea name="e3p1p1_pg9" id="e3p1p1_pg9" style="width:800px;height:130px;"></textarea></p>
                           </div>
                           <div class="text-justify">
                              <p><b><input type="text" name="e3p1p1_pg10" id="e3p1p1_pg10"></b></p><br>
                              <p><textarea name="e3p1p1_pg11" id="e3p1p1_pg11" style="width:800px;height:130px;"></textarea></p>
                           </div>
                           <div class="text-justify">
                              <p><b><input type="text" name="e3p1p1_pg12" id="e3p1p1_pg12"></b></p><br>
                              <p><textarea name="3p1p1_pg13" id="3p1p1_pg13" style="width:800px;height:130px;"></textarea></p>
                           </div>
                  </div>
               </div>
               <div class="col-3">
                  <div class="miBordeSencillo">
                     <br>

                        <div class="row" style=" margin: 1px">
                           <div class="col-1">
                              <br>
                              <p><b>A</b> </p>
                           </div>
                           <div class="col-10 text-right">
                              <p><textarea name="e3p1p1_opcA" id="e3p1p1_opcA"></textarea></p>

                           </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="row" style=" margin: 1px">
                           <div class="col-1">
                              <br>
                              <p><b>B</b></p>
                           </div>
                           <div class="col-10 text-right">
                              <p><textarea name="e3p1p1_opcB" id="e3p1p1_opcB"></textarea></p>

                           </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="row" style=" margin: 1px">
                           <div class="col-1">
                              <br>
                              <p><b>C</b></p>
                           </div>
                           <div class="col-10 text-right">
                              <p><textarea name="e3p1p1_opcC" id="e3p1p1_opcC"></textarea></p>

                           </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="row" style=" margin: 1px">
                           <div class="col-1">
                              <br>
                              <p><b>D</b></p>
                           </div>
                           <div class="col-10 text-right">
                              <p><textarea name="e3p1p1_opcD" id="e3p1p1_opcD"></textarea></p>

                           </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="row" style=" margin: 1px">
                           <div class="col-1">
                              <br>
                              <p><b>E</b></p>
                           </div>
                           <div class="col-10 text-right">
                              <p><textarea name="e3p1p1_opcE" id="e3p1p1_opcE"></textarea></p>

                           </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="row" style=" margin: 1px">
                           <div class="col-1">
                              <br>
                              <p><b>F</b></p>
                           </div>
                           <div class="col-10 text-right">
                              <p><textarea name="e3p1p1_opcF" id="e3p1p1_opcF"></textarea></p>

                           </div>
                        </div>
                  </div>
               </div>
            </div>  
		<div>
      <input class="btn btn-primary btn-lg" type="submit" value="Create">
      </form>
		<br>
				<div class="row">
					<div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
					<input type="submit" form="my-form" value="NEXT" class="btn btn-primary float-right botonSig"  />
					</div>
					<div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2">
						
					</div>
				</div>
		</div>				
				 	</div>
                <p id="GFG_UP2">
    </p>
    <button>
        click here
    </button>
    <p id="GFG_DOWN">
    </p>
                <script>
        $('#GFG_UP')
        .text('Click the button to serialize the object to query string');
        
        $('button').on('click', function() {
           alert ($('#Instruccion').val());
           alert ($('#3p1p1_opcE').val());
         var data = {
            e3p1p1_Instruccion: $('#Instruccion').val(),
            e3p1p1_pg0: $('#3p1p1_pg0').val(),
            e3p1p1_opcG: $('#3p1p1_pgG').val(),
            e3p1p1_pg1: $('#3p1p1_pg1').val(),
            e3p1p1_pg2: $('#3p1p1_pg2').val(),
            e3p1p1_pg3: $('#3p1p1_pg3').val(),
            e3p1p1_pg4: $('#3p1p1_pg4').val(),
            e3p1p1_pg5: $('#3p1p1_pg5').val(),
            e3p1p1_pg6: $('#3p1p1_pg6').val(),
            e3p1p1_pg7: $('#3p1p1_pg7').val(),
            e3p1p1_pg8: $('#3p1p1_pg8').val(),
            e3p1p1_pg9: $('#3p1p1_pg9').val(),
            e3p1p1_pg10: $('#3p1p1_pg10').val(),
            e3p1p1_pg11: $('#3p1p1_pg11').val(),
            e3p1p1_pg12: $('#3p1p1_pg12').val(),
            e3p1p1_pg13: $('#3p1p1_pg13').val(),
            e3p1p1_opcA: $('#3p1p1_opcA').val(),
            e3p1p1_opcB: $('#3p1p1_opcB').val(),
            e3p1p1_opcC: $('#3p1p1_opcC').val(),
            e3p1p1_opcD: $('#3p1p1_opcD').val(),
            e3p1p1_opcE: $('#3p1p1_opcE').val(),
            e3p1p1_opcF: $('#3p1p1_opcF').val(),


        };
        var Guardar = JSON.stringify(data);
        alert ("'<?php echo $idUsuario ?>'");
        $.ajax({
        url: "bd/AgregarE3ParteOne.php",
        type: "POST",
        dataType: "json",
        data: {idexamen_parte: 22, idUsuario: <?php echo ($idUsuario); ?>, TrabajoIW: Guardar, estatus: 1},
        success: function(data){  
            console.log(data);
            alert ("Se guardo exitosamente");            
        }        
    });
        $('#GFG_UP2').text(JSON.stringify(data));
            var result = $.param(data);
            $('#GFG_DOWN').text(result);
        });
    </script>				
</body>
 <!--Pie de página-->
 <footer class="con  mt-5 pb-3">
            <div class="container pt-3">
                <footer class=text-center>
                        <a class="text" style="color:rgb(207, 205, 205); text-size-adjust:5px;">© 2020 EXAVER – Exámenes de Certificación de Lengua Inglesa. Universidad Veracruzana. All Rights Reserved.</a>
                </footer>
            </div>
 </footer></html>
 <script>
 $( document ).ready(function() {
 //function recuperaTextos(){
//var dataDT = getObject('bd/ConsultarE3ParteOne.php', {}, function (dataDT) {
var htmlDt = '';
$.ajax({
        url: "bd/ConsultarE3ParteOne.php",
        type: "POST",
        dataType: "json",
        data: {},
        success: function(data){  
            console.log(data);
            //alert ("Se guardo exitosamente");
            //alert(JSON.stringify(data)); 
            if (data && Object.keys(data).length) { //Validar que lo que regresa no esta vacio
//$.each(data, function (k, v) {
   //alert(JSON.stringify(v));
   //alert (v);
   obj = /*JSON.stringify*/data;
   Object.keys(obj).forEach(key => {
console.log(key, obj[key]);
switch (key) {
case "e3p1p1_Instruccion":
$('#e3p1p1_Instruccion').val(obj[key]);
break;
case "e3p1p1_pg0":
$('#e3p1p1_pg0').val(obj[key]);
break;
case "e3p1p1_pg1":
$('#e3p1p1_pg1').val(obj[key]);
break;
case "e3p1p1_pg2":
$('#e3p1p1_pg2').val(obj[key]);
break;
case "e3p1p1_pg3":
$('#e3p1p1_pg3').val(obj[key]);
break;
case "e3p1p1_pg4":
$('#e3p1p1_pg4').val(obj[key]);
break;
case "e3p1p1_pg5":
$('#e3p1p1_pg5').val(obj[key]);
break;
case "e3p1p1_pg6":
$('#e3p1p1_pg6').val(obj[key]);
break;
case "e3p1p1_pg7":
$('#e3p1p1_pg7').val(obj[key]);
break;
case "e3p1p1_pg8":
$('#e3p1p1_pg8').val(obj[key]);
break;
case "e3p1p1_pg9":
$('#e3p1p1_pg9').val(obj[key]);
break;
case "e3p1p1_pg10":
$('#e3p1p1_pg10').val(obj[key]);
break;
case "e3p1p1_pg11":
$('#e3p1p1_pg11').val(obj[key]);
break;
case "e3p1p1_pg12":
$('#e3p1p1_pg12').val(obj[key]);
break;
case "e3p1p1_pg13":
$('#e3p1p1_pg13').val(obj[key]);
break;
case "e3p1p1_opcG":
$('#e3p1p1_opcG').val(obj[key]);
break;
case "e3p1p1_opcA":
$('#e3p1p1_opcA').val(obj[key]);
break;
case "e3p1p1_opcB":
$('#e3p1p1_opcB').val(obj[key]);
break;
case "e3p1p1_opcC":
$('#e3p1p1_opcC').val(obj[key]);
break;
case "e3p1p1_opcD":
$('#e3p1p1_opcD').val(obj[key]);
break;
case "e3p1p1_opcE":
$('#e3p1p1_opcE').val(obj[key]);
break;
case "e3p1p1_opcF":
$('#e3p1p1_opcF').val(obj[key]);
break;
}
//console.log(Object.entries(obj));
//alert (console.log(key, obj[key]));
});
// key1 value1
// key2 value2
// key3 value3

// using for in - same output as above
for (let key in obj) {
let value = obj[key];
//console.log(key, value);
//alert (key)
}

//});
} else {
//MENSAJE El sustentante no respondió.
// $('#res_busqueda').hide();
// $('#res_busqueda_message').show();
}         
        },
        error: function(data) {
            alert('Exception:'+data);
            alert(JSON.stringify(data, '', 2));
        }               
//var i = 1;
});


 //}
 });
 </script>