docker container ls

To import:

docker exec -i docker_mariadb_1 mysql -uroot -pqwerty DB_NAME < your_local_db_dump.sql

To export:

docker exec -i docker_mariadb_1 mysqldump -uroot -pqwerty DB_NAME > your_local_db_dump.sql

mysql -root -p

SELECT user, host, plugin, authentication_string FROM mysql.user;

CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';

GRANT ALL ON *.* TO 'admin'@'localhost';

FLUSH PRIVILEGES;

DROP USER 'nom_utilisateur'@'localhost';
create table one
(
id int not null, 
name char(25)
)

SymfonyDocker
docker exec -it --user www-data docker_php_74_1 bash


RUN curl -o- -L https://yarnpkg.com/install.sh | \  bash -s -- --version 0.26.1
RUN yarn global add nodemon@1.11.0

Apache pack
composer require form validator twig-bundle security-csrf annotations