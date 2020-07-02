select player_name, team, PA, wOBA, 
case
	when wOBA>=0.42 and PA>=500 then 'A'
	when wOBA>=0.35 and PA>=300 then 'B'
	when PA>=50 then 'C'
	else 'NO CARD'
end as est_lv
from
(
select player_name, team, PA, (0.69*(BB-IBB)+0.72*HBP+0.89*(H-2B-3B-HR)+1.27*2B+1.62*3B+2.1*HR)/(AB+BB-IBB+SF+HBP) as wOBA
from 19MB
order by wOBA
) as tmp
order by est_lv asc
