FROM trafex/php-nginx:latest
COPY *.php /var/www/html/
COPY assets /var/www/html/assets
COPY image /var/www/html/image
COPY thankyou /var/www/html/thankyou
