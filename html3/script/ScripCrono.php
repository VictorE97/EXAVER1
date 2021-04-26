<script type="text/javascript">
					//setInterval
					const tiempoPaper = "<?php echo $tiempo_Paper ?>";
					      var cronometro;
					      
					      function carga()
					      {
					           contador_s  = "<?php echo $segundos ?>";
					           contador_m  = "<?php echo $minutos ?>";
							   contador_h  = "<?php echo $horas ?>";
					           
					      	s = document.getElementById("segundos");
					      	m = document.getElementById("minutos");
							h = document.getElementById("horas");
					            //////
					            var mAux; 
					            var sAux;
								var tiempoCrono=1000;
								var limite =0;
										
										
											cronometro = setInterval(
												function(){

													if (limite==0){
																	if(contador_s==60){
																	contador_s=0;
																	contador_m++;
																	
																	m.innerHTML = contador_m;
													
																	if(contador_m==60)
																	{
																		contador_m=0;
																		contador_h++;

																		h.innerHTML = contador_h;
																	}  
																}
																if(contador_h==1 &&  contador_m == 5 && contador_s==1){
																	Swal.fire('10 minutes left')
																		
																}

																if (contador_s<10){sAux="0"+contador_s;}else{sAux=contador_s;}  
																s.innerHTML = sAux;
																contador_s++;
																if(contador_m<10){
																	mAux="0"+contador_m;
																	m.innerHTML =mAux;
																}
																

																if (contador_m<10){mAux="0"+contador_m;}else{mAux=contador_m;}  
																m.innerHTML = mAux;
			
																///codigo para cambiar de color el contador en forma de alerta 
																ColorTiempo=tiempoPaper-5;
															
																if (contador_h==1 &&  contador_m >= 5){
																	document.getElementById("minutos").style.color = "#C0392B";
																	document.getElementById("segundos").style.color = "#C0392B";
																	document.getElementById("puntos").style.color = "#C0392B"; 
																	document.getElementById("horas").style.color = "#C0392B";
																}
																/////////
																
																
																
																if(contador_m >= 15 && contador_h==1){
																	limite=1;
																	Swal.fire('Time ended, then they will show the results').then(function() {
                														window.location = "pagina3-6.php?id_u=<?php echo $id_uS ?>&id_Ex=<?php echo $id_E ?>&id_in=<?php echo $id_i ?>&id_parte=<?php echo $id_Parte ?>&id_u=<?php echo $id_uS ?>";});	
															
																}
													}

													
													
													
										
												},tiempoCrono);
												
					      
					      }
					      
					
				</script>
				<script type="text/javascript"> 
					$(document).ready(function(){ 
					//Check if the current URL contains '#' 
					if(document.URL.indexOf("#")==-1){ // Set the URL to whatever it was plus 
					"#". url = document.URL+"#"; location = "#"; //Reload the page 
					location.reload(true); } }); 
				</script> 