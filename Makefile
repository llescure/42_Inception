# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: llescure <llescure@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/06/03 10:40:53 by llescure          #+#    #+#              #
#    Updated: 2021/06/16 19:13:49 by llescure         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

run: docher-compose up -d

check: docker-compose config

list: docker-compose ps

stop: docker-compose stop

.PHONY: run check list stop
