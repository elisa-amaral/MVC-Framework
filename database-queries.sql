create database mvc_framework_in_php
CHARACTER SET utf8 COLLATE utf8_general_ci;

use mvc_framework_in_php;

create table products (
	id int not null primary key auto_increment,
	description varchar(200) not null,
	price float(8,2) not null
);

insert into products(description, price)values('All-in-One Computer', 1200.50);
insert into products(description, price)values('Mouse', 20.99);
insert into products(description, price)values('Mousepad', 10.99);
insert into products(description, price)values('Keyboard', 30.75);
insert into products(description, price)values('Speakers', 25.50);
insert into products(description, price)values('Webcam', 250.25);


create table data (
	id int not null primary key auto_increment,
	title varchar(200) not null,
	description text not null
);

insert into data(title, description)values('Company Mission Statement', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');
insert into data(title, description)values('Company Vision Statement', 'Morbi faucibus elit nec nibh elementum, a ultrices ante condimentum.');
insert into data(title, description)values('Company Values Statement', 'Pellentesque faucibus egestas justo sed malesuada. Etiam convallis tortor diam, scelerisque sodales nibh consequat quis. Nullam sodales nunc neque, eu placerat ex ultrices a. Nulla sed sapien eu orci egestas imperdiet fringilla ut massa.');
