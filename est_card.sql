select player_name, est_lv, floor(est_pow) as pow, floor(est_cont) as contact, floor(est_spd) as spd
from(
select player_name, est_lv,
case
when est_lv='A' then 84-(0.3-ISO)/0.01
when est_lv='B' then 77-(0.25-ISO)/0.01
when est_lv='C' then 73-(0.2-ISO)/0.01
else 'NULL'
end as est_pow,
case
when est_lv='A' and BB=0 then 83-(0.29-BA)/0.01-2
when est_lv='A' then 83-(0.29-BA)/0.01-SO/BB
when est_lv='B' and BB=0 then 76-(0.28-BA)/0.01-2	
when est_lv='B' then 76-(0.28-BA)/0.01-SO/BB
when est_lv='C' and BB=0 then 72-(0.27-BA)/0.01-2
when est_lv='C' then 72-(0.27-BA)/0.01-SO/BB
else 'NULL'
end as est_cont,
case
when est_lv='NO CARD' then 'NULL'
when (82-(6-spd_score)/0.25)>89 then 89
when (82-(6-spd_score)/0.25)<65 then 64
else 82-(6-spd_score)/0.25
end as est_spd
from
(select player_name, team, PA, BA, BB, SO, ISO, spd_score,
case
when wOBA>=0.42 and PA>=500 then 'A'
when wOBA>=0.35 and PA>=300 then 'B'
when PA>=50 then 'C'
else 'NO CARD'
end as est_lv
from
(
select player_name, team, PA, BA, BB, SO, (0.69*(BB-IBB)+0.72*HBP+0.89*(H-2B-3B-HR)+1.27*2B+1.62*3B+2.1*HR)/(AB+BB-IBB+SF+HBP) as wOBA, (2B+2*3B+3*HR)/AB as ISO, (20*((SB+3)/(SB+CS+7)-0.4)+(1/0.07)*SQRT((SB+CS)/(H-2B-3B-HR+BB+HBP))+625*(3B/(AB-HR-SO))+25*((R-HR)/(H+BB+HBP-HR)-0.1)+(1/0.007)*(0.063-GDP/(AB-HR-SO)))/5+SB/100 as spd_score
from 19MB
) as tmp
) as lv
) as card
where est_lv != 'NO CARD'
order by est_lv asc
