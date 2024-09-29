Modificación del archivo curriculum.json
El archivo storage/app/public/curriculum.json contiene los datos del currículum que se mostrarán en la aplicación. Para personalizar el currículum con los datos de un egresado, sigue estos pasos:

Ubicación: El archivo curriculum.json se encuentra en la ruta storage/app/public/curriculum.json. Debes acceder a este archivo y modificarlo con la información adecuada.

Campos a modificar:

Información personal: Cambia los valores de los campos "nombre", "telefono", "email", y "linkedin" con los datos del egresado.
Experiencia laboral: Actualiza la sección "experiencia". Cada entrada debe incluir:
"empresa": Nombre de la empresa donde trabajó el egresado.
"cargo": Cargo ocupado en la empresa.
"fecha": Periodo de tiempo en que trabajó allí.
"descripcion": Descripción de las tareas o responsabilidades.
Educación: Modifica la sección "educacion", con:
"institucion": Nombre de la institución educativa.
"titulo": Título o certificado obtenido.
"fecha": Año de finalización o periodo de estudios.
Habilidades: Cambia el array "skills" con las habilidades del egresado.
