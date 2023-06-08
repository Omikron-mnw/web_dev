.DEFAULT_GOAL := help

help: ## このヘルプメッセージを出力
	@echo
	@printf "\033[1;4mUSAGE\033[0m\n"
	@printf " \033[1mmake \033[36m[TARGET] \033[32m([ARGS])\033[0m\n"
	@echo
	@printf "\033[1;4mTARGETS\033[0m\n"
	@grep -E '^[/0-9a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | perl -pe 's%^([/0-9a-zA-Z_-]+):.*?(##)%$$1 $$2%' | awk -F " *?## *?" '{printf " \033[1;36m%-20s\033[0m %s\n", $$1, $$2}'
.PHONY: help

up: ## コンテナ起動
	docker-compose up --build -d
.PHONY: up

app_in: ## アプリコンテナに入る
	docker-compose exec poll_app bash
.PHONY: app_in

db_in: ## DBコンテナに入るs
	docker-compose exec web_dev_app bash
.PHONY: db_in

down: ## コンテナ削除
	docker-compose down
.PHONY: down