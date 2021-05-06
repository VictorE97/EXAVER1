<?php

    $nombreUsuario = $_SESSION['nombreUsuario'];
    $nombreEquipo = $_SESSION['nombreEquipo'];
    $nombrePerfil = $_SESSION['nombrePerfil'];

?>
<?php
if($nombrePerfil == "CO"){
?>


<div class="sb-sidenav-menu-heading">Gestión</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Usuarios
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Usuarios.php">Usuarios</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#UsuariosEquipo" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Equipo Usuarios
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="UsuariosEquipo" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Asignaciones.php">Equipo Usuarios</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">Proceso</div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Equipo" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Equipos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Equipo" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="GestionEquipos.php">Equipos</a>
                                </nav>
                            </div>
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ExamenesPartes" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Examenes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="ExamenesPartes" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="ExamenesPartes.php">Examenes</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Version" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Exam Version
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Version" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Version.php">Exam Version</a>
                                </nav>
                            </div>
                            <?php } ?>
                            <?php
                            if($nombrePerfil == "TL" && $nombreEquipo == "EXAVER 3"){
                            ?>
                            <a class="nav-link" href="indexTL.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                TL EXAVER 3
                            </a>
                            <?php } ?>

                            <?php
                            if($nombrePerfil == "TL" && $nombreEquipo == "EXAVER 1"){
                            ?>
                            <a class="nav-link" href="indexTL.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                TL EXAVER 1
                            </a>
                            <?php } ?>
                            
                            <?php
                            if($nombrePerfil == "TL" && $nombreEquipo == "EXAVER 2"){
                            ?>
                            <a class="nav-link" href="indexTL.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                TL EXAVER 2
                            </a>
                            <?php } ?>

                            <?php
                            if($nombrePerfil == "IW" && $nombreEquipo == "EXAVER 3"){
                            ?>
                            <a class="nav-link" href="E3ParteOne.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Parte One
                            </a>
                            <?php } ?>