<?php 
                              $sql = "SELECT * FROM audios_reproduccion WHERE id_usuario = '$id_uS' 
                              AND id_examen= '$id_E'    
                              AND Id_Intentos= '$id_i'"; 
                           $resultadoAudio    = $conn->query($sql);
                           $RespAudio        = $resultadoAudio->fetch_assoc();
                           $AudioRes = $RespAudio[$Audio_Num];
                           //0 para no escuchado y un 1 para los audios escuchados
                           if ($AudioRes==1){
                              //no mostrar boton
                              ?>
                               <p id="play_Lis"><b>Listening</b></p>
                                 <input  onclick="miFuncionAudio()"
                                          value="PLAY2"  id="play2" 
                                          src="../imagenes/audio2.png" type="image"
                                          class="btn btn-primary colorDegradadoAzul" style="width: 60px;">
                              
                                 <br>
                              
                           
                              <?php
                             
                           }else{
                              ?>
                              <p id="play_Lis"><b>Listening</b></p>
                                 <input  onclick="miFuncion()"
                                          value="PLAY"  id="play" 
                                          src="../imagenes/audio.png" type="image"
                                          class="btn btn-primary colorDegradadoAzul" style="width: 60px;">
                              
                                 <br>
                        
                              <?php
                           }
                     
                     ?>
                   