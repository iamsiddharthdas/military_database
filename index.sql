create table users(userid int not null, name varchar(50) not null,phone varchar(20) not null, email varchar(50) not null, password varchar(20) not null, address varchar(100) not null,usertype varchar(50) not null, primary key(userid));

create table account (acc_no int not null, userid int not null,ddate date not null, expiry date not null, balance int not null, primary key(acc_no, userid));


create table stock (stockid int not null, company varchar(50) not null, title varchar(100) not null,ddate date not null,minbid int not null,maxbid int not null,inc_dec int not null, primary key(stockid));


create table transaction(trans_id int not null, userid int not null,ddate date not null,stockid int not null,quantity int not null,price_per int not null,price_total int not null,buy_sell varchar(50) not null, primary key(trans_id),foreign key(userid) references users(userid),foreign key(stockid) references stock(stockid));


create table feedback (fid int not null, userid int not null, content varchar(200) not null, primary(fid), foreign key(userid) references users(userid));
