mensajes App
Aplicación para evidenciar algunos de los fallos que se conocen en OWASP

Estructura
index.php (inicio de la aplicación)

validar si existe una sesión de usuario, si existe, redireccionar a panel.php
si no existe una sesión, redireccionar a login.php
en login.php vamos a incluir un enlace registro hacia.php
login va a contener un formulario para iniciar sesión y un enlace a registro.php
Arquitectura
frontend: html (estructura) css (diseño) javascript (funcionalidad)

backend: servidor web (apache o nginx) backend lenguaje php

persistencia: sgbd (mysql)

Métodos HTTP (formularios y API)
get (traer información)
post (enviar y guardar información)
poner parche (para actualizar información)
eliminar (eliminar información) CRUD (crear, leer, actualizar, eliminar)