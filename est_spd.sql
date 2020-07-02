select player_name, lv, spd_score, 82-(6-spd_score)/0.25 as est_spd, speed as game_spd
from
(
select 19MB.player_name, lv, (20*((SB+3)/(SB+CS+7)-0.4)+(1/0.07)*SQRT((SB+CS)/(H-2B-3B-HR+BB+HBP))+625*(3B/(AB-HR-SO))+25*((R-HR)/(H+BB+HBP-HR)-0.1)+(1/0.007)*(0.063-GDP/(AB-HR-SO)))/5+SB/100 as spd_score, speed
from 19MB, 19MG
where 19MB.player_name=19MG.player_name and lv='N'
) as spd
order by spd_score desc
