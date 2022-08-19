# **[Docker 20.10.7](https://docs.docker.com/engine/release-notes/)**
- **[Nginx 1.19-alpine](https://hub.docker.com/layers/nginx/library/nginx/1.19.2-alpine/images/sha256-3d4c3485cf8af9c0e38718409918ed6255caa32d6867cf667a7339b0c5a5641e?context=explore)**
- **[PHP 8.1](https://hub.docker.com/layers/php/library/php/8.1.0-fpm/images/sha256-001281a0eb6140b0e5096664d785abd6e6d2921316d002c1d912867725076299?context=explore)**
- **[phpMyAdm](https://hub.docker.com/r/phpmyadmin/phpmyadmin/)**
- **[Composer 2.1.6](https://getcomposer.org/)**
- **[ramsey/uuid 4.3](https://uuid.ramsey.dev/en/4.3.0/)**
- **[Autoload PSR-4](https://www.php-fig.org/psr/psr-4/)**
- **[]()**


# Docker basic operations
- $ sudo service docker status/restart : [To check status & restart docker]  
- $ docker-compose up                  : [To start and restart all the services defined in docker-compose.yml]
- $ docker-compose up -d               : [To start container in background]
- $ sudo docker ps                     : [To see current running containers]

- Now we could run http://localhost:8001/

- $ docker-compose start               : [To restart containers stopped previously]
- $ docker-compose stop   or `ctrl+c`  : [To stop running containers but won’t remove them]
- $ docker-compose down -v             : [To stop running containers, it also removes the stopped containers as well as any networks that were created and add the -v flag to remove all volumes too]



# SSH to Docker
- Go to docker dir
- Run - sudo docker ps -a [Find the container name]
- Run - sudo docker exec -it container_name bash
- Now we are inside the container - root@54278f6cb8dd:/var/www#
- Run composer - root@54278f6cb8dd:/var/www# composer


              COMPOSER

Composer 2.3.1 2022-03-30 15:41:28




