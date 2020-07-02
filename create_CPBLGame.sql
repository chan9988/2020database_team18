create table 19CPBLGame (
  	player_id 	int,
  	player_name 	varchar(30),
  	year 		int,
  	lv		int,
  	pow		int,
	throw		int,
	field		int
);


load data local infile './19CPBLGame_test.csv'
into table 19CPBLGame
fields terminated by ','
enclosed by '"'
lines terminated by '\r\n'
