create table 19MB(
	player_name varchar(30),
	team varchar(30),
	year	int,
	G	int,
	PA      int,
        AB      int,
        R	int,
	H       int,
        2B      int,
        3B      int,
        HR      int,
        RBI     int,
        SB      int,
        CS      int,
        BB      int,
        SO      int,
        BA      float,
        OBP     float,
        SLG     float,
        OPS     float,
        OPS_plus int,
	TB      int,
        GDP     int,
        HBP     int,
        SH      int,
        SF      int,
        IBB     int
);

load data local infile './19MLBBatting.csv'
into table 19MB
fields terminated by ','
enclosed by '"'
lines terminated by '\r\n'
ignore 1 lines;
