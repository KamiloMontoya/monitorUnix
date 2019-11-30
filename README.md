
## Monitor Unix

**Monitor Unix** es un aplicativo desarrollado en Laravel 6.0 (https://laravel.com/docs) para monitorear el estado de un servidor con sistema operativo Linux, los datos que puede ver en el monitor son:

- Verion del sistema operativo
- Version del kernel de linux
- Porcentaje de uso de la CPU
- Porcentaje de uso de la memoria RAM
- Porcentaje de uso del disco duro
- IP pública
- IP privada
Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Instalación del aplicativo

### Prerequisitos

Para instalar este aplicativo, el servidor debe contar con los siguientes prerequisitos

- PHP version 7.2 o superior (para instalarlo en Ubuntu puede ejecutar el comando "$ apt-get install php" y ademas las dependencias: "$ sudo apt-get install php-gd php-xml php7.2-mbstring php-fpm")
- NodeJS (para instalarlo en Ubuntu puede seguir esta guía https://joshtronic.com/2018/05/08/how-to-install-nodejs-10-on-ubuntu-1804-lts)
- PHP Composer (para instalarlo en Ubuntu puede seguir esta guía https://linuxize.com/post/how-to-install-and-use-composer-on-ubuntu-18-04/)

### Instalación y configuración

- Primero debe clonar el repositorio de Git
- Dar permisos "chmod -R 777" a las carpetas /storage y /boostrap/cache
- Ejecutar el comando npm install
- Ejecutar el comando composer install
- Copar la configuración por defecto $cp .env.prod .env
- Configurar el servidor para acceder al archivo /public/index.php. En el caso de Ningx configure el archivo "/etc/nginx/sites-enabled/default" así:

		server {
	        listen 8088 default_server;
	        listen [::]:8088 default_server;
			# root /var/www/html;
	        root /home/ubuntu/monitorUnix/public;
	        # Add index.php to the list if you are using PHP
	        index index.php index.html index.htm index.nginx-debian.html;

	        server_name _;

	        location / {
	                # First attempt to serve request as file, then
	                # as directory, then fall back to displaying a 404.
	                # try_files $uri $uri/ =404;
	                try_files $uri $uri/ /index.php?$query_string;
	        }
	    }

Finalmente reinicie el servidor $ sudo systemctl restart nginx

