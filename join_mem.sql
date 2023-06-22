create table join_mem(
  id varchar(10) not null,
  pw varchar(15) not null,
  name varchar(10) not null,
  hp varchar(20) not null,
  email varchar(80) not null,
  primary key(id)
)engine=innoDB charset=utf8;