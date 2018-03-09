FROM ubuntu:16.04
MAINTAINER Junerey Casuga <junerey.casuga@gmail.com>
LABEL authors="Junerey Casuga <junerey.casuga@gmail.com>"
ENV LANG C.UTF-8
ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && apt-get -y upgrade \
    && apt-get install -y software-properties-common \
    && add-apt-repository ppa:ondrej/php -y

RUN apt-get update && apt-get -y install supervisor \
    nginx \
    unzip \
    git \
    curl \
    php7.1-fpm \
    php7.1-cli \
    php7.1-gd \
    php7.1-imap \
    php7.1-intl \
    php7.1-json \
    php7.1-mcrypt \
    php7.1-mbstring \
    php7.1-ldap \
    php7.1-zip \
    php7.1-xml \
    php7.1-pgsql \
    php7.1-curl \
    npm && \
    apt-get clean

RUN curl -sL https://deb.nodesource.com/setup_6.x | bash -
RUN apt-get install -y nodejs

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer && chmod +x /usr/local/bin/composer

RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add -
RUN echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list
RUN apt-get update && apt-get install -y yarn

WORKDIR /var/www

COPY conf/php.ini /etc/php/7.1/fpm/99-custom.ini
COPY conf/www.conf /etc/php/7.1/fpm/pool.d/www.conf
COPY conf/supervisord.conf /etc/supervisord.conf
COPY conf/nginx.conf /etc/nginx/nginx.conf

RUN mkdir /var/run/php/

RUN useradd -u 1000 1000

ENTRYPOINT ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisord.conf"]

