create database electricityphp;
use electricityphp;





create table if not exists customer
(
customerid int(5) primary key auto_increment,
customername varchar(50),
contact varchar(10),
email varchar(50) unique key,
password varchar(50),
address varchar(100),
city varchar(30),
state varchar(50)
);

create table if not exists connection
(
connectionid varchar(10) primary key,
customerid int(5),
connectiontype varchar(20),
connectionstartdate varchar(50),
occupation varchar(20),
connectionload varchar(30) ,
plotno varchar(100),
city varchar(30),
pincode varchar(30),
address varchar(30),
state varchar(50),
description varchar(100)
);

create table if not exists bill
(
billid int(5) primary key auto_increment,
connectionid varchar(10),
billformonth varchar(30),
currentreading varchar(10),
previousreading varchar(10),
totalunits varchar(10),
chargeperunit varchar(10),
finalamount varchar(30),
duedate varchar(50),
status varchar(20)
);



create table if not exists admin
(
adminname varchar(30)  not null,
password varchar(10) default null,
PRIMARY KEY(adminname)
);

insert into admin(adminname,password) values('admin','admin');
