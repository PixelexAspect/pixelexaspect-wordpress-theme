FROM wordpress

COPY --from=composer:2.0.6 /usr/bin/composer /usr/bin/composer
