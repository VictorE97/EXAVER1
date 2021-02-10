<?php

    session_start();

    if(!isset($_SESSION['idUsuario'])){
        header("Location: login.php");
    }

    $nombre = $_SESSION['nombre'];
    $tipo_usuario = $_SESSION['idPaper'];
    $tipo_perfil = $_SESSION['idPerfil'];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>EXAVER</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">EXAVER</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nombre; ?><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Configuracion</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Cerrar Sesion</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <?php if($tipo_perfil == 1) { ?>
                            
                            <div class="sb-sidenav-menu-heading">Administrador</div>
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

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesE1A" aria-expanded="false" aria-controls="collapsePagesE1A">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                EXAVER 1
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            
                            <div class="collapse" id="collapsePagesE1A" aria-labelledby="headingTwo" data-parent="#sidenavAccordion"> 
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuthS1A" aria-expanded="false" aria-controls="pagesCollapseAuthS1A">
                                        Paper 1
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i>
                                        </div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuthS1A" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="Part One.php">Part One</a>
                                            <a class="nav-link" href="Part Two.php">Part Two</a>
                                            <a class="nav-link" href="#">Part Three</a>
                                            <a class="nav-link" href="#">Part Four</a>
                                            <a class="nav-link" href="#">Part Five</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS2A" aria-expanded="false" aria-controls="pagesCollapseErrorS2A">
                                        Paper 2
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS2A" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS3A" aria-expanded="false" aria-controls="pagesCollapseErrorS3A">
                                        Paper 3
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS3A" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS4A" aria-expanded="false" aria-controls="pagesCollapseErrorS4A">
                                        Seccion 4
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS4A" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS5A" aria-expanded="false" aria-controls="pagesCollapseErrorS5A">
                                        Seccion 5
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS5A" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesE2A" aria-expanded="false" aria-controls="collapsePagesE2A">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                EXAVER 2
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            
                            <div class="collapse" id="collapsePagesE2A" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuthS1" aria-expanded="false" aria-controls="pagesCollapseAuthS1">
                                        Seccion1
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuthS1" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS2" aria-expanded="false" aria-controls="pagesCollapseErrorS2">
                                        Seccion 2
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS2" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS3" aria-expanded="false" aria-controls="pagesCollapseErrorS3">
                                        Seccion 3
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS3" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS4" aria-expanded="false" aria-controls="pagesCollapseErrorS4">
                                        Seccion 4
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS4" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS5" aria-expanded="false" aria-controls="pagesCollapseErrorS5">
                                        Seccion 5
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS5" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesE3A" aria-expanded="false" aria-controls="collapsePagesE3A">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                EXAVER 3
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            
                            <div class="collapse" id="collapsePagesE3A" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuthS1" aria-expanded="false" aria-controls="pagesCollapseAuthS1">
                                        Seccion1
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuthS1" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Registrar Datos</a>
                                            <a class="nav-link" href="#">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS2" aria-expanded="false" aria-controls="pagesCollapseErrorS2">
                                        Seccion 2
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS2" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Registrar Datos</a>
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS3" aria-expanded="false" aria-controls="pagesCollapseErrorS3">
                                        Seccion 3
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS3" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Registrar Datos</a>
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS4" aria-expanded="false" aria-controls="pagesCollapseErrorS4">
                                        Seccion 4
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS4" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Registrar Datos</a>
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS5" aria-expanded="false" aria-controls="pagesCollapseErrorS5">
                                        Seccion 5
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS5" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Registrar Datos</a>
                                            <a class="nav-link" href="404.html">Mostrar Datos</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <?php  } ?>

                            <?php if($tipo_usuario == 1) { ?>

                            <div class="sb-sidenav-menu-heading">TL</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Usuarios
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="UsuariosTL.php">Usuarios</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesTL1" aria-expanded="false" aria-controls="collapsePagesTl1">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                EXAVER 1
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePagesTL1" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuthS1" aria-expanded="false" aria-controls="pagesCollapseAuthS1">
                                        Paper 1
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>

                                    <div class="collapse" id="pagesCollapseAuthS1" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="Part One.php">Part One</a>
                                            <a class="nav-link" href="Part Two.php">Part Two</a>
                                            <a class="nav-link" href="Part One.php">Part Three</a>       
                                            <a class="nav-link" href="Part Two.php">Part Four</a>
                                            <a class="nav-link" href="Part One.php">Part Five</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS2" aria-expanded="false" aria-controls="pagesCollapseErrorS2">
                                        Paper 2
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS2" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Part One</a>
                                            <a class="nav-link" href="#">Part Two</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS3" aria-expanded="false" aria-controls="pagesCollapseErrorS3">
                                        Paper 3
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS3" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Part One</a>
                                            <a class="nav-link" href="#">Part Two</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                        <?php } ?>

                            <div class="sb-sidenav-menu-heading">IW</div>
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesE1" aria-expanded="false" aria-controls="collapsePagesE1">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                EXAVER 1
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePagesE1" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuthS1" aria-expanded="false" aria-controls="pagesCollapseAuthS1">
                                        Paper 1
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>

                                    <div class="collapse" id="pagesCollapseAuthS1" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <?php if($tipo_usuario == 1) { ?>
                                            <a class="nav-link" href="Part One.php">Part One</a>
                                            <?php  } ?>
                                            <?php if($tipo_usuario == 2) { ?>
                                            <a class="nav-link" href="Part Two.php">Part Two</a>
                                            <?php  } ?>
                                            <?php if($tipo_usuario == 3) { ?>
                                            <a class="nav-link" href="Part One.php">Part Three</a>
                                            <?php  } ?>
                                            <?php if($tipo_usuario == 2) { ?>
                                            <a class="nav-link" href="Part Two.php">Part Four</a>
                                            <?php  } ?>
                                            <?php if($tipo_usuario == 3) { ?>
                                            <a class="nav-link" href="Part One.php">Part Five</a>
                                            <?php  } ?>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS2" aria-expanded="false" aria-controls="pagesCollapseErrorS2">
                                        Paper 2
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS2" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Part One</a>
                                            <a class="nav-link" href="#">Part Two</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS3" aria-expanded="false" aria-controls="pagesCollapseErrorS3">
                                        Paper 3
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS3" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Part One</a>
                                            <a class="nav-link" href="#">Part Two</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">Revisor</div>

                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesR1" aria-expanded="false" aria-controls="collapsePagesR1">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                EXAVER 1
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePagesR1" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuthS1" aria-expanded="false" aria-controls="pagesCollapseAuthS1">
                                        Paper 1
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>

                                    <div class="collapse" id="pagesCollapseAuthS1" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <?php if($tipo_revisor == 1) { ?>
                                            <a class="nav-link" href="Part One.php">Part One</a>
                                            <?php } ?>
                                            <?php if($tipo_revisor == 2) { ?>
                                            <a class="nav-link" href="Part Two.php">Part Two</a>
                                            <?php } ?>
                                            <?php if($tipo_revisor == 3) { ?>
                                            <a class="nav-link" href="Part One.php">Part Three</a>
                                            <?php } ?>
                                            <?php if($tipo_revisor == 4) { ?>       
                                            <a class="nav-link" href="Part Two.php">Part Four</a>
                                            <?php } ?>
                                            <?php if($tipo_revisor == 5) { ?>
                                            <a class="nav-link" href="Part One.php">Part Five</a>
                                            <?php } ?>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS2" aria-expanded="false" aria-controls="pagesCollapseErrorS2">
                                        Paper 2
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS2" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Part One</a>
                                            <a class="nav-link" href="#">Part Two</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseErrorS3" aria-expanded="false" aria-controls="pagesCollapseErrorS3">
                                        Paper 3
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseErrorS3" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Part One</a>
                                            <a class="nav-link" href="#">Part Two</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                               
                        </div>
                    </div>

                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>


                    <div class="container-fluid" style="padding: 16px">

                    <!-- Page Heading -->
                    <!--h1 class="h3 mb-2 text-gray-800">Tables</h1-->
                    <!--p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p-->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Users</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Usuario</th>
                                            <th>Password</th>
                                            <th>idPaper</th>
                                            <th>idPerfil</th>
                                            <th>Funcion</th>
                                        </tr>
                                    </thead>
                                     <?php
                                        $conexion = mysqli_connect('localhost', 'root', '123456', 'exaver1');
                                        $sql="Select * from usuarios";
                                        $result=mysqli_query($conexion, $sql);

                                        while($mostrar=mysqli_fetch_array($result))
                                        {
                                        
                                        echo "<tr>";
                                            echo "<td>"; echo $mostrar["idUsuario"]; echo "</td>";
                                            echo "<td>"; echo $mostrar["nombre"]; echo "</td>";
                                            echo "<td>"; echo $mostrar["usuario"]; echo "</td>";
                                            echo "<td>"; echo $mostrar["password"]; echo "</td>";
                                            echo "<td>"; echo $mostrar["idPaper"]; echo "</td>";
                                            echo "<td>"; echo $mostrar["idPerfil"]; echo "</td>";

                                            echo "<td>
                                            
                                        <a href='Usuario Actualizar.php?idUsuario=".$mostrar['idUsuario']."'><button class='btn btn-primary' type='button' data-toggle='modal' data-target='#exampleModal'><i class='fas fa-edit'></i></button></a>
                                            
                                                 </td>";

                                        echo "</tr>";
                                    }
                                    ?>
                                    
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!--h1 class="h3 mb-2 text-gray-800">Tables</h1-->
                    <!--p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p-->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Parts of Paper 1</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                        </tr>
                                    </thead>
                                     <?php
                                        $conexion = mysqli_connect('localhost', 'root', '123456', 'exaver1');
                                        $sql="SELECT *  FROM paper1;";
                                        $result=mysqli_query($conexion, $sql);

                                        while($mostrar=mysqli_fetch_array($result))
                                        {
                                        
                                        echo "<tr>";
                                            echo "<td>"; echo $mostrar["idPaper"]; echo "</td>";
                                            echo "<td>"; echo $mostrar["nombre"]; echo "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                    
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!--h1 class="h3 mb-2 text-gray-800">Tables</h1-->
                    <!--p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p-->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Profiles</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                        </tr>
                                    </thead>
                                     <?php
                                        $conexion = mysqli_connect('localhost', 'root', '123456', 'exaver1');
                                        $sql="SELECT *  FROM perfiles;";
                                        $result=mysqli_query($conexion, $sql);

                                        while($mostrar=mysqli_fetch_array($result))
                                        {
                                        
                                        echo "<tr>";
                                            echo "<td>"; echo $mostrar["idPerfil"]; echo "</td>";
                                            echo "<td>"; echo $mostrar["nombre"]; echo "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                    
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
