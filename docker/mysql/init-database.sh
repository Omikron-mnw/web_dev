
sleep 10;mysql -uroot -proot poll_db < "/docker-entrypoint-initdb.d/pollapp.sql"