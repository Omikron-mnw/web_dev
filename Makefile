# NAME=
# VERSION=

build:
	docker-compose up --build -d

db-in:
	docker-compose exec web_dev_app bash

sql:
	mysql -u root -p web_dev_db
