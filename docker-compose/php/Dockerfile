FROM php:7.4-fpm-bullseye

RUN apt-get update && apt-get install -y \
        locales \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd 

COPY ./conf/* /usr/local/etc/php/conf.d

RUN echo 'en_US.UTF-8 UTF-8' >> /etc/locale.gen && \
    echo 'lt_LT.UTF-8 UTF-8' >> /etc/locale.gen  && \
    echo 'lv_LV.UTF-8 UTF-8' >> /etc/locale.gen  && \
    # echo 'ee_EE.UTF-8 UTF-8' >> /etc/locale.gen  && \
    echo 'fi_FI.UTF-8 UTF-8' >> /etc/locale.gen  && \
    echo 'fr_FR.UTF-8 UTF-8' >> /etc/locale.gen  && \
    echo 'de_DE.UTF-8 UTF-8' >> /etc/locale.gen  && \
    locale-gen

COPY --from=composer:2.2.3 /usr/bin/composer /usr/bin/composer

ENV LANG en_US.UTF-8  
ENV LANGUAGE en_US:en  
ENV LC_ALL en_US.UTF-8