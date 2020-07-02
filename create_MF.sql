create table 19MF(
        player_name varchar(30),
        team    varchar(30),
        year    int,
        G       int,
        GS      int,
        CG      int,
        Inn     int,
        Ch      int,
        PO      int,
        A       int,
        E       int,
        DP      int,
        Fld     float
);

load data local infile './19MLBFielding.csv'
into table 19MF
fields terminated by ','
enclosed by '"'
lines terminated by '\r\n'
ignore 1 lines;
