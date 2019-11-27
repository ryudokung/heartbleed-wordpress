# hearbleed-wordpressmockup README is coming soon.
```
docker run --name mysql-cont -e MYSQL_DATABASE=wordpress -e MYSQL_ROOT_PASSWORD=qwerty -d mysql:5.7
docker run --link mysql-cont:mysql -e WORDPRESS_DB_USER=root -e WORDPRESS_DB_PASSWORD=qwerty -e WORDPRESS_TABLE_PREFIX=dx36fd_ --link mysql-cont:mysql -p 443:443 -d heartbleed-wordpress
