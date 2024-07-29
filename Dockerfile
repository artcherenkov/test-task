# Используем официальный образ PHP 8.1 с Apache
FROM php:8.1-apache

# Устанавливаем необходимые расширения PHP
RUN docker-php-ext-install mysqli

# Включаем модуль mod_rewrite Apache
RUN a2enmod rewrite

# Копируем содержимое текущей директории в директорию веб-сервера
COPY . /var/www/html/

# Устанавливаем права доступа для директории
RUN chown -R www-data:www-data /var/www/html

# Указываем рабочую директорию
WORKDIR /var/www/html
