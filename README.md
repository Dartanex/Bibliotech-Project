# Titulo: Aplicación de gestión de una biblioteca virtual
---
## Overview:
La aplicación require que los usuarios puedan buscar, agregar, 
modificar y eliminar libros, y también se requiere de la gestión 
de los autores de los libros y las categoría.

### Alcance(Scope)
La aplicación solo tendrá vista de administrador para realizar
todas las funciones de gestión de la biblioteca ya que la información
será manejada estáticamente.

#### Casos de uso
El administrador podrá realizar
* Agregar libros
* Modificar la información de un libro 
* Eliminar libros
* Agregar autores
* Modificar Autores
* Eliminar Autores
* Agregar categorias
* Modificar gategorias
* Eliminar categorias
* Prestar un libro
* Devolver un libro

#### Out of Scope (casos de uso No Soportados)
El administrador no podrá realizar
* Agregar usuarios
* Modificar usuarios
* Eliminar usuarios
* Establecer una fecha limite para devolución de libro
---
## Arquitectura

### Diagramas
poner diagramas de secuencia, uml, etc

### Modelo de datos
Poner diseño de entidades, Jsons, tablas, diagramas entidad relación, etc..

---
## Limitaciones
* No hay conexión a base de datos
* Los datos se guardan en un arreglo de objetos
---
## Costo
Descripción/Analisis de costos
Ejemplo:
"Considerando N usuarios diarios, M llamadas a X servicio/baseDatos/etc"
* 1000 llamadas diarias a serverless functions. $XX.XX
* 1000 read/write units diarias a X Database on-demand. $XX.XX
Total: $xx.xx (al mes/dia/año)
