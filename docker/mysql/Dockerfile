FROM mysql:8.0

COPY ./my.cnf /etc/mysql/conf.d/my.cnf
COPY ./pollapp.sql /docker-entrypoint-initdb.d/pollapp.sql
COPY ./init-database.sh /docker-entrypoint-initdb.d/init-database.sh