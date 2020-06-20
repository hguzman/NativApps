<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="..\CSS\bootstrap.css">
    <link rel="stylesheet" href="..\CSS\styleadmin.css">
    <link rel="stylesheet" href="..\CSS\html.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
</head>
<script src="..\JS\jquery-3.4.1.min.js"></script>
<script src="..\JS\menu-equipo.js"></script>

<body>

    <div class="container-fluid" id="contenedor">

        <header class="cabecera">
            <nav>
                <ul class="nav justify-content-center">

                    <div class="dropdown">
                        <a href="" class="btn btn-success dropdown-toggle" role="button" id="btn-menu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Equipos </a>

                        <div class="dropdown-menu" aria-labelledby="btn-menu1">
                            <a id="ingre-equip" class="dropdown-item ">Ingresar equipo</a>
                            <a id="busc-equip" class="dropdown-item">Buscar equipos</a>
                            <a id="modif-equip" class="dropdown-item">Modificar equipo</a>
                        </div>
                    </div>
                    <li class="nav-item">
                        <p class="nav-link text-1" href=""> | </p>
                    </li>
                    <div class="dropdown">
                        <a href="" class="btn btn-success dropdown-toggle" role="button" id="btn-menu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Usuarios </a>

                        <div class="dropdown-menu" aria-labelledby="btn-menu1">
                            <a href="" class="dropdown-item"></a>
                            <a href="" class="dropdown-item">Ingresar usuario</a>
                            <a href="" class="dropdown-item">Ver usuarios</a>

                        </div>
                    </div>
                    <li class="nav-item">
                        <p class="nav-link text-1" href=""> | </p>
                    </li>
                    <div class="dropdown">
                        <a href="" class="btn btn-success dropdown-toggle" role="button" id="btn-menu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Manuales </a>

                        <div class="dropdown-menu" aria-labelledby="btn-menu1">
                            <a href="" class="dropdown-item">Manual tecnico</a>
                            <a href="" class="dropdown-item">Manual de usuario</a>
                            <a href="" class="dropdown-item">Manual de administrador</a>

                        </div>
                    </div>
                    <li class="nav-item">
                        <p class="nav-link text-1" href=""> | </p>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="..\index.html">salir de la sesion</a>
                    </li>
                </ul>
            </nav>
        </header>


        <div style="position: relative; background-color: chartreuse; width: 60">
            <div id="inicial" class="position-absolute-pasada"></div>

            <div id="ingresar-equipos" class="off-visibily position-absolute-pasada" style="background-color: red;">

                <h2 class="text-center" style="color: gainsboro">REGISTRO</h2>
                <br>
                <form action="formulario.php" method="post" class="validate" id="formulario">
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="text-label" for="mascota"> Equipo:</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>

                        <div class="col-lg-6">
                            <label class="text-label" for="Serial"> Serial:</label>
                            <input type="number" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="text-label" for="Marca"> Marca:</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-lg-6">
                            <label class="text-label" for="Nombre"> Nombre:</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="text-label" for="Tipo"> Tipo_de_equipo:</label>
                            <select name="" id="" class="form-control" placeholder="">
                                <option selected value="Seleccionar">Selecciona</option>
                                <option value="Portatil"> Portatil</option>
                                <option value="Escritorio">Escritorio</option>
                                <option value="Todo en uno">Todo en uno</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="text-label" for="Modelo"> Modelo del equipo:</label>
                            <input type="number" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="text-label" for="Procesador"> Procesador:</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-lg-6">
                            <label class="text-label" for="RAM">Memoria_RAM:</label>
                            <input type="number" class="form-control" placeholder="">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <label class="text-label" for="Disco"> Disco_duro:</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-lg-6">
                            <label class="text-label" for="Licencia"> Lic_Windows:</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>

                    </div>
                    <br>
                    <div class="row" class="border border-danger" style="width: 100%; height: 300px;">
                        <div class="col-lg-12">
                        <div class="btn-group" role="group" aria-label="Basic example">
                                <button id="tec" type="button" class="btn btn-secondary">Teclado</button>
                                <button id="mou" type="button" class="btn btn-secondary">Mouse</button>
                                <button id="enf" type="button" class="btn btn-secondary">Enfriadora</button>
                        </div>
                        </div>
</div>
<br>
                        <div class="row">
                            <div class="col-lg-6">
                                <button id="valid" class="control-form btn btn-success btn-block" type="submit" value="">REGISTRAR </button>
                            </div>
                            <div class="col-lg-6">
                                <button id="valid" class="control-form btn btn-danger btn-block" type="submit" value="">LIMPIAR FORM</button>
                            </div>
                        </div>

                </form>

            </div>

            <div id="buscar-equipos" class="off-visibily position-absolute-pasada">

                <h2 class="text-center" style="color: gainsboro">BUSCAR EQUIPO</h2>
                <br>
                <form action="formulario.php" method="post" class="validate" id="formulario">



            </div>


            <div id="modificar-equipos" class="off-visibily position-absolute-pasada">


                <h2 class="text-center" style="color: gainsboro">MODIFICAR EQUIPO</h2>
                <br>
                <form action="formulario.php" method="post" class="validate" id="formulario">

<script>
    $(Document).ready(function() {
    alert("Ya puedes editar el jquery");

    $('#tec').click(function() {
            $('#enf').removeClass("on-visibily")
            $('#buscar-equipos').addClass("off-visibily")

            $('#modificar-equipos').removeClass("on-visibily")
            $('#modificar-equipos').addClass("off-visibily")

            $('#ingresar-equipos').addClass("position-absolute-actual");
            $('#ingresar-equipos').removeClass("off-visibily")
            $('#ingresar-equipos').addClass("on-visibily")
        }

    )
    });
</script>


            </div>
        </div>







        <!--Archivos de javascript -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!--Archivos de javascript-->
</body>

</html>