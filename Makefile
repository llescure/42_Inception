# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: llescure <llescure@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/06/03 10:40:53 by llescure          #+#    #+#              #
#    Updated: 2021/06/17 10:11:39 by llescure         ###   ########.fr        #
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

run: 
	@echo "$(GREEN)Building containers $(RESET)"
	docker-compose up -d


check:	
	@echo "$(BLUE)Checking syntax of docker-compose.yml $(RESET)"
	 docker-compose config


list:	
	@echo "$(PURPLE)Listing all containers $(RESET)"
	 docker-compose ps -a


stop: 
	@echo "$(RED)Stopping containers $(RESET)"
	docker-compose stop

.PHONY: run check list stop
