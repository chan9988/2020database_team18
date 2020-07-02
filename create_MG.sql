create table 19MG(
	player_id int,
	player_name varchar(30),
	team  varchar(30),
	year	int,
	lv	varchar(2),
	pow	int,
	contact	int,
	speed	int,
	throw	int,
	field	int,
	primary key (player_id)
);

load data local infile './19MLBGame.csv'
into table 19MG
fields terminated by ','
enclosed by '"'
lines terminated by '\r\n'
ignore 1 lines;
