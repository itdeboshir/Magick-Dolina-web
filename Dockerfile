FROM php:8.1-apache
COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html
ENV DB_HOST="192.168.31.110"         
ENV DB_PORT="3306"              
ENV DB_DATABASE="site"          
ENV DB_USERNAME="root"          
ENV DB_PASSWORD="mysql"         
EXPOSE 80
CMD ["apache2-foreground"]