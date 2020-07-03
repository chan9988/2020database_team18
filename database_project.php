<HTML>
    <HEAD>
        <meta charset="utf-8">
        <title> database_project </title>
		<style>
            body {background-color:#FFFFDE;}
            footer {color:white;background:black;text-align:center}
            footer {position:fixed; bottom:0px; left:0px; width:100%}
        </style>
    </HEAD>
	<BODY>
		<h3>說明:</h3>
		<p>本網頁可讓使用者選擇兩位球員，我們會分析這兩位球員在BBO這款遊戲中的數據表現，及真實的數據表現來分析這兩位球員。並同時會比較遊戲方比較偏袒哪位球員。</p><br>
		<FORM method=post action=t1.php>
		<br>
		<p>Input player 1 information:</p>
		<p> 	year:
			<select name="year1">
				<option></option>
				<option> 2019 </option>
				<option> 2018 </option>
			</select>
		    	team:
			<select name="team1">
				<option></option>
				<option>Lamigo</option>
                		<option>中信兄弟</option>
                		<option>統一獅</option>
				<option>富邦悍將</option>
				<option>Arizona Diamondbacks</option>
				<option>Atlanta Braves</option>
				<option>Baltimore Orioles</option>
				<option>Boston Red Sox</option>
				<option>Chicago Cubs</option>
				<option>Chicago White Sox</option>
				<option>Cincinnati Reds</option>
				<option>Cleveland Indians</option>
				<option>Colorado Rockies</option>
				<option>Detroit Tigers</option>
				<option>Houston Astros</option>
				<option>Kansas City</option>
				<option>Los Angeles Angels</option>
				<option>Los Angeles Dodgers</option>
				<option>Miami Marlins</option>
				<option>Milwaukee Brewers</option>
				<option>Minnesota Twins</option>
				<option>New York Mets</option>
				<option>New York Yankees</option>
				<option>Oakland Athletics</option>
				<option>Philadelphia Phillies</option>
				<option>Pittsburgh Pirates</option>
				<option>San Diego Padres</option>
				<option>San Francisco Giants</option>
				<option>Seattle Mariners</option>
				<option>St. Louis Cardinals</option>
				<option>Tampa Bay Rays</option>
				<option>Texas Rangers</option>
				<option>Toronto Blue Jays</option>
				<option>Washington Nationals</option>
			</select>
			player_name:
			<INPUT type=text name="player1">
		</p>
		<p>Input player 2 information:</p>
		<p> 	year:
			<select name="year2">
				<option></option>
				<option> 2019 </option>
				<option> 2018 </option>
			</select>
		    	team:
			<select name="team2">
				<option></option>
				<option>Lamigo</option>
				<option>中信兄弟</option>
				<option>統一獅</option>
				<option>富邦悍將</option>
				<option>Arizona Diamondbacks</option>
				<option>Atlanta Braves</option>
				<option>Baltimore Orioles</option>
				<option>Boston Red Sox</option>
				<option>Chicago Cubs</option>
				<option>Chicago White Sox</option>
				<option>Cincinnati Reds</option>
				<option>Cleveland Indians</option>
				<option>Colorado Rockies</option>
				<option>Detroit Tigers</option>
				<option>Houston Astros</option>
				<option>Kansas City</option>
				<option>Los Angeles Angels</option>
				<option>Los Angeles Dodgers</option>
				<option>Miami Marlins</option>
				<option>Milwaukee Brewers</option>
				<option>Minnesota Twins</option>
				<option>New York Mets</option>
				<option>New York Yankees</option>
				<option>Oakland Athletics</option>
				<option>Philadelphia Phillies</option>
				<option>Pittsburgh Pirates</option>
				<option>San Diego Padres</option>
				<option>San Francisco Giants</option>
				<option>Seattle Mariners</option>
				<option>St. Louis Cardinals</option>
				<option>Tampa Bay Rays</option>
				<option>Texas Rangers</option>
				<option>Toronto Blue Jays</option>
				<option>Washington Nationals</option>
			</select>
			player_name:
			<INPUT type=text name="player2">
		</p>
		<p><INPUT type=submit value="submit">
		<INPUT type=reset value="clear"></p></FORM>
		<footer>
		<p> 2020 nctu database term project -- team 18</p>
		</footer>
    </BODY>
</HTML>
