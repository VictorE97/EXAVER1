<?php
					//actualizar
				$miVariable = 0;
				// Aquí más código...
				
				
			
                           /////////////////////////////////////////////////
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
                                          if($respuesta=='a'){
                                             $miVariable=1;
                                          }
                                          if($respuesta=='b'){
                                             $miVariable=2;
                                          }
                                          if($respuesta=='c'){
                                             $miVariable=3;
                                          }
                                          if($respuesta=='d'){
                                             $miVariable=4;
                                          }
                                          if($respuesta=='e'){
                                             $miVariable=5;
                                          }
                                          if($respuesta=='f'){
                                             $miVariable=6;
                                          }
                                          if($respuesta=='g'){
                                             $miVariable=7;
                                          }
                                          if($respuesta=='h'){
                                             $miVariable=8;
                                          }
                                          if($respuesta=='i'){
                                             $miVariable=9;
										  } 
										  if($respuesta=='j'){
											$miVariable=10;
										 } 
                                          if($respuesta=='null'){
                                             $miVariable=0;
                                          }
                                       }else{
                                          $miVariable=0;
                                       }
                                             //include '../script/scriptAutoRes.php';
                                             ?>
                                                                                             <script>
												function autollenar() {
												const miVariableEnJavaScript = "<?php echo $miVariable ?>";

												const AuT1 = "<?php echo $AutoLLenado1 ?>";
												const AuT2 = "<?php echo $AutoLLenado2 ?>";
												const AuT3 = "<?php echo $AutoLLenado3 ?>";
												const AuT4 = "<?php echo $AutoLLenado4 ?>";
												const AuT5 = "<?php echo $AutoLLenado5 ?>";
												const AuT6 = "<?php echo $AutoLLenado6 ?>";
												const AuT7 = "<?php echo $AutoLLenado7 ?>";
												const AuT8 = "<?php echo $AutoLLenado8 ?>";
												const AuT9 = "<?php echo $AutoLLenado9 ?>";
												const AuT10 = "<?php echo $AutoLLenado10 ?>";
			
												num=miVariableEnJavaScript;
												const contadorJS = "<?php echo $contador ?>";
													if(contadorJS==AuT1){
														if(num==1){ $("input:radio[id='a1']").prop('checked',true);}
														if(num==2){ $("input:radio[id='b1']").prop('checked',true);}
														if(num==3){ $("input:radio[id='c1']").prop('checked',true);}
														if(num==4){ $("input:radio[id='d1']").prop('checked',true);}
														if(num==5){ $("input:radio[id='e1']").prop('checked',true);}
														if(num==6){ $("input:radio[id='f1']").prop('checked',true);} 
														if(num==7){ $("input:radio[id='g1']").prop('checked',true);}
														if(num==8){ $("input:radio[id='h1']").prop('checked',true);}
														if(num==9){ $("input:radio[id='i1']").prop('checked',true);}
														if(num==10){ $("input:radio[id='j1']").prop('checked',true);}
														if(num==0){ $("input:radio[id='null1']").prop('checked',true);}
													}   
													if(contadorJS==AuT2){
														if(num==1){ $("input:radio[id='a2']").prop('checked',true);}
														if(num==2){ $("input:radio[id='b2']").prop('checked',true);}
														if(num==3){ $("input:radio[id='c2']").prop('checked',true);}
														if(num==4){ $("input:radio[id='d2']").prop('checked',true);}
														if(num==5){ $("input:radio[id='e2']").prop('checked',true);}
														if(num==6){ $("input:radio[id='f2']").prop('checked',true);} 
														if(num==7){ $("input:radio[id='g2']").prop('checked',true);}
														if(num==8){ $("input:radio[id='h2']").prop('checked',true);}
														if(num==9){ $("input:radio[id='i2']").prop('checked',true);}
														if(num==10){ $("input:radio[id='j2']").prop('checked',true);}
														if(num==0){ $("input:radio[id='null2']").prop('checked',true);}
													} 
													if(contadorJS==AuT3){
														if(num==1){ $("input:radio[id='a3']").prop('checked',true);}
														if(num==2){ $("input:radio[id='b3']").prop('checked',true);}
														if(num==3){ $("input:radio[id='c3']").prop('checked',true);}
														if(num==4){ $("input:radio[id='d3']").prop('checked',true);}
														if(num==5){ $("input:radio[id='e3']").prop('checked',true);}
														if(num==6){ $("input:radio[id='f3']").prop('checked',true);} 
														if(num==7){ $("input:radio[id='g3']").prop('checked',true);}
														if(num==8){ $("input:radio[id='h3']").prop('checked',true);}
														if(num==9){ $("input:radio[id='i3']").prop('checked',true);}
														if(num==10){ $("input:radio[id='j3']").prop('checked',true);}
														if(num==0){ $("input:radio[id='null3']").prop('checked',true);}
													} 
													if(contadorJS==AuT4){
														if(num==1){ $("input:radio[id='a4']").prop('checked',true);}
														if(num==2){ $("input:radio[id='b4']").prop('checked',true);}
														if(num==3){ $("input:radio[id='c4']").prop('checked',true);}
														if(num==4){ $("input:radio[id='d4']").prop('checked',true);}
														if(num==5){ $("input:radio[id='e4']").prop('checked',true);}
														if(num==6){ $("input:radio[id='f4']").prop('checked',true);} 
														if(num==7){ $("input:radio[id='g4']").prop('checked',true);}
														if(num==8){ $("input:radio[id='h4']").prop('checked',true);}
														if(num==9){ $("input:radio[id='i4']").prop('checked',true);}
														if(num==10){ $("input:radio[id='j4']").prop('checked',true);}
														if(num==0){ $("input:radio[id='null4']").prop('checked',true);}
													} 
													if(contadorJS==AuT5){
														if(num==1){ $("input:radio[id='a5']").prop('checked',true);}
														if(num==2){ $("input:radio[id='b5']").prop('checked',true);}
														if(num==3){ $("input:radio[id='c5']").prop('checked',true);}
														if(num==4){ $("input:radio[id='d5']").prop('checked',true);}
														if(num==5){ $("input:radio[id='e5']").prop('checked',true);}
														if(num==6){ $("input:radio[id='f5']").prop('checked',true);} 
														if(num==7){ $("input:radio[id='g5']").prop('checked',true);}
														if(num==8){ $("input:radio[id='h5']").prop('checked',true);}
														if(num==9){ $("input:radio[id='i5']").prop('checked',true);}
														if(num==10){ $("input:radio[id='j5']").prop('checked',true);}
														if(num==0){ $("input:radio[id='null5']").prop('checked',true);}
													} 
													if(contadorJS==AuT6){
														if(num==1){ $("input:radio[id='a6']").prop('checked',true);}
														if(num==2){ $("input:radio[id='b6']").prop('checked',true);}
														if(num==3){ $("input:radio[id='c6']").prop('checked',true);}
														if(num==4){ $("input:radio[id='d6']").prop('checked',true);}
														if(num==5){ $("input:radio[id='e6']").prop('checked',true);}
														if(num==6){ $("input:radio[id='f6']").prop('checked',true);} 
														if(num==7){ $("input:radio[id='g6']").prop('checked',true);}
														if(num==8){ $("input:radio[id='h6']").prop('checked',true);}
														if(num==9){ $("input:radio[id='i6']").prop('checked',true);}
														if(num==10){ $("input:radio[id='j6']").prop('checked',true);}
														if(num==0){ $("input:radio[id='null6']").prop('checked',true);}
													} 
													if(contadorJS==AuT7){
														if(num==1){ $("input:radio[id='a7']").prop('checked',true);}
														if(num==2){ $("input:radio[id='b7']").prop('checked',true);}
														if(num==3){ $("input:radio[id='c7']").prop('checked',true);}
														if(num==4){ $("input:radio[id='d7']").prop('checked',true);}
														if(num==5){ $("input:radio[id='e7']").prop('checked',true);}
														if(num==6){ $("input:radio[id='f7']").prop('checked',true);} 
														if(num==7){ $("input:radio[id='g7']").prop('checked',true);}
														if(num==8){ $("input:radio[id='h7']").prop('checked',true);}
														if(num==9){ $("input:radio[id='i7']").prop('checked',true);}
														if(num==10){ $("input:radio[id='j7']").prop('checked',true);}
														if(num==0){ $("input:radio[id='null7']").prop('checked',true);}
													} 
													if(contadorJS==AuT8){
														if(num==1){ $("input:radio[id='a8']").prop('checked',true);}
														if(num==2){ $("input:radio[id='b8']").prop('checked',true);}
														if(num==3){ $("input:radio[id='c8']").prop('checked',true);}
														if(num==4){ $("input:radio[id='d8']").prop('checked',true);}
														if(num==5){ $("input:radio[id='e8']").prop('checked',true);}
														if(num==6){ $("input:radio[id='f8']").prop('checked',true);} 
														if(num==7){ $("input:radio[id='g8']").prop('checked',true);}
														if(num==8){ $("input:radio[id='h8']").prop('checked',true);}
														if(num==9){ $("input:radio[id='i8']").prop('checked',true);}
														if(num==10){ $("input:radio[id='j8']").prop('checked',true);}
														if(num==0){ $("input:radio[id='null8']").prop('checked',true);}
													} 
													if(contadorJS==AuT9){
														if(num==1){ $("input:radio[id='a9']").prop('checked',true);}
														if(num==2){ $("input:radio[id='b9']").prop('checked',true);}
														if(num==3){ $("input:radio[id='c9']").prop('checked',true);}
														if(num==4){ $("input:radio[id='d9']").prop('checked',true);}
														if(num==5){ $("input:radio[id='e9']").prop('checked',true);}
														if(num==6){ $("input:radio[id='f9']").prop('checked',true);} 
														if(num==7){ $("input:radio[id='g9']").prop('checked',true);}
														if(num==8){ $("input:radio[id='h9']").prop('checked',true);}
														if(num==9){ $("input:radio[id='i9']").prop('checked',true);}
														if(num==10){ $("input:radio[id='j9']").prop('checked',true);}
														if(num==0){ $("input:radio[id='null9']").prop('checked',true);}
													} 
													if(contadorJS==AuT10){
														if(num==1){ $("input:radio[id='a10']").prop('checked',true);}
														if(num==2){ $("input:radio[id='b10']").prop('checked',true);}
														if(num==3){ $("input:radio[id='c10']").prop('checked',true);}
														if(num==4){ $("input:radio[id='d10']").prop('checked',true);}
														if(num==5){ $("input:radio[id='e10']").prop('checked',true);}
														if(num==6){ $("input:radio[id='f10']").prop('checked',true);} 
														if(num==7){ $("input:radio[id='g10']").prop('checked',true);}
														if(num==8){ $("input:radio[id='h10']").prop('checked',true);}
														if(num==9){ $("input:radio[id='i10']").prop('checked',true);}
														if(num==10){ $("input:radio[id='j10']").prop('checked',true);}
														if(num==0){ $("input:radio[id='null10']").prop('checked',true);}
													} 
												}
												tiempoA=10;
												setTimeout(autollenar,tiempoA);
				
											</script>
                                             <?php
										$contador=$contador+1;
								
								}
      ?>