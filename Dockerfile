FROM php:7.2-fpm
# Copiar composer.lock y composer.json
COPY composer.lock composer.json /var/www/
# Configurando directorio de trabjao
WORKDIR /var/www
# Installando dependencias
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl
# Instalando composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# Copiando la aplicacion actual
COPY . /var/www
# Dando Permisos a la carpeta /var/www
RUN chmod 755 /var/www

CMD ["php-fpm"]
