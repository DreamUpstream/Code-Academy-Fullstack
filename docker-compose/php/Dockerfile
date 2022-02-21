FROM php:7.4-fpm-bullseye

RUN apt-get update && apt-get install -y \
        locales \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        # libmagickwand-dev --no-install-recommends \
        ghostscript \
        git \
        zip libzip-dev \
        unzip

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-install pdo pdo_mysql



# RUN docker-php-ext-install zip \
# && docker-php-ext-configure gd --with-freetype --with-jpeg \
# && docker-php-ext-install -j$(nproc) gd

# RUN pecl install imagick-3.6.0 && docker-php-ext-enable imagick
# RUN pecl install xdebug && docker-php-ext-enable xdebug

COPY ./conf/* /usr/local/etc/php/conf.d
# COPY ./image-magick /etc/ImageMagick-6

RUN echo 'en_US.UTF-8 UTF-8' >> /etc/locale.gen && \
    echo 'lt_LT.UTF-8 UTF-8' >> /etc/locale.gen  && \
    echo 'lv_LV.UTF-8 UTF-8' >> /etc/locale.gen  && \
    # # echo 'ee_EE.UTF-8 UTF-8' >> /etc/locale.gen  && \
    # echo 'fi_FI.UTF-8 UTF-8' >> /etc/locale.gen  && \
    # echo 'fr_FR.UTF-8 UTF-8' >> /etc/locale.gen  && \
    # echo 'de_DE.UTF-8 UTF-8' >> /etc/locale.gen  && \
    locale-gen

# RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
#     && php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
#     && php composer-setup.php \
#     && php -r "unlink('composer-setup.php');" \
#     && mv composer.phar /usr/local/bin/composer

COPY --from=composer:2.2.3 /usr/bin/composer /usr/bin/composer

ENV LANG en_US.UTF-8  
ENV LANGUAGE en_US:en  
ENV LC_ALL en_US.UTF-8