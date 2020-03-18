# docker run -it --network=host -v /home/wellington/projects/likes-g/:/var/www/app/ likes-g sh

FROM ambientum/php:7.2

COPY ./ /var/www/app

CMD ["php", "artisan", "serve"]