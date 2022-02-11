FROM php:7.4-apache
COPY *.php /var/www/html/
RUN docker-php-ext-install mysqli
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 774 /var/www/html
