docker run --name "serverLampTodo" --rm -p 81:80 -v /Users/florian/Personal/Todo/:/var/www/html fauria/lamp

## Lemp server
# linuxconfig/lemp

## Create a container linking to another MySQL container:
# docker run -d --link my-mysql-container:mysql -p 8080:80 -v /my/data/directory:/var/www/html -v /my/logs/directory:/var/log/httpd --name my-lamp-container fauria/lamp

## Get inside a running container and open a MariaDB console:
# docker exec -i -t my-lamp-container bash
# mysql -u root