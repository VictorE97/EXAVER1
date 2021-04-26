<!DOCTYPE html>
<html lang="en" translate="no">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Pagina 1</title>
      <!-- Bootstrap CSS -->
      <link
         rel="stylesheet"
         href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
         integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
         crossorigin="anonymous"
         />
      <link rel="stylesheet" href="../CSS/StylesPag.css" />
      <link rel="stylesheet" href="../CSS/mysstyles.css"/>
      <link rel="stylesheet" href="../CSS/radios.css" />
      <link rel="stylesheet" href="../CSS/MenuExa2.css" />
   </head>
   <body  class="container">
      <?php
         $id_Parte = $_GET['id_parte'];//
         $id_uS=$_GET['id_u'];//id del usuario
         $id_E=$_GET['id_Ex'];//id del examen
         $id_i=$_GET['id_in'];// id de los intentos de examen
         ?>
      <!--header-->
      <div class="row">
         <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
            <!-------------------------------------------------------------------> 
            <!-------------------------------------------------------------------> 
            
            <!-------------------------------------------------------------------> 
            <!------------------------------------------------------------------->   
         </div >
         <div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2">
            <section>
               <!--Menu de las respuestas--> 
               <!--Menu de las respuestas--> 
               <!--Menu de las respuestas--> 
               <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <div style="background: #c3d3a1; margin: 2px; " class="text-center">
                     <p><b>ANSWERSHEET</b></p>
                  </div>
                  <div style="background: #FDFEFE; margin: 2px; " class="text-center">
                     <p><b> EXAVER 2</b></p>
                  </div>
                  <div style="background: #c3d3a1; margin: 2px; " class="text-center">
                     <p><b> Paper One</b></p>
                  </div>
                  <form class="" 
                     action="../Respuestas2/Respuestas2-2.php?id_u=<?= $id_uS ?>&id_Ex=<?= $id_E?>&id_in=<?= $id_i ?>&id_parte=<?= $id_Parte ?>"  method="post">
                     <table  id="table"  width="98%"  allign="center" style="margin: 2px;">
                        <tr style="background: #FDFEFE ; margin: 2px; ">
                           <td colspan="1" class="subtitulo">
                              <p><b>1</b></p>
                           </td>
                           <td class="Subtitulo">
                              <p> A</p>
                           </td>
                           <td class="Subtitulo">
                              <p> B</p>
                           </td>
                           <td class="Subtitulo">
                              <p> C</p>
                           </td>
                           <td class="Subtitulo">
                              <p> D</p>
                           </td>
                           <td class="Subtitulo">
                              <p> E</p>
                           </td>
                           <td class="Subtitulo">
                              <p> F</p>
                           </td>
                        </tr>
                        <tr style="background: #FDFEFE ; margin: 2px; ">
                           <td><label ></label></td>
                           <td><label><input type="radio" value="2-2opAP2"  name="opciones65" required><span></span></label></td>
                           <td><label><input type="radio" value="2-2opBP2"  name="opciones65" required><span></span></label></td>
                           <td><label><input type="radio" value="2-2opCP2"  name="opciones65" required><span></span></label></td>
                           <td><label><input type="radio" value="2-2opDP2"  name="opciones65" required><span></span></label></td>
                           <td><label><input type="radio" value="2-2opEP2"  name="opciones65" required><span></span></label></td>
                           <td><label><input type="radio" value="2-2opFP2"  name="opciones65" required><span></span></label></td>
                        </tr>
                        <tr style="background: #c3d3a1; margin: 2px; ">
                           <td colspan="1" class="subtitulo">
                              <p><b>2</b></p>
                           </td>
                           <td class="Subtitulo">
                              <p> A</p>
                           </td>
                           <td class="Subtitulo">
                              <p> B</p>
                           </td>
                           <td class="Subtitulo">
                              <p> C</p>
                           </td>
                           <td class="Subtitulo">
                              <p> D</p>
                           </td>
                           <td class="Subtitulo">
                              <p> E</p>
                           </td>
                           <td class="Subtitulo">
                              <p> F</p>
                           </td>
                        </tr>
                        <tr style="background: #c3d3a1; margin: 2px; ">
                           <td><label ></label></td>
                           <td><label><input type="radio" value="2-2opAP2"  name="opciones66" required><span></span></label></td>
                           <td><label><input type="radio" value="2-2opBP2"  name="opciones66" required><span></span></label></td>
                           <td><label><input type="radio" value="2-2opCP2"  name="opciones66" required><span></span></label></td>
                           <td><label><input type="radio" value="2-2opDP2"  name="opciones66" required><span></span></label></td>
                           <td><label><input type="radio" value="2-2opEP2"  name="opciones66" required><span></span></label></td>
                           <td><label><input type="radio" value="2-2opFP2"  name="opciones66" required><span></span></label></td>
                        </tr>
                        <tr style="background: #FDFEFE ; margin: 2px; ">
                           <td colspan="1" class="subtitulo">
                              <p><b>3</b></p>
                           </td>
                           <td class="Subtitulo">
                              <p> A</p>
                           </td>
                           <td class="Subtitulo">
                              <p> B</p>
                           </td>
                           <td class="Subtitulo">
                              <p> C</p>
                           </td>
                           <td class="Subtitulo">
                              <p> D</p>
                           </td>
                           <td class="Subtitulo">
                              <p> E</p>
                           </td>
                           <td class="Subtitulo">
                              <p> F</p>
                           </td>
                        </tr>
                        <tr style="background: #FDFEFE ; margin: 2px; ">
                           <td><label ></label></td>
                           <td><label><input type="radio" value="2-2opAP2"  name="opciones67" required><span></span></label></td>
                           <td><label><input type="radio" value="2-2opBP2"  name="opciones67" required><span></span></label></td>
                           <td><label><input type="radio" value="2-2opCP2"  name="opciones67" required><span></span></label></td>
                           <td><label><input type="radio" value="2-2opDP2"  name="opciones67" required><span></span></label></td>
                           <td><label><input type="radio" value="2-2opEP2"  name="opciones67" required><span></span></label></td>
                           <td><label><input type="radio" value="2-2opFP2"  name="opciones67" required><span></span></label></td>
                        </tr>
                        <tr style="background: #c3d3a1; margin: 2px; ">
                           <td colspan="1" class="subtitulo">
                              <p><b>4</b></p>
                           </td>
                           <td class="Subtitulo">
                              <p> A</p>
                           </td>
                           <td class="Subtitulo">
                              <p> B</p>
                           </td>
                           <td class="Subtitulo">
                              <p> C</p>
                           </td>
                           <td class="Subtitulo">
                              <p> D</p>
                           </td>
                           <td class="Subtitulo">
                              <p> E</p>
                           </td>
                           <td class="Subtitulo">
                              <p> F</p>
                           </td>
                        </tr>
                        <tr style="background: #c3d3a1; margin: 2px; ">
                           <td><label ></label></td>
                           <td><label><input type="radio" value="2-2opAP2"  name="opciones68" required><span></span></label></td>
                           <td><label><input type="radio" value="2-2opBP2"  name="opciones68" required><span></span></label></td>
                           <td><label><input type="radio" value="2-2opCP2"  name="opciones68" required><span></span></label></td>
                           <td><label><input type="radio" value="2-2opDP2"  name="opciones68" required><span></span></label></td>
                           <td><label><input type="radio" value="2-2opEP2"  name="opciones68" required><span></span></label></td>
                           <td><label><input type="radio" value="2-2opFP2"  name="opciones68" required><span></span></label></td>
                        </tr>
                     </table>
                     <div class="float-left" style="margin: 5px;">
                        <input type="submit" value="Next" class="btn btn-primary">
                     </div>
                  </form>
               </div>
               <!--Menu de las respuestas--> 
               <!--Menu de las respuestas--> 
               <!--Menu de las respuestas--> 
            </section>
         </div>
      </div>
      <footer>
         <br>
         <br>
         <br>
         <div class="row">
            <div class="col-10">
               <p class="text-center">
                  EXAVER - English Language Certification Exams. Universidad
                  Veracruzana. All right Reserved.
               </p>
            </div>
         </div>
         <br>
         <br>
      </footer>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>