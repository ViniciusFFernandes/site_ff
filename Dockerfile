FROM php:8.2-apache

# Habilita mod_rewrite (opcional)
RUN a2enmod rewrite

# Copia o projeto para a pasta pública do Apache
COPY . /var/www/html/

# Ajusta permissões (geralmente não precisa, mas ajuda)
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
