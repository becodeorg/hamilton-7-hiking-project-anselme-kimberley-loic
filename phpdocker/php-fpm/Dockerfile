FROM phpdockerio/php:8.1-fpm
WORKDIR "/application"

RUN apt-get update; \
    && npm install -g live-server --no-progress; \
    apt-get -y --no-install-recommends install \
        git \
        php8.1-mysql; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/* \

