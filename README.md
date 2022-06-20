# Instalacion Y Uso
## Prerrequisitos:
- Docker Desktop: https://docs.docker.com/desktop/
- DDEV: https://ddev.readthedocs.io/en/stable/

Luego de tener instalado Docker y DDEV, tendremos que crear una carpeta donde meteremos nuestro proyecto. Luego de movernos a esa carpeta, lo clonaremos usando: 
>git clone (link del proyecyo)

Despues, nos movemos  la carpeta creada por el git y usamos el comando:
>ddev config

Ponemos un nombre, dejamos la ubicacion local y ponemos **laravel** como tipo de proyecto.

Ahora usaremos instalaremos el composer con el comando:
>ddev composer install

Ahora, para hacer el archivo de ambiente usamos los siguientes comandos:
>cp .env.example .env
php artisan key:generate

Y por ultimo damos a iniciar nuestro proyecto con el comando:
>ddev start

Esto nos dara una URL la cual tenemos que copiar y pegarla en el navegador para que laravel nos tire la pagina.


------------

Fin :P
