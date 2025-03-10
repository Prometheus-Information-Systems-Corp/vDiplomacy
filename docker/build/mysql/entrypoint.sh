#!/bin/bash
while true; do
    if mysqladmin ping -h localhost -u root -p$SQL_ROOT_PASSWORD 2>/dev/null; then
        echo "MySQL server is up and running!"
        break
    else
        echo "MySQL server is down. Retrying in 5 seconds..."
        sleep 5
    fi
done
mysql -u root -p$SQL_ROOT_PASSWORD -e "CREATE USER '$MYSQL_USER'@'$MYSQL_HOST' IDENTIFIED BY '$SQL_ROOT_PASSWORD';" && \
 mysql -u root -p$SQL_ROOT_PASSWORD -e "GRANT ALL PRIVILEGES ON $MYSQL_DATABASE.* TO '$MYSQL_USER'@'$MYSQL_HOST';" && \
 mysql -u root -p$SQL_ROOT_PASSWORD -e "FLUSH PRIVILEGES;" && \
 mysql -u root -p$SQL_ROOT_PASSWORD -e "ALTER USER '$MYSQL_USER'@'$MYSQL_HOST' IDENTIFIED WITH mysql_native_password BY '$SQL_ROOT_PASSWORD';"
mysql -u root -p$SQL_ROOT_PASSWORD $MYSQL_DATABASE < /fullInstall.sql
mysql -u root -p$SQL_ROOT_PASSWORD $MYSQL_DATABASE < /fullInstall-vdip.sql