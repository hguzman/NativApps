<!-- Header -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="adjust-nav">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index_user.php"><img src="assets/img/SOPIEC.ico" alt="" width="10%"> SOPIEC</a>
        </div>
        <!-- Lista opciones -->
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a>Rol: <?php echo $rol = $_SESSION['rol']; ?> </a></li>
                <li><a>Sesion: <?php echo $sesion = $_SESSION['username']; ?> </a></li>
                <li><a href="#">See Website</a></li>
                <li><a href="ticket.php">Open Ticket</a></li>
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
            <?php include("assets/modelos/avatar_user.php"); ?>
            <!-- Primero/inicio -->
            <li>
                <a href="index_user.php"><i class="fa fa-desktop "></i>Inicio</a>
            </li>
            <!-- Segundo/Administracion de usuarios -->
            <li>
            <li>
                <a href="vista_usuario.php"><i class="fas fa-user"></i>Ver mi usuario registrado</a>
            </li>
            </li>
            <!-- Tercero/Inventario de equipos -->
            <li>
                <a href="equipos_user.php"><i class="fa fa-table "></i>Ver Inventario de equipos</a>
            </li>

            <!-- Cuarto/Administracion de equipos -->
            <li>

            <li>
                <a href="miequipo_user.php"><i class="fas fa-laptop-code"></i>Gestionar mi equipo</a>
            </li>


            </li>
            <!--  Quinto/A cerca de SOPIEC-->
            <li>
                <a href="info.php"><i class="fa fa-qrcode "></i>A cerca de SOPIEC</a>
            </li>
            <li>
                <a href="ticketsenviados.php"><i class="fa fa-table "></i>Estado de tickets</a>
            </li>
        </ul>

    </div>

</nav>