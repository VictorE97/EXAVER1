<section><!--autoacompletado-->
   	<!--parte para actulizar y rellenar las respuestas de manera automatica--->
		<!--parte para actulizar y rellenar las respuestas de manera automatica--->
            <?php
               $miVariable = 0;
              
                                       while($contador<=$contadorMax){
                                       $sql = "SELECT * FROM respuestas_usuario WHERE Usuarios_Usuario_id = '$id_uS' 
                                       AND Examen_Exa_id= '$id_E'    
                                       AND id_intentos_Us= '$id_i'
                                       AND Respuestas_Res_id= '$contador'";
                                       $resultado=$conn->query($sql);
                                       $Total= $resultado->fetch_assoc();
                                      
                                       //pasar letras a numero ejemplo a=1 b=2
                                       if (!empty($Total)) {//la colsulta regresa datos si no regresa entonces
                                          $respuesta=$Total['Resu_respuesta']; 
                                                   if($respuesta=='h'){
                                                      $miVariable=1;
                                                   }
                                                   if($respuesta=='i'){
                                                      $miVariable=2;
                                                   }
                                                   if($respuesta=='j'){
                                                      $miVariable=3;
                                                   }
                                                   if($respuesta=='k'){
                                                      $miVariable=4;
                                                   }
                                                   if($respuesta=='l'){
                                                      $miVariable=5;
                                                   }
                                                   if($respuesta=='m'){
                                                      $miVariable=6;
                                                   }
                                                }else{
                                                   $miVariable=0;
                                                }
                                       ?>
                  <script>
                     function autollenar() {
                              const miVariableEnJavaScript = "<?php echo $miVariable ?>";
                              num=miVariableEnJavaScript;
                              const contadorJS = "<?php echo $contador ?>";
                                          if(contadorJS==65){
                                             if(num==1){ $("input:radio[id='a1']").prop('checked',true);}
                                             if(num==2){ $("input:radio[id='b1']").prop('checked',true);}
                                             if(num==3){ $("input:radio[id='c1']").prop('checked',true);}
                                             if(num==4){ $("input:radio[id='d1']").prop('checked',true);}
                                             if(num==5){ $("input:radio[id='e1']").prop('checked',true);}
                                             if(num==6){ $("input:radio[id='f1']").prop('checked',true);} 
                                             if(num==7){ $("input:radio[id='g1']").prop('checked',true);}
                                             if(num==8){ $("input:radio[id='h1']").prop('checked',true);}
                                             if(num==9){ $("input:radio[id='i1']").prop('checked',true);}
                                             if(num==0){ $("input:radio[id='null1']").prop('checked',true);}
                                          }   
                                          if(contadorJS==66){
                                             if(num==1){ $("input:radio[id='a2']").prop('checked',true);}
                                             if(num==2){ $("input:radio[id='b2']").prop('checked',true);}
                                             if(num==3){ $("input:radio[id='c2']").prop('checked',true);}
                                             if(num==4){ $("input:radio[id='d2']").prop('checked',true);}
                                             if(num==5){ $("input:radio[id='e2']").prop('checked',true);}
                                             if(num==6){ $("input:radio[id='f2']").prop('checked',true);} 
                                             if(num==7){ $("input:radio[id='g2']").prop('checked',true);}
                                             if(num==8){ $("input:radio[id='h2']").prop('checked',true);}
                                             if(num==9){ $("input:radio[id='i2']").prop('checked',true);}
                                             if(num==0){ $("input:radio[id='null2']").prop('checked',true);}
                                          } 
                                          if(contadorJS==67){
                                             if(num==1){ $("input:radio[id='a3']").prop('checked',true);}
                                             if(num==2){ $("input:radio[id='b3']").prop('checked',true);}
                                             if(num==3){ $("input:radio[id='c3']").prop('checked',true);}
                                             if(num==4){ $("input:radio[id='d3']").prop('checked',true);}
                                             if(num==5){ $("input:radio[id='e3']").prop('checked',true);}
                                             if(num==6){ $("input:radio[id='f3']").prop('checked',true);} 
                                             if(num==7){ $("input:radio[id='g3']").prop('checked',true);}
                                             if(num==8){ $("input:radio[id='h3']").prop('checked',true);}
                                             if(num==9){ $("input:radio[id='i3']").prop('checked',true);}
                                             if(num==0){ $("input:radio[id='null3']").prop('checked',true);}
                                          } 
                                          if(contadorJS==68){
                                             if(num==1){ $("input:radio[id='a4']").prop('checked',true);}
                                             if(num==2){ $("input:radio[id='b4']").prop('checked',true);}
                                             if(num==3){ $("input:radio[id='c4']").prop('checked',true);}
                                             if(num==4){ $("input:radio[id='d4']").prop('checked',true);}
                                             if(num==5){ $("input:radio[id='e4']").prop('checked',true);}
                                             if(num==6){ $("input:radio[id='f4']").prop('checked',true);} 
                                             if(num==7){ $("input:radio[id='g4']").prop('checked',true);}
                                             if(num==8){ $("input:radio[id='h4']").prop('checked',true);}
                                             if(num==9){ $("input:radio[id='i4']").prop('checked',true);}
                                             if(num==0){ $("input:radio[id='null4']").prop('checked',true);}
                                          } 
                                          
                           }
                           tiempoA=10;
                           setTimeout(autollenar,tiempoA);
                     
                  </script>
                  <?php
               $contador=$contador+1;
               
               }
               ?>
                     <!--parte para actulizar y rellenar las respuestas de manera automatica--->
                     <!--parte para actulizar y rellenar las respuestas de manera automatica--->
                  
   </section>