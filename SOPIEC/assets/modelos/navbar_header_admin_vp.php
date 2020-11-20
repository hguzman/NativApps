        <!-- Header -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="assets/img/SOPIEC.ico" alt="" width="10%">
                        SOPIEC</a>
                </div>
                <!-- Lista opciones -->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">

                        <!-- Notifiacaiones -->
                        <?php $noti =mysqli_query($conexion,"SELECT * FROM notificaciones WHERE  leido= 0 AND  rol_not= 'user' ORDER BY id_not DESC " );
                          $cuantas = mysqli_num_rows($noti);
                        ?>
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning"><?php echo $cuantas; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Tienes <?php echo $cuantas; ?> notifiaciones</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <?php 
                                    while($not = mysqli_fetch_array($noti)){
                                        $users = mysqli_query($conexion,"SELECT primer_nombre,primer_apellido FROM usuarios WHERE primer_nombre = '".$not['usuario1']."' ");
                                        $nombre_user = mysqli_fetch_array($users);
                                      
                                    ?>
                                        <li>
                                            <a href="<?php echo "verticket.php?id=".$not['id_pub']?>">
                                                <!-- Contenido de la notificacion -->
                                                <i class="fa fa-users text-aqua"></i>

                                                <?php echo $nombre_user['primer_nombre']." ".$nombre_user['primer_apellido']  ?>
                                                <?php echo $not['tipo'] ?>
                                                <?php echo $not['id_pub'] ?>
                                                <?php $not['leido'] = 1 ?>
                                            </a>
                                        </li>
                                        <?php } ?>


                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li><a>Rol: <?php echo $rol = $_SESSION['rol']; ?> </a></li>
                        <li><a>Sesion: <?php echo $sesion = $_SESSION['username']; ?> </a></li>
                        <li><a href="../index.php" target="_blank">Ir al sitio web</a></li>
                        <li><a href="assets/php/logout.php">Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!--  Sidebar de opciones  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <!-- recuperar imagen de la base de datos -->
                    <?php include("assets/modelos/avatar_admin.php"); ?>
                    <!-- Primero/inicio -->
                    <li>
                        <a href="index.php"><i class="fa fa-desktop "></i>Inicio</a>
                    </li>
                    <!-- Segundo/Administracion de usuarios -->
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Administración de usuarios<span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="nuevousuario.php">Crear Nuevo usuario</a>
                            </li>
                            <li>
                                <a href="usuarios.php">Ver usuarios registrados</a>
                            </li>
                            <li>
                                <a href="perfil.php">Mi usuario</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Cuarto/Administracion de equipos -->
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Administración de equipos<span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="nuevoequipo.php">Agregar un equipo</a>
                            </li>
                            <li>
                                <a href="equipos.php">Gestionar equipo</a>
                            </li>
                            <li>
                                <a href="miequipo_admin.php">Mi equipo</a>
                            </li>
                        </ul>
                    </li>
                    <!--  Quinto/ver tickets-->
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Tickets<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="mostrartickets.php">Mostrar tickets pendientes </a>
                            </li>
                            <li>
                                <a href="historialdetickets.php">Historial de tickets</a>
                            </li>

                        </ul>
                    </li>
                    <!--  Sexto/A cerca de SOPIEC-->
                    <li>
                        <a href="manuales.php"><i class="fa fa-qrcode "></i>A cerca de SOPIEC</a>
                    </li>
                </ul>

            </div>

        </nav>