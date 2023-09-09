# Examen practico
### Desarrollo web movil

Este repositorio contiene el resultado commit a commit de mi examen práctico de la asignatura de introduccion al desarrollo web movil<br>
El proyecto será realizado utilizando una API RESTful con Laravel para el backend y para el frontend utilizare vue.js junto con axios para consumir la API. <br>
<br>
Aqui, incluiré los pasos a seguir para inicializar el proyecto para su revisión: <br>

Dependencias:
- Composer
- Xampp
- Axios

Pasos a seguir:
- Inicializar Apache y MySQL en XAMPP
- Crear una base de datos con el nombre "proyecto-examen" en phpmyadmin
- Ejecutar composer install
- Ejecutar copy .env.example .env
    Especificar la base de datos y el puerto a usar para la conexion con xampp dentro del .env
- Ejecutar php artisan migrate:fresh
- Ejecutar php artisan db:seed
- Ejecutar php artisan serve
- Entrar en la carpeta proyecto-examen-vue
- ejecutar npm install
- Ejecutar npm run dev

Tuve un error al final con CORS, no me acepto la http request desde vue pero puede verificar que la API funciona con postman

Pude arreglar el error posteriormente al examen (19:55), publiqué el ultimo commit para demostrar mi esfuerzo y que pude hacer funcionar la conexion entre el backend y el frontend.


