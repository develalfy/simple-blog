run:
	@echo "Starting project..."
	@docker-compose up -d
	@echo "Started!"
stop:
	@echo "Stopping project..."
	@docker-compose stop
	@echo "Stopped!"
