FROM php:7.1-apache
RUN apt-get update && \
    apt-get install -y -qq git \
        libjpeg62-turbo-dev \
        apt-transport-https \
        libfreetype6-dev \
        libmcrypt-dev \
        libssl-dev \
        zip unzip \
        nodejs \
        npm \
        wget \
        software-properties-common\
        nano \
        cron
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli pdo pdo_mysql
RUN pecl install redis && docker-php-ext-enable redis
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN docker-php-ext-install -j$(nproc) iconv mcrypt zip pdo pdo_mysql gd bcmath
RUN rm -rf /var/www/html/*
RUN git clone https://github.com/Sleepcap/vDiplomacy.git /var/www/html/
RUN cp -r javascript/* /usr/share/javascript/
RUN service apache2 restart
RUN chown -R www-data:www-data /var/www/html/
EXPOSE 80 
# Set environment variables for MySQL connection details
ENV MYSQL_HOST=mysql
ENV MYSQL_USER=diplouser
ENV MYSQL_PASSWORD=diplopass
ENV MYSQL_DATABASE=diplodbbeta
# Edit config.sample.php to set database connection details
RUN sed -i "s/public static \$database_socket='localhost';/public static \$database_socket='mysql';/g" /var/www/html/config.sample.php
RUN sed -i "s/public static \$database_username='root';/public static \$database_username='$MYSQL_USER';/g" /var/www/html/config.sample.php
RUN sed -i "s/public static \$database_password='';/public static \$database_password='$MYSQL_PASSWORD';/g" /var/www/html/config.sample.php
RUN sed -i "s/public static \$database_name='vDip';/public static \$database_name='$MYSQL_DATABASE';/g" /var/www/html/config.sample.php
RUN sed -i "s/74/71/g" /var/www/html/global/definitions.php
RUN sed -i "s/public static \$salt='';/public static \$salt='$VDIP_SALT';/g" /var/www/html/config.sample.php
RUN sed -i "s/public static \$secret='';/public static \$secret='$VDIP_SECRET';/g" /var/www/html/config.sample.php
RUN sed -i "s/public static \$gameMasterSecret='';/public static \$gameMasterSecret='$VDIP_GMSECRET';/g" /var/www/html/config.sample.php
# Rename config.sample.php to config.php
RUN mv /var/www/html/config.sample.php /var/www/html/config.php
# cron stuff
# ARG VDIP_GMSECRET
# COPY resources/cron /etc/cron.d/vdip_cron
# RUN chmod 0644 /etc/cron.d/vdip_cron
# RUN crontab /etc/cron.d/vdip_cron

