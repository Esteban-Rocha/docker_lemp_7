# Project Name

Docker LEMP Stack

This is a Custom version of a docker LEMP Stack with Nginx, PHP 7 and MariaDB.

## Installation

Git clone:

```
git clone https://github.com/Esteban-Rocha/docker_lemp_7.git
```

Docker

```
docker-compose up -d
```

## Usage
Goto:

 + http://localhost:8085

## Folder Structure

 + database
```
Volume standing at MariaDB container on /home
For dumps and data export import.
```
 + logs
```
Volume standing at Nginx container on /var/log/nginx/
To have Nginx server logs.
```
 + nginx
```
Volume standing at Nginx container on /etc/nginx/conf.d/
To override default.conf with our own.
```
 + public
```
Volume standing at Nginx container on /code
Your code base be static HTML or PHP goes here.
```

Enjoy!

## History

 + m@Ver_1.0.0

## Credits

Esteban Rocha

## License

Project under the [BSD LICENSE](LICENSE)
