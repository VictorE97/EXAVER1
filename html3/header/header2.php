<?php 


$sql               = "SELECT * FROM usuarios WHERE Usuario_id = '$id_uS'";
$resultado         = $conn->query($sql);
$Resp1             = $resultado->fetch_assoc();
$NameUser = $Resp1['Us_usuario'];
?>


				<header class="header notranslate" style="margin: 5px; margin-right: 0px">
					<div class="row">
						<div class="col-5 col-sm-4 col-md-4 col-lg-3 col-xl-3">
									<a class="navbar-brand">
										<img  src="../imagenes/logo.png" width="140" height="85" class="d-inline-block align-top" alt="">
									</a>
						</div>
						<div class="col-1 col-sm-3 col-md-4 col-lg-3 col-xl-6">
						</div>

						<div class="col-5 col-sm-4 col-md-4 col-lg-4 col-xl-3">
							<!--cronometro-->
							<div class="row">
									<div class="col-3">
									</div>
									<div class="col-9">
										<section>
											<div class="text-right">
												<br>
												<p><?php echo $NameUser ?></p>
											</div>
											<div class="miBordeSencillo2">
												<div class="row">
													
													<div class="col-2 text-right">
														<i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
													</div>
													<div class="col-9 text-right">
															<body onload="carga()">
																<div id="div-time">
																	<p><b><span id="horas">0</span> <span id="puntos"> : <span id="minutos"><?php echo $minutos ?></span> <span id="puntos">:</span> <span id="segundos"><?php echo $segundos ?></span> </b></p>
																</div>

															</body>
													</div>
												</div>
												
											</div>
										</section>
									</div>
							</div>
							<!--cronometro-->
						
							
						</div>
					</div>
				<div class="border-bottom"></div>
					<br>
				</header>