## Vocation
Praction with Redis using predis package and Laravel.

## Description
In project is abled:
* Put string (name) it to redis, using key-value, storage. Get it back.
* Put two nubers usung multiple set to key-value storage. Increment them in transaction. Get them to 
  screen.
* Set a hash with 20 items through Laravel's facade "Redis::pipline". Get them to screen. 

## How to run
```
docker-compose up -d
```
```
docker exec -it 38_php-apache_1 bash
```
```
service redis-server restart
```
Visit http://localhost
