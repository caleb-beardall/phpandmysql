CREATE USER 'jokesdbuser'@'%' IDENTIFIED BY 'jokesdbpassword';
GRANT ALL PRIVILEGES ON `jokesdb`.* TO 'jokesdbuser'@'%';