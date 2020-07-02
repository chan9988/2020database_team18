select player_name,team,year,G,PA,AB,R,H,2B,3B,HR,RBI,SB,CS,BB,SO,BA,OBP,SLG,(OBP+SLG) as OPS,TB,GDP,HBP,SH,SF,IBB
from(



select player_name,team,year,G,PA,AB,R,H,2B,3B,HR,RBI,SB,CS,BB,SO,(H/AB) as BA,((H+BB+HBP)/(AB+BB+HBP+SF)) as OBP,(((H-2B-3B-HR)+2*2B+3*3B+4*HR)/AB) as SLG,((H-2B-3B-HR)+2*2B+3*3B+4*HR) as TB,GDP,HBP,SH,SF,IBB
from(

select player_name,min(team) as team,min(year) as year,sum(G) as G,sum(PA) as PA,sum(AB) as AB,sum(R) as R,sum(H) as H,sum(2B) as 2B,sum(3B) as 3B,sum(HR) as HR,sum(RBI) as RBI,sum(SB) as SB,sum(CS) as CS,sum(BB) as BB,sum(SO) as SO,sum(GDP) as GDP,sum(HBP) as HBP,sum(SH) as SH,sum(SF) as SF,sum(IBB) as IBB 
from 19MB


group by player_name

) as t

) as t

order by team
