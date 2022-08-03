## Vocation
Praction with Redis using predis package and Laravel.

## Description
In project is abled:
* Put string (name) in to redis, using key-value storage. Get it back.
* Put two nubers using multiple set to key-value storage. Increment them in transaction. Get them to 
  screen.
* Set a hash with 20 items through Laravel's facade "Redis::pipeline". Get them to screen. 

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
