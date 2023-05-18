
docker-compose exec poll_db bash -c "chmod 0775 docker-entrypoint-initdb.d/init-database.sh"
# docker-compose exec poll_db bash -c "mysql -uroot -proot poll_db < '/docker-entrypoint-initdb.d/pollapp.sql'"
docker-compose exec poll_db bash -c "./docker-entrypoint-initdb.d/init-database.sh"