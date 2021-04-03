# Simple Blog

## Description
It's a simple blog application build from scratch.
I've used composer here only for PSR-4 autoloading and to install routing and template engine packages.
********************************************************************************
## How to use ? 
You can start this application easily using **_docker-compose_**, so you've to pre-install **docker** and **docker-compose** before running it
### steps
- [CHECK NOTES PLEASE] to start this application please, run this command `make run` or `docker-compose up -d`
- go to the homepage using your browser on from [http://127.0.0.1:8100](http://127.0.0.1:8100) or [http://localhost:8100](http://localhost:8100)
- to stop this application please, run this command `make stop` or `docker-compose stop`
********************************************************************************
### Notes 
- I've faced some problems while using **docker-compose** the _web_ container can access the _mysql_ container through it's gateway not using it's service name. I will fix this soon and get back to you
  but for now you can use your own server or after running `make run`
  use `docker inspect mysql | grep "Gateway"` it will be like this `172.27.0.1`
  and change host in `Database.php` file :D sorry for that.

- Database can be found in the _database_ directory it's name is *backup_blog.sql* 

- I'm using SonarLint and it did not produce any problem for my code except to finish the TODOs.
  
- I've put some TODOs just because the lake of time to describe fast how can I finish the task.