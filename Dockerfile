# Використовуємо офіційний PHP образ
FROM php:8.1-apache

# Копіюємо всі файли до веб-каталогу сервера Apache
COPY . /var/www/html/

# Налаштовуємо доступ до файлів
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Відкриваємо порт 80 (стандартний для вебсервера)
EXPOSE 80