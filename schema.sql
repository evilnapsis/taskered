create database taskered;
use taskered;

create table user(
	id int not null auto_increment primary key,
	name varchar(50),
	lastname varchar(50),
	username varchar(50),
	email varchar(255),
	password varchar(60),
	image varchar(255),
	status int default 1,
	kind int default 1,
	created_at datetime
);


create table item(
	id int not null auto_increment primary key,
	title varchar(512),
	description text,
	file varchar(255),
	start_at date,
	finish_at date,
	item_id int,
	is_featured boolean not null default 0,
	kind int not null, /* 1. proyecto, 2. tarea, 3. archivo, 4. comentario*/
	status int not null default 1,
	created_at datetime
);

insert into user (name,username,password,created_at) value ("Administrator","admin",sha1(md5("admin")),NOW());
