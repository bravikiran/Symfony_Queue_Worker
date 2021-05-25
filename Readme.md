# 🐳 Docker + PHP 7.4 + Symfony 5 + Rabbitmq

## Description

This is a complete stack for running Symfony 5 into Docker containers using docker-compose tool.

It is composed by 2 containers:

- `php`, the PHP-FPM container with the 7.4 PHPversion.
- `rabbitmq` which is the message broker container with a **rabbitmq 3.8** image.

## Installation

1. 😀 Clone this rep.

2. Run `docker-compose up -d`

3. The 2 containers are deployed: 

```
Creating symfony-docker_php_1   ... done
Creating symfony-docker_rabbitmq_1 ... done
```

4. Use this value for the Symfony_URL environment variable of Symfony:

```
localhost:8000
```
5. Use this value for the Rabbitmq_URL environment variable of RabbitMq:

```
localhost:15672
```
Username: guest and password: guest


6. After docker compose up open another terminal and enter docker container with below cmd

```
docker exec -it symfony \bin\bash
```
7. Manual start of messenger to send message to the rabbitmq  
```
php bin/console messenger:consume async 
```
7.1 use -vv to see details what's happening 
```
php bin/console messenger:consume async -vv
```
8. Manual start and stop of messenger with flag

```
php bin/console messenger:consume async --time-limit=3600
```





 
