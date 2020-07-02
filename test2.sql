select player_name,PA,wOBA,BA,SO,HR,ISO
from 
(select 19B.player_name, 19B.PA, 19B.BA,19B.SO, 19B.HR, (19B.2B+2*19B.3B+3*19B.HR)/19B.AB as ISO, (0.69*(19B.BB-19B.IBB)+0.72*19B.HBP+0.89*(19B.H-19B.2B-19B.3B-19B.HR)+1.27*(19B.2B)+1.62*19B.3B+2.1*19B.HR)/(19B.AB+19B.BB-19B.IBB+19B.SF+19B.HBP) as wOBA
from 19MLBBatting as 19B) as tmp
where wOBA>=0.405 and PA>=500
order by wOBA desc
