# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: llescure <llescure@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/06/03 10:40:53 by llescure          #+#    #+#              #
#    Updated: 2021/07/23 12:27:01 by llescure         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

BLACK		:= $(shell tput -Txterm setaf 0)
RED		:= $(shell tput -Txterm setaf 1)
GREEN		:= $(shell tput -Txterm setaf 2)
YELLOW		:= $(shell tput -Txterm setaf 3)
LIGHTPURPLE	:= $(shell tput -Txterm setaf 4)
PURPLE		:= $(shell tput -Txterm setaf 5)
BLUE		:= $(shell tput -Txterm setaf 6)
WHITE		:= $(shell tput -Txterm setaf 7)
RESET		:= $(shell tput -Txterm sgr0)

COMPOSE_FILE=./srcs/docker-compose.yml

all: run

run: 
	@echo "$(GREEN)Building containers $(RESET)"
	docker-compose -f $(COMPOSE_FILE) up

run_background:
	@echo "$(GREEN)Building containers in background $(RESET)"
	docker-compose -f $(COMPOSE_FILE) up -d

debug:
	@echo "$(GREEN)Building containers with log information $(RESET)"
	docker-compose -f $(COMPOSE_FILE) --verbose up

list:	
	@echo "$(PURPLE)Listing all containers $(RESET)"
	 docker ps -a

list_volumes:
	@echo "$(PURPLE)Listing volumes $(RESET)"
	docker volume ls

delete_volumes:
	@echo "$(RED)Deleting all volumes $(RESET)"
	-docker volume rm `docker volume ls -q`

delete_images:
	@echo "$(RED)Deleting all images $(RESET)"
	-docker rmi `docker images -a -q`

stop: 
	@echo "$(RED)Stopping containers $(RESET)"
	docker-compose -f $(COMPOSE_FILE) down

clean: stop delete_volumes delete_images
	@echo "$(RED)Deleting all $(RESET)"

.PHONY: run run_background list list_volumes delete_volumes delete_images stop clean
