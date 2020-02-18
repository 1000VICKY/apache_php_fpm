FROM php:7.3.14-fpm


RUN apt-get update
RUN apt-get install -y libpq-dev libjpeg-dev libpng-dev vim nodejs libzip-dev unzip ca-certificates git
RUN docker-php-ext-configure gd --with-jpeg-dir=/usr/include --with-png-dir=/usr/include
RUN docker-php-ext-install gd opcache pdo_pgsql pdo_mysql zip

RUN git config --global http.sslVerify false
# Composerのインストール
#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

# zend opcacheを有効にしたphp.iniファイルをコピーする
COPY ./php.ini /usr/local/etc/php/php.ini
WORKDIR /var/www/html/en
#RUN cd /var/www/html/en && composer install

# ENTRYPOINT ["docker-php-entrypoint"]
# CMD ["-DFOREGROUND"]

# ENTRYPOINT ["/usr/local/bin/docker-php-entrypoint", "-DFOREGROUND"]
#WORKDIR /var/www/html
#CMD ["/usr/local/bin/docker-php-entrypoint", "-DFOREGROUND"]
