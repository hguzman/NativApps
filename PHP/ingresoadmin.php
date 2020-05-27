<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="..\CSS\bootstrap.css">
    <link rel="stylesheet" href="..\CSS\styleadmin.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
</head>
<script src="..\JS\jquery-3.4.1.min.js"></script>

<body>

    <div class="container-fluid" id="contenedor">

        <header class="cabecera">
            <nav>
                <ul class="nav justify-content-center">

                    <div class="dropdown">
                        <a href="" class="btn btn-success dropdown-toggle" role="button" id="btn-menu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Software </a>

                        <div class="dropdown-menu" aria-labelledby="btn-menu1">
                            <a id="ingre-equip" class="dropdown-item ">Ingresar equipo</a>
                            <a id="busc-equip" class="dropdown-item">Buscar equipos</a>
                            <a id="modif-equip" class="dropdown-item">Modificar equipo</a>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href=""> | </a>
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
                        <a class="nav-link" href=""> | </a>
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
                        <a class="nav-link" href=""> | </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="..\index.html">salir de la sesion</a>
                    </li>
                </ul>
            </nav>
        </header>

        <div id="ingresar-equipos" class="off-visibily">
            <form action="">
            </form>


            <h2 class="text-center" style="color: gainsboro">REGISTRO</h2>
            <br>
            <form action="formulario.php" method="post" class="validate" id="formulario">

                <div class="row" id="nombres">
                    <div class="col-sm-auto col-md-6 col-lg-6">
                        <input type="text" name="nombre1" class="inputizq form-control" placeholder="Primer nombre:" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,32}" minlength="2" maxlength="32" title="Permitido solo letras A-Z a-z ">
                    </div>
                    <div class="col-sm-auto col-md-6 col-lg-6">
                        <input type="text" name="nombre2" class="form-control" placeholder="Marca:" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,32}" minlength="2" maxlength="32" title="Permitido solo letras A-Z a-z "> <br>
                    </div>
                </div>

                <div class="row" id="pellidos">
                    <div class="col-sm-auto col-md-6 col-lg-6">
                        <input type="text" name="apellido1" class="inputizq form-control" placeholder="Nombre:" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,32}" minlength="2" maxlength="32" title="Permitido solo letras A-Z a-z ">
                    </div>
                    <div class="col-sm-auto col-md-6 col-lg-6">
                        <select class="form-control" name="tipo-pc" id="pctipo">
                            <option value="" selected>Selecciona</option>
                            <option value="Escritorio">equipo de escritorio</option>
                            <option value="Portail">equipo portatil</option>
                            <option value="Todo en uno">equipo todo en uno</option>

                        </select>
                    </div>
                </div>


                <br>

                <div class="row" id="correo">

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        Ingresa tu correo electronico
                        <input class="form-control" type="email" name="correo" id="correo" placeholder="example@example.com" required title="">
                    </div>
                </div>
                <br>

                <div class="row" id="contraseñas">
                    <div class="col-sm-2 col-md-6 col-lg-6">
                        Crea tu contraseña
                        <input class="form-control" type="password" name="pass1" id="passw1" value="" placeholder="Contraseña" required pattern="[A-Za-z0-9!?-]{8,32}" title="Solo puedes usar de ocho a 32 digitos A-Z a-z 0-9">
                    </div>
                    <div class="col-sm-2 col-md-6 col-lg-6">
                        Repite tu contraseña
                        <input class="form-control" type="password" name="pass2" id="passw2" value="" placeholder="Confirmar" required pattern="[A-Za-z0-9!?-]{8,32}" title="Solo puedes usar de ocho a 32 digitos A-Z a-z 0-9">
                    </div>
                    <div class="col-lg-1">
                        <span id="error2"></span>
                    </div>


                </div>
                <br>

                <div class="row" id="fecha-ciudad">
                    <div class="col-sm-12 col-md-3 col-lg-5">
                        Fecha de ultima actualización
                        <input class="form-control" type="date" name="fecha" id="" required min="1920-01-01" max="2002-12-31">
                    </div>
                    <div class="col-sm col-md col-lg-6">
                        Departamento
                        <select class="form-control" name="departamento" id="depar">
                            <option value="Departamento." selected>Seleccionar</option>
                            <option value="Arauca">Administracion</option>
                            <option value="Barranquilla">Analisis</option>
                            <option value="Barranquilla">Contaduria</option>
                            <option value="Armenia">Desarrollo</option>
                            <option value="Barranquilla">Recursos humanos</option>

                        </select>
                    </div>






                </div>

                <br>
                Selecciona tu genero

                <div class="row" id="genero">
                    <div class="col-lg-1">
                        <input class="form-control" type="radio" name="genero" id="genfem" value="Femenino">

                    </div>

                    <div class="col-lg-3">

                        <label class="form-control" for="genfem">Femenino</label>
                    </div>

                    <div class="col-lg-1">
                        <input class="form-control" type="radio" name="genero" id="genmas" value="Masculino">

                    </div>

                    <div class="col-lg-3">

                        <label class="form-control" for="genmas">Masculino</label>
                    </div>

                    <div class="col-lg-1">
                        <input class="form-control" type="radio" name="genero" id="genno" value="otros">

                    </div>

                    <div class="col-lg-3">

                        <label class="form-control" for="genno" id="genno">No decir</label>
                    </div>




                </div>

                <br>

                <div class="row" id="terminos">

                    <div class="col-lg-1">
                        <input class="form-control" type="checkbox" name="terminos" id="terminos">

                    </div>

                    <div class="col-lg-6">
                        <a required class="enlace form-control" target="blank" href="terminos.html">Aceptar terminos y
                            condiciones</a>

                    </div>
                </div>

                <br>

                <div class="row" id="btns">

                    <div class="col-sm-12 col-md-12 col-lg-6 ">
                        <input id="btn-reset" class="btn-danger form-control" type="reset" value="Limpiar formulario">
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-6 ">
                        <input id="btn-envio" name="enviar" class="btn-success form-control" type="button" value="Enviar formulario">

                    </div>
                </div>
        </div>

        <div id="buscar-equipos" class="off-visibily">
            <form action="">
            </form>


            <h2 class="text-center" style="color: gainsboro">BUSCAR EQUIPO</h2>
            <br>
            <form action="formulario.php" method="post" class="validate" id="formulario">

                <div class="row" id="nombres">
                    <div class="col-sm-auto col-md-6 col-lg-6">
                        <input type="text" name="nombre1" class="inputizq form-control" placeholder="Primer nombre:" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,32}" minlength="2" maxlength="32" title="Permitido solo letras A-Z a-z ">
                    </div>
                    <div class="col-sm-auto col-md-6 col-lg-6">
                        <input type="text" name="nombre2" class="form-control" placeholder="Marca:" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,32}" minlength="2" maxlength="32" title="Permitido solo letras A-Z a-z "> <br>
                    </div>
                </div>

                <div class="row" id="pellidos">
                    <div class="col-sm-auto col-md-6 col-lg-6">
                        <input type="text" name="apellido1" class="inputizq form-control" placeholder="Nombre:" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,32}" minlength="2" maxlength="32" title="Permitido solo letras A-Z a-z ">
                    </div>
                    <div class="col-sm-auto col-md-6 col-lg-6">
                        <select class="form-control" name="tipo-pc" id="pctipo">
                            <option value="" selected>Selecciona</option>
                            <option value="Escritorio">equipo de escritorio</option>
                            <option value="Portail">equipo portatil</option>
                            <option value="Todo en uno">equipo todo en uno</option>

                        </select>
                    </div>
                </div>


                <br>

                <div class="row" id="correo">

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        Ingresa tu correo electronico
                        <input class="form-control" type="email" name="correo" id="correo" placeholder="example@example.com" required title="">
                    </div>
                </div>
                <br>

                <div class="row" id="contraseñas">
                    <div class="col-sm-2 col-md-6 col-lg-6">
                        Crea tu contraseña
                        <input class="form-control" type="password" name="pass1" id="passw1" value="" placeholder="Contraseña" required pattern="[A-Za-z0-9!?-]{8,32}" title="Solo puedes usar de ocho a 32 digitos A-Z a-z 0-9">
                    </div>
                    <div class="col-sm-2 col-md-6 col-lg-6">
                        Repite tu contraseña
                        <input class="form-control" type="password" name="pass2" id="passw2" value="" placeholder="Confirmar" required pattern="[A-Za-z0-9!?-]{8,32}" title="Solo puedes usar de ocho a 32 digitos A-Z a-z 0-9">
                    </div>
                    <div class="col-lg-1">
                        <span id="error2"></span>
                    </div>


                </div>
                <br>

                <div class="row" id="fecha-ciudad">
                    <div class="col-sm-12 col-md-3 col-lg-5">
                        Fecha de ultima actualización
                        <input class="form-control" type="date" name="fecha" id="" required min="1920-01-01" max="2002-12-31">
                    </div>
                    <div class="col-sm col-md col-lg-6">
                        Departamento
                        <select class="form-control" name="departamento" id="depar">
                            <option value="Departamento." selected>Seleccionar</option>
                            <option value="Arauca">Administracion</option>
                            <option value="Barranquilla">Analisis</option>
                            <option value="Barranquilla">Contaduria</option>
                            <option value="Armenia">Desarrollo</option>
                            <option value="Barranquilla">Recursos humanos</option>

                        </select>
                    </div>

                </div>

                <br>
                Selecciona tu genero

                <div class="row" id="genero">
                    <div class="col-lg-1">
                        <input class="form-control" type="radio" name="genero" id="genfem" value="Femenino">

                    </div>

                    <div class="col-lg-3">

                        <label class="form-control" for="genfem">Femenino</label>
                    </div>

                    <div class="col-lg-1">
                        <input class="form-control" type="radio" name="genero" id="genmas" value="Masculino">

                    </div>

                    <div class="col-lg-3">

                        <label class="form-control" for="genmas">Masculino</label>
                    </div>

                    <div class="col-lg-1">
                        <input class="form-control" type="radio" name="genero" id="genno" value="otros">

                    </div>

                    <div class="col-lg-3">

                        <label class="form-control" for="genno" id="genno">No decir</label>
                    </div>




                </div>

                <br>

                <div class="row" id="terminos">

                    <div class="col-lg-1">
                        <input class="form-control" type="checkbox" name="terminos" id="terminos">

                    </div>

                    <div class="col-lg-6">
                        <a required class="enlace form-control" target="blank" href="terminos.html">Aceptar terminos y
                            condiciones</a>

                    </div>
                </div>

                <br>

                <div class="row" id="btns">

                    <div class="col-sm-12 col-md-12 col-lg-6 ">
                        <input id="btn-reset" class="btn-danger form-control" type="reset" value="Limpiar formulario">
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-6 ">
                        <input id="btn-envio" name="enviar" class="btn-success form-control" type="button" value="Enviar formulario">

                    </div>
                </div>
        </div>


        <div id="modificar-equipos" class="off-visibily">
            <form action="">
            </form>


            <h2 class="text-center" style="color: gainsboro">MODIFICAR EQUIPO</h2>
            <br>
            <form action="formulario.php" method="post" class="validate" id="formulario">

                <div class="row" id="nombres">
                    <div class="col-sm-auto col-md-6 col-lg-6">
                        <input type="text" name="nombre1" class="inputizq form-control" placeholder="Primer nombre:" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,32}" minlength="2" maxlength="32" title="Permitido solo letras A-Z a-z ">
                    </div>
                    <div class="col-sm-auto col-md-6 col-lg-6">
                        <input type="text" name="nombre2" class="form-control" placeholder="Marca:" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,32}" minlength="2" maxlength="32" title="Permitido solo letras A-Z a-z "> <br>
                    </div>
                </div>

                <div class="row" id="pellidos">
                    <div class="col-sm-auto col-md-6 col-lg-6">
                        <input type="text" name="apellido1" class="inputizq form-control" placeholder="Nombre:" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,32}" minlength="2" maxlength="32" title="Permitido solo letras A-Z a-z ">
                    </div>
                    <div class="col-sm-auto col-md-6 col-lg-6">
                        <select class="form-control" name="tipo-pc" id="pctipo">
                            <option value="" selected>Selecciona</option>
                            <option value="Escritorio">equipo de escritorio</option>
                            <option value="Portail">equipo portatil</option>
                            <option value="Todo en uno">equipo todo en uno</option>

                        </select>
                    </div>
                </div>


                <br>

                <div class="row" id="correo">

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        Ingresa tu correo electronico
                        <input class="form-control" type="email" name="correo" id="correo" placeholder="example@example.com" required title="">
                    </div>
                </div>
                <br>

                <div class="row" id="contraseñas">
                    <div class="col-sm-2 col-md-6 col-lg-6">
                        Crea tu contraseña
                        <input class="form-control" type="password" name="pass1" id="passw1" value="" placeholder="Contraseña" required pattern="[A-Za-z0-9!?-]{8,32}" title="Solo puedes usar de ocho a 32 digitos A-Z a-z 0-9">
                    </div>
                    <div class="col-sm-2 col-md-6 col-lg-6">
                        Repite tu contraseña
                        <input class="form-control" type="password" name="pass2" id="passw2" value="" placeholder="Confirmar" required pattern="[A-Za-z0-9!?-]{8,32}" title="Solo puedes usar de ocho a 32 digitos A-Z a-z 0-9">
                    </div>
                    <div class="col-lg-1">
                        <span id="error2"></span>
                    </div>


                </div>
                <br>

                <div class="row" id="fecha-ciudad">
                    <div class="col-sm-12 col-md-3 col-lg-5">
                        Fecha de ultima actualización
                        <input class="form-control" type="date" name="fecha" id="" required min="1920-01-01" max="2002-12-31">
                    </div>
                    <div class="col-sm col-md col-lg-6">
                        Departamento
                        <select class="form-control" name="departamento" id="depar">
                            <option value="Departamento." selected>Seleccionar</option>
                            <option value="Arauca">Administracion</option>
                            <option value="Barranquilla">Analisis</option>
                            <option value="Barranquilla">Contaduria</option>
                            <option value="Armenia">Desarrollo</option>
                            <option value="Barranquilla">Recursos humanos</option>

                        </select>
                    </div>

                </div>

                <br>
                Selecciona tu genero

                <div class="row" id="genero">
                    <div class="col-lg-1">
                        <input class="form-control" type="radio" name="genero" id="genfem" value="Femenino">

                    </div>

                    <div class="col-lg-3">

                        <label class="form-control" for="genfem">Femenino</label>
                    </div>

                    <div class="col-lg-1">
                        <input class="form-control" type="radio" name="genero" id="genmas" value="Masculino">

                    </div>

                    <div class="col-lg-3">

                        <label class="form-control" for="genmas">Masculino</label>
                    </div>

                    <div class="col-lg-1">
                        <input class="form-control" type="radio" name="genero" id="genno" value="otros">

                    </div>

                    <div class="col-lg-3">

                        <label class="form-control" for="genno" id="genno">No decir</label>
                    </div>




                </div>

                <br>

                <div class="row" id="terminos">

                    <div class="col-lg-1">
                        <input class="form-control" type="checkbox" name="terminos" id="terminos">

                    </div>

                    <div class="col-lg-6">
                        <a required class="enlace form-control" target="blank" href="terminos.html">Aceptar terminos y
                            condiciones</a>

                    </div>
                </div>

                <br>

                <div class="row" id="btns">

                    <div class="col-sm-12 col-md-12 col-lg-6 ">
                        <input id="btn-reset" class="btn-danger form-control" type="reset" value="Limpiar formulario">
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-6 ">
                        <input id="btn-envio" name="enviar" class="btn-success form-control" type="button" value="Enviar formulario">

                    </div>
                </div>
        </div>

    </div>




    <script>
        $(Document).ready(function() {
                    alert("Ya puedes editar el jquery");

                    $('#ingre-equip').click(function() {

                            $('#ingresar-equipos').removeClass("off-visibily")
                            $('#ingresar-equipos').addClass("on-visibily")
                        }

                    )

                    $('#busc-equip').click(function() {

                            $('#buscar-equipos').removeClass("off-visibily")
                            $('#buscar-equipos').addClass("on-visibily")
                    })

                     $('#modif-equip').click(function() {

                            $('#modificar-equipos').removeClass("off-visibily")
                            $('#modificar-equipos').addClass("on-visibily")
                    
                     })
        });
    
    </script>



    <!--Archivos de javascript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--Archivos de javascript-->
</body>

</html>