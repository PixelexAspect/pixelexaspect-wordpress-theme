FROM wordpress

COPY --from=composer:2.0.6 /usr/bin/composer /usr/bin/composer

RUN apt-get update \
    && curl -sL https://deb.nodesource.com/setup_14.x | bash - \
    && apt install -y nodejs
