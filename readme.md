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