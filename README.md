This project has a framework for creating a php project on Heroku, creating a Postgress database (addon), connecting to the database and displaying results on a webpage.

Steps to re-create the project:

Download this project from git

Ensure php, git and composer are installed on your computer

Execute the following steps to create heroku app:

cd [name_of_folder]

heroku login

heroku create

Execute the following steps to setup the heroku Postgres DB and add data into the DB:

heroku addons:create heroku-postgresql:hobby-dev

heroku psql

CREATE TABLE employee ( id integer primary key, name varchar(20) not null, mgr integer );

INSERT into employee (id,name) values (1,'John’);

INSERT into employee values (2,'Jack’,1);

INSERT into employee values (3,'Alex’,1);

INSERT into employee values (5,'Alice’,3);

INSERT into employee values (4,'Amy’,2);

INSERT into employee values (6,'Bob’,3);

INSERT into employee values (7,'Ann',5);

Execute the following steps to push the code into heroku and deploy it:

git add .

git commit -m

git commit -am "Added code for database"

git push heroku master
