FROM php:8.2-fpm

# Installation des dépendances système
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libicu-dev \
    zlib1g-dev \
    libzip-dev \
    nodejs \
    npm

# Configuration PHP
RUN docker-php-ext-install \
    pdo_mysql \
    intl \
    zip

# Installation de Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier les fichiers du projet
COPY ./app /var/www/html/

# Installation des dépendances PHP
RUN COMPOSER_ALLOW_SUPERUSER=1 composer install --no-scripts --no-interaction

# Installation des dépendances Node.js si package.json existe
COPY package*.json ./
RUN if [ -f package.json ]; then npm install; fi

# Permissions pour le cache et les logs
RUN mkdir -p var && chmod -R 777 var/

# Exposer le port Node.js
EXPOSE 3000

# Par défaut, on lance PHP-FPM
CMD ["php-fpm"]
