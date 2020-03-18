# docker run -it --network=host -v /home/wellington/projects/convesul-site/:/var/www/app/ convensul-site sh

FROM ambientum/php:7.2

COPY ./ /var/www/app

# RUN composer install

# RUN sudo chmod 777 -R storage/

# RUN sudo chmod 777 -R bootstrap/cache

CMD ["php", "artisan", "serve"]