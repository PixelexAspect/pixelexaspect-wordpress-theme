# Pixelex Aspect WordPress Theme and Plugin

> Style and Design Copyright of Pixelex Aspect and Authored By Gemma Black

## Development

### Requirements

- Docker and docker-compose
- Bash

### Installation

```bash
# Start the Docker container
./uposcar

# Composer commands
./uposcar composer install

# Npm dependencies and asssets
./uposcar npm install
./uposcar npx webpack
```

The `.htaccess`

```.htaccess
# BEGIN WordPress
# The directives (lines) between "BEGIN WordPress" and "END WordPress" are
# dynamically generated, and should only be modified via WordPress filters.
# Any changes to the directives between these markers will be overwritten.

RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]

# END WordPress
```
