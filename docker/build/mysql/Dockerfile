FROM mysql:5
USER root
RUN chmod 775 /var/lib/mysql
RUN echo '[mysqld]' > /etc/mysql/conf.d/disable_strict_mode.cnf && \
    echo 'sql_mode=IGNORE_SPACE,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' >> /etc/mysql/conf.d/disable_strict_mode.cnf
ENV SQL_ROOT_PASSWORD=super-secret-password
COPY resources/fullInstall-vdip.sql /fullInstall-vdip.sql
COPY resources/fullInstall.sql /fullInstall.sql
COPY entrypoint.sh /docker-entrypoint-initdb.d/ep.sh
RUN chmod +x /docker-entrypoint-initdb.d/ep.sh

