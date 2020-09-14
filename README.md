# NativApps
|
 |
 |
 |
| --- | --- | --- |

**PLAN DE PRUEBAS** : **SOPIEC**

**Miembros:**

1.Livan Andres Torres Pulido.

2. Mario Gómez Carillo.

3.Kelvin Martínez.

4.Dayana Rodríguez De Arco.

Análisis y desarrollo de sistemas de información

A.D.S.I

Servicio Nacional de Aprendizaje

Barranquilla – Atlántico

2020

**METODOLOGIA DE LAS PRUEBAS DEL SOFTWARE:**

_ **1.** __ **OBJETIVO** _

Verificar la funcionalidad de los diferentes módulos del sistema, mediante la implementación de distintas técnicas de prueba.

_ **2.** __ **DESCRIPCIÓN DEL SISTEMA** _

_El__software SOPIEC está compuesto por diferentes módulos y cada uno de estos está compuesto por requerimientos funcionales y no funcionales del sistema, los cuales serán explicados a detalle mediante los casos de usos del mismo._

Para su descripción hemos recurrido a casos de usos los cuales nos permitirá comprender mejor el uso de cada funcionalidad del sistema.

- _ **CASO DE USO #05** _

Enfocado en el login se muestra la interacción del usuario con el sistema y la secuencia de pasos para poder ingresar y salir de manera correcta al software.

Para poder loguearse: primero el usuario debe ingresar su cedula y contraseña en el formulario. (La contraseña por defecto será la cedula)

El sistema se encargará de verificar los campos vacíos, comprobará que los datos ingresados sean iguales a los de la base de datos, luego permitirá dar acceso al software.

El usuario deberá presionar &quot;cerrar sesión&quot;, luego el sistema destruirá la sesión actual y sacará al usuario del software.

- _ **En los casos de usos de usuarios encontraremos:** _

- _ **CASO DE USO #01** _

- **Registrar un usuario:** En este caso de uso se muestra la interacción del usuario con el sistema para realizar el registro de un nuevo usuario.

El usuario deberá ingresar credenciales en el longin, el sistema verificará credenciales y dará acceso, El usuario procede a registrar el nuevo usuario con sus características y el sistema registrará al usuario en la base de datos.

- _ **CASO DE USO #02** _

- _ **Búsqueda de un usuario:** _ En este caso de uso se muestra la interacción del usuario con el sistema para realizar la búsqueda de un usuario.

El usuario deberá Ingresar credenciales de login, luego el sistema verifica sus credenciales y le da acceso, el usuario deberá Digitar el número de cedula en el apartado de búsqueda y El sistema realizara la búsqueda y entregará los resultados.

- _ **CASO DE USO #03** _

- **Editar datos de usuario:** En este caso de uso se muestra la interacción del usuario con el sistema para realizar la búsqueda de un usuario.

El usuario debe ingresar credenciales de login de tipo administrador, el sistema verifirá sus credenciales y le da acceso, el usuario ingresa a la interfaz de ver usuarios, el sistema consulta a la base de datos y muestra lista de usuarios, el usuario selecciona el usuario de la lista que desea editar, sistema muestra nueva vista con los datos de la persona a editar y el usuario edita los datos en la interfaz desplegada y guarda los cambios.

- _ **CASO DE USO #04** _

- **Eliminar datos de usuario** : En este caso de uso se muestra la interacción del usuario con el sistema para eliminar datos de un usuario.

El usuario debe ingresar credenciales de login, el sistema verifica sus credenciales y le da acceso, el usuario ingresa a la interfaz de ver usuarios, el sistema consulta a la base de datos y muestra lista de usuarios, el usuario hace clic sobre el botón eliminar, el sistema muestra una alerta de confirmación para eliminar, el usuario selecciona confirmar, el Sistema elimina el usuario seleccionado.

- _ **CASOS DE USO DIRIGIDOS A EQUIPOS:** _

- _ **CASO DE USO #01** _

- **Registrar un usuario:** En este caso de uso se muestra la interacción del usuario con el sistema para realizar el registro de un equipo.

El usuario debe ingresar credenciales de login, el sistema verifica sus credenciales y le da acceso, el usuario procede a registrar el equipo con sus características, el sistema registra el nuevo equipo en la base de datos.

- _ **CASO DE USO #02** _

- **Búsqueda de un usuario:** En este caso de uso se muestra la interacción del usuario con el sistema para realizar la búsqueda de un equipo.

El usuario debe ingresar credenciales de login, el sistema verifica sus credenciales y le da acceso, el usuario debe digitar el nombre o serial del equipo en el apartado de búsqueda, el sistema realiza la búsqueda y entrega los resultados.

- _ **CASO DE USO #03** _

- **Editar datos de usuario:** En este caso de uso se muestra la interacción del usuario con el sistema para realizar la edición de un equipo.

El usuario debe ingresar credenciales de login, el sistema verifica sus credenciales y le da acceso, el usuario debe digitar el nombre o serial del equipo en el apartado de búsqueda, el sistema realiza la búsqueda y entrega los resultados, el usuario elige el equipo que modificara, el sistema guarda los datos modificados en la base de datos.

- _ **CASODE USO #04** _

- **Eliminar datos de usuario:** En este caso de uso se muestra la interacción del usuario con el sistema para eliminar datos de un equipo.

El usuario debe ingresar credenciales de login, el sistema verifica sus credenciales y le da acceso, el usuario debe digitar el nombre o serial del equipo en el apartado de búsqueda, el sistema realiza la búsqueda y entrega los resultados, el usuario elige el equipo que eliminará, el sistema elimina el equipo de la BD y guarda los cambios.

Ver

_ **3.** __ **MODULOS DEL SISTEMA A PROBAR:** _

- inicio de sesión
- Registrar nuevo usuario
- Registrar nuevo equipo
- Editar equipo
- Editar usuario
- Asignar equipo

**LOGUEARSE Y CERRAR SESIÓN**

**Autores**

- Kelvin Martínez
- Livan Torres
- Mario Carrillo
- Dayana Rodriguez

**Actores** :

Sistema, Usuario

**Descripción**

El usuario accederá al sistema de información y posteriormente de hacer los cambios cerrará sesión.

**Precondición**

El usuario debe estar registrado en la base de datos, debe acceder al sitio web del software, por tanto, debe tener un navegador y conexión a internet.

**Secuencia normal**

1. Ingresar cedula y contraseña en el formulario.
2. Verificar campos vacíos.
3. Comprobar que los datos ingresados sean iguales a los de la base de datos
4. Dar acceso al software.
5. Presionar &quot;cerrar sesión&quot;.
6. Destruir la sesión actual y sacar al usuario del software.

**Secuencia alternativa**

1. ...
2. Campos vacíos o credenciales.
3. Datos no encontrados en la base de datos.
4. ...

**Post-condición**

El usuario accede correctamente al software y posterior a realizar cambios cierra sesión.

# REGISTRAR UN NUEVO USUARIO

## Autores

- Kelvin Martínez
- Livan Torres
- Mario Carrillo
- Dayana Rodriguez

## Actores:

Sistema, Usuario

### Descripción

El usuario accederá al sistema de información para registrar un usuario con sus características

### Precondición

El usuario debe estar registrado y tener rol admin, el equipo que manipule debe tener un navegador y conexión a internet.

#### Secuencia normal

1. Ingresar credenciales de login.
2. El sistema verifica sus credenciales y le da acceso.
3. El usuario procede a registrar el nuevo usuario con sus características
4. El sistema registra el nuevo usuario en la BD

##### Secuencia alternativa

1. Credenciales incorrectas
2. Usuario con número de cedula repetido

##### Post-condición

El usuario registra un nuevo usuario

#


# BUSCAR UN USUARIO

## Autores

- Kelvin Martínez
- Livan Torres
- Mario Carrillo
- Dayana Rodriguez

## Actores:

Sistema, Usuario

### Descripción

El usuario accederá al sistema de información para realizar la búsqueda de un usuario registrado

### Precondición

El usuario debe estar registrado y tener rol admin, el equipo que manipule debe tener un navegador y conexión a internet.

#### Secuencia normal

1. Ingresar credenciales de login.
2. El sistema verifica sus credenciales y le da acceso.
3. Digitar el número de cedula en el apartado de búsqueda.
4. El sistema realiza la búsqueda y entrega los resultados.

##### Secuencia alternativa

1. ...
2. Credenciales incorrectas
3. ...
4. Objeto de búsqueda inexistente.

##### Post-condición

El usuario obtiene los datos del equipo del cual realizó la búsqueda.

# EDITAR DATOS DE UN USUARIO

## Autores

- Kelvin Martínez
- Livan Torres
- Mario Carrillo
- Dayana Rodriguez

## Actores:

Sistema, Usuario

### Descripción

El usuario accederá al sistema de información para editar un usuario con sus características

### Precondición

El usuario debe estar registrado dentro de la base de datos , el equipo que manipule debe tener un navegador y conexión a internet.

#### Secuencia normal

1. Ingresar credenciales de login.
2. El sistema verifica sus credenciales y le da acceso.
3. El usuario ingresa a la interfaz de ver usuarios.
4. El sistema consulta la a base de datos y muestra lista de usuarios.
5. El usuario selecciona el usuario de la lista que desea editar.
6. sistema muestra nueva vista con los datos de la persona a editar
7. El usuario edita los datos en la interfaz desplegada y guarda los cambios

##### Secuencia alternativa

1. Credenciales incorrectas
2. El usuario no encuentre el usuario a editar
3. El usuario no completa los campos al editar el usuario.
4.

##### Post-condición

El usuario edita un usuario registrado

#


# ELIMINAR DATOS DE UN USUARIO

## Autores

- Kelvin Martínez
- Livan Torres
- Mario Carrillo
- Dayana Rodriguez

## Actores:

Sistema, Usuario

### Descripción

El usuario accederá al sistema de información para eliminar un usuario

### Precondición

El usuario debe estar registrado dentro de la base de datos , el equipo que manipule debe tener un navegador y conexión a internet.

#### Secuencia normal

1. Ingresar credenciales de login.
2. El sistema verifica sus credenciales y le da acceso.
3. El usuario ingresa a la interfaz de ver usuarios.
4. El sistema consulta la a base de datos y muestra lista de usuarios.
5. El usuario hace clic sobre el botón eliminar.
6. El sistema muestra una alerta de confirmación para eliminar.
7. El usuario selecciona confirmar.
8. El Sistema elimina el usuario seleccionado.

##### Secuencia alternativa

1. Campos vacíos.
2. Credenciales incorrectas
3. El usuario hace clic sobre la opción cancelar.

##### Post-condición

El usuario elimina correctamente el equipo con todas sus características de la BD.

# REGISTRAR UN EQUIPO

## Autores

- Kelvin Martínez
- Livan Torres
- Mario Carrillo
- Dayana Rodriguez

## Actores:

Sistema, Usuario

### Descripción

El usuario debe estar registrado, el equipo que manipule debe tener el software de inventariado previamente instalado.

### Precondición

El usuario debe estar registrado, el equipo que manipule debe tener el software de inventariado previamente instalado.

#### Secuencia normal

1. Ingresar credenciales de login.
2. El sistema verifica sus credenciales y le da acceso.
3. El usuario procede a registrar el equipo con sus características
4. El sistema registra el nuevo equipo en la BD

##### Secuencia alternativa

1. ...
2. Credenciales incorrectas
3. Equipo con número de serie repetido
4. ...

##### Post-condición

El usuario registra satisfactoriamente el un equipo.

# BUSCAR UN EQUIPO

## Autores

- Kelvin Martínez
- Livan Torres
- Mario Carrillo
- Dayana Rodriguez

## Actores:

Sistema, Usuario

### Descripción

El usuario accederá al sistema de información para realizar la búsqueda de un equipo

### Precondición

El usuario debe estar registrado, el equipo que manipule debe tener el software de inventariado previamente instalado, el equipo que será objeto de búsqueda debe estar previamente registrado en el sistema de inventariado.

#### Secuencia normal

1. Ingresar credenciales de login.
2. El sistema verifica sus credenciales y le da acceso.
3. Digitar el nombre o serial del equipo en el apartado de búsqueda.
4. El sistema realiza la búsqueda y entrega los resultados.

##### Secuencia alternativa:

1. Credenciales incorrectas
2. El nombre o serial de la maquina no se encuentra en la BD

##### Post-condición

El usuario obtiene los datos del equipo del cual realizó la búsqueda.

# EDITAR DATOS DE UN EQUIPO

## Autores

- Kelvin Martínez
- Livan Torres
- Mario Carrillo
- Dayana Rodriguez

## Actores:

Sistema, Usuario

### Descripción

El usuario accederá al sistema de información para hacer la búsqueda y posterior modificación de un equipo.

### Precondición

El usuario debe estar registrado, el equipo que manipule debe tener el software de inventariado previamente instalado, el equipo que será objeto de búsqueda y modificación debe estar previamente registrado en el sistema de inventariado.

#### Secuencia normal

1. Ingresar credenciales de login.
2. El sistema verifica sus credenciales y le da acceso.
3. Digitar el nombre o serial del equipo en el apartado de búsqueda.
4. El sistema realiza la búsqueda y entrega los resultados.
5. El usuario elige el equipo que modificará
6. El sistema guarda los datos modificados en la BD

##### Secuencia alternativa

1. ...
2. Credenciales incorrectas
3. ...
4. El nombre o serial de la maquina no se encuentra en la BD
5. ...
6. El serial del equipo es el mismo que el de otro equipo ya registrado

##### Post-condición

El usuario modifica y actualiza correctamente los datos de un equipo de cómputo.

# DATOS DE UN EQUIPO

## Autores

- Kelvin Martínez
- Livan Torres
- Mario Carrillo
- Dayana Rodriguez

## Actores:

Sistema, Usuario

### Descripción

El usuario accederá al sistema de información para hacer la búsqueda y posterior eliminación de un equipo.

### Precondición

El usuario debe estar registrado, el equipo que manipule debe tener el software de inventariado previamente instalado, el equipo que será objeto de búsqueda y eliminación debe estar previamente registrado en el sistema de inventariado.

#### Secuencia normal

1. Ingresar credenciales de login.
2. El sistema verifica sus credenciales y le da acceso.
3. Digitar el nombre o serial del equipo en el apartado de búsqueda.
4. El sistema realiza la búsqueda y entrega los resultados.
5. El usuario elige el equipo que eliminará
6. El sistema elimina el equipo de la BD y guarda los cambios.

##### Secuencia alternativa

1. Credenciales incorrectas
2. El nombre o serial de la maquina no se encuentra en la BD

##### Post-condición

El usuario elimina correctamente el equipo con todas sus características de la BD.

|
 |
 |
 |
| --- | --- | --- |
NativApps
