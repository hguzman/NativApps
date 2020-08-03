
| Caso 03  |
--- | ---
| EDITAR DATOS DE UN EQUIPO |

| Autores  |
|--------|
| KELVIN MARTINEZ, LIVAN TORRES, MARIO CARRILLO, DAYANA GONZALES |

| Actores |
|---------|
| Sistema, Usuario  |

| Descripción |
|--------|
| El usuario accederá al sistema de información para hacer la búsqueda y posterior modificación de un equipo.  |

| Precondición |
|--------|
| El usuario debe estar registrado y tener rol de admin, el equipo que manipule debe tener un navegador y conexion a internet, el equipo que será objeto de búsqueda y modificación debe estar previamente registrado en el sistema de inventariado.  |

| Secuencia Normal|
|--------|
| 
1.	Ingresar credenciales de login.
2.	El sistema verifica sus credenciales y le da acceso.
3.	Digitar el nombre o serial del equipo en el apartado de búsqueda.
4.	El sistema realiza la búsqueda y entrega los resultados.
5.	El usuario elige el equipo que modificará
6.	El sistema guarda los datos modificados en la BD

 

| Secuencia Alternativa |
|--------|
| 
1.	
2.	Cadenciales incorrectas.
3.	
4.	El nombre o serial de la maquina no se encuentra en la BD
5.	 
6.	El serial del equipo es el mismo que el de otro equipo ya registrado.


| Postcondición |
|--------|
|El usuario modifica y actualiza correctamente los datos de un equipo de computo. |

----------


![CASO_DE_USO_01-REGISTRAR_EQUIPO](https://github.com/MERZIOX/NativApps/blob/master/UML/casos-de-usos-diagramas/CASO_DE_USO_03-EDITAR_DATOS_DE_UN_EQUIPO.jpeg?raw=true "CASO DE USO 01-REGISTRAR EQUIPO")