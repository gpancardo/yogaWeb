# Proyecto YogaWeb

## Modelo Entidad-Relación
![Logo de YogaWeb](imagenes/imagenrocas.jpg)

La base de datos **“YogaWeb”** es creada para gestionar usuarios de una aplicación de Yoga. Incluye una tabla de usuarios con varios campos para almacenar información como nombre de usuario, teléfono, edad, contraseña, progreso y la fecha de registro. Cada usuario tiene un identificador único (id) que se incrementa automáticamente con cada nuevo registro. La base de datos está configurada para utilizar el conjunto de caracteres UTF-8 y está optimizada para el idioma español.

- **Id**: Entero de 11 dígitos, no nulo, auto-incremental, es la clave primaria.
- **Nombre_usuario**: Cadena de caracteres de hasta 50 caracteres, no nula.
- **Teléfono**: Entero de 10 dígitos, no nulo.
- **Edad**: Entero de 2 dígitos, no nulo.
- **Password**: Cadena de caracteres de hasta 20 caracteres, no nula.
- **Progreso**: Entero de 3 dígitos, no nulo, este va registrar el progreso del usuario.
- **Fecha_registro**: Fecha y hora de registro, no nula, con valor predeterminado la marca de tiempo actual (CURRENT_TIMESTAMP).

### Especificaciones Técnicas

- **Motor de almacenamiento**: InnoDB
  - Soporte de transacciones
  - Restricciones de integridad referencial
- **Conjunto de caracteres**: UTF-8

Esta configuración asegura que la base de datos maneje adecuadamente el almacenamiento de texto en múltiples idiomas y que las operaciones sean seguras y consistentes gracias al motor de almacenamiento **InnoDB**.

### Ejemplo de Creación de Tabla en SQL

```sql
CREATE TABLE usuarios (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nombre_usuario VARCHAR(50) NOT NULL,
  teléfono INT(10) NOT NULL,
  edad INT(2) NOT NULL,
  password VARCHAR(20) NOT NULL,
  progreso INT(3) NOT NULL,
  fecha_registro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
