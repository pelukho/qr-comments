.DEFAULT_GOAL := help
.PHONY: help
help: ## This help. %s - it's a project name (e.g. legit, nur) in some commands.
	@awk 'BEGIN {FS = ":.*?## "} /^[%a-zA-Z_-]+:.*?## / {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)

up: ## Builds and starts HTTP server in background
	docker-compose up -d

start: ## Starts HTTP server
	docker-compose start

stop: ## Stops HTTP server
	docker-compose stop