
| Caso 04  |
--- | ---
| ELIMINAR DATOS DE UN EQUIPO |

| Autores  |
|--------|
| KELVIN MARTINEZ, LIVAN TORRES, MARIO CARRILLO, DAYANA RODRÌGUEZ |

| Actores |
|---------|
| Sistema, Usuario  |

| Descripción |
|--------|
| El usuario accederá al sistema de información para hacer la búsqueda y posterior eliminación de un equipo.  |

| Precondición |
|--------|
| El usuario debe estar registrado, el equipo que manipule debe tener el software de inventariado previamente instalado, el equipo que será objeto de búsqueda y eliminación debe estar previamente registrado en el sistema de inventariado.  |

| Secuencia Normal|
|--------|
| 
1.	Ingresar credenciales de login.
2.	El sistema verifica sus credenciales y le da acceso.
3.	Digitar el nombre o serial del equipo en el apartado de búsqueda.
4.	El sistema realiza la búsqueda y entrega los resultados.
5.	El usuario elige el equipo que eliminará.
6.	El sistema elimina el equipo de la BD y guarda los cambios.


 

| Secuencia Alternativa |
|--------|
| 
1.	
2.	Cadenciales incorrectas.
3.	
4.	El nombre o serial de la maquina no se encuentra en la BD
5.	 
6.	


| Postcondición |
|--------|
|El usuario elimina correctamente el equipo con todas sus características de la BD. |

----------


![CASO_DE_USO_01-REGISTRAR_EQUIPO](https://github.com/MERZIOX/NativApps/blob/master/UML/casos-de-usos-diagramas/CASO_DE_USO_04-ELIMINAR_DATOS_DE_UN_EQUIPO.jpeg?raw=true "CASO DE USO 01-REGISTRAR EQUIPO")