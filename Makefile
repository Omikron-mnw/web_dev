.GOAL_DEFULT = help

help:
.PHONY: help

up:
	docker-compose up --build -d
.PHONY: up

app_in:
	docker-compose exec poll_app bash
.PHONY: app_in

db-in:
	docker-compose exec web_dev_app bash
.PHONY: db_in

sql:
	mysql -u root -p web_dev_db
.PHONY: sql