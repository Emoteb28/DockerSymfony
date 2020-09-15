FROM php:7.4-apache

ENV COMPOSER_ALLOW_SUPERUSER=1
EXPOSE 80
# le repertoire qui contient vos sources (attention : dans le contenaire, donc le repertoire à droite du mapping du docker-compose)

RUN apt-get update -qq && \
    apt-get install -qy \
    git \
    gnupg \
    libicu-dev \
    libzip-dev \
    unzip \
    zip \
    nano \
    zlib1g-dev && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*


# PHP Extensions
RUN docker-php-ext-configure zip && \
    docker-php-ext-install -j$(nproc) intl opcache pdo_mysql zip


RUN docker-php-ext-install mysqli

    # On créé un utilisateur avec le même gid/uid que votre local
    # cela va permettre que les fichiers qui sont créés dans le contenaire auront vos droits
#RUN addgroup --system www-data --gid 1000 && adduser --system www-data --uid 1000 --ingroup www-data


# PHP Extensions
RUN docker-php-ext-configure zip && \
    docker-php-ext-install -j$(nproc) intl opcache pdo_mysql zip
COPY conf/php.ini /usr/local/etc/php/conf.d/app.ini

# On copie le php.ini du repertoire actuel dans le contenaire
COPY conf/php.ini /usr/local/etc/php/php.ini
# Apache
COPY  conf/vhosts.conf /etc/apache2/sites-available/000-default.conf
COPY  conf/apache.conf /etc/apache2/conf-available/z-app.conf

RUN a2enmod rewrite remoteip && \
    a2enconf z-app

 #RUN docker-php-ext-configure zip && \
#    docker-php-ext-install -j$(nproc) intl opcache pdo_mysql zip
#COPY conf/php.ini /usr/local/etc/php/conf.d/app.ini
# Définir les variables d'environnement pour déplacer le cache, les logs et les vendors.

# Créer les dossiers de cache et de logs et attribuer les permissions à l'utilisateur de php-fpm.+
RUN mkdir /var/www/test && chown -R www-data:www-data /var/www/test && \
 chown -R www-data:www-data /var/www/test && chmod -R 775 /var/www
# Apache
#COPY  errors /errors
#COPY  ../conf/vhosts.conf /etc/apache2/sites-available/000-default.conf
#COPY  ../conf/apache.conf /etc/apache2/conf-available/z-app.conf
#COPY index.php /app/index.php
#USER www-data
WORKDIR /var/www/

