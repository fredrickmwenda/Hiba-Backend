# Start with the base PHP image
FROM php:8.2-fpm

# Arguments defined in docker-compose.yml
# ARG user=hiba
# ARG uid=1000

# Ensure www-data group exists
# RUN groupadd -g 33 www-data || true

# Ensure user doesn't exist before adding
# RUN userdel -f $user || true

# Create system user to run Composer and Artisan Commands
# RUN useradd -G www-data -u $uid -d /home/$user -s /bin/bash $user \
#     && mkdir -p /home/$user/.composer \
#     && chown -R $user:$user /home/$user

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libpq-dev \
    && docker-php-ext-install pdo_pgsql

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www-data:www-data . /var/www

# Change current user to www
USER www-data

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]

# Copy Apache vhost configuration
# COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf 

# Set working directory
# WORKDIR /var/www

# Switch to the created user
# USER $user
