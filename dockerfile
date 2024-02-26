from php:7.4-apache

## configuraciones iniciales
ENV APACHE_DOCUMENT_ROOT /var/www/hmtl
RUN cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini

## copiar archivos
COPY ./ome_v2/ /var/www/html/ 

# Instalar dependencias requeridas para la extensión intl
RUN apt-get update && apt-get install -y \
    libicu-dev \
    zlib1g-dev \
    git \
    unzip \
    nano

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Establecer el directorio de trabajo
WORKDIR /var/www/html/

# Copiar el archivo composer.json y composer.lock (si existe)
# COPY composer.json composer.lock ./

# Habilitar la extensión intl de PHP

RUN docker-php-ext-install intl
RUN docker-php-ext-install mysqli

# permisos de carpetas por usuario
RUN chown -R www-data:www-data writable/cache
RUN chown -R www-data:www-data writable/session
RUN chown -R www-data:www-data writable/uploads
RUN chown -R www-data:www-data writable/logs

# permisos de carpetas
RUN chmod 775 -R writable/cache/
RUN chmod 775 -R writable/session/
RUN chmod 775 -R writable/uploads/
RUN chmod 775 -R writable/logs/

# Habilitar el módulo rewrite de Apache
RUN a2enmod rewrite

# Reiniciar Apache
RUN service apache2 restart

EXPOSE 80
