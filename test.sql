select 19B.player_name, 19B.PA,19B.ops_plus, (0.69*(19B.BB-19B.IBB)+0.72*19B.HBP+0.89*(19B.H-19B.2B-19B.3B-19B.HR)+1.27*(19B.2B)+1.62*19B.3B+2.1*19B.HR)/(19B.AB+19B.BB-19B.IBB+19B.SF+19B.HBP) as wOBA
from 19MLBBatting as 19B,
(select 19G.player_name, count(19G.player_name) as cards
from 19MLBGame as 19G
group by player_name) as N
where 19B.player_name=N.player_name and N.cards=3
order by wOBA desc
