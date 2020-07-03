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
        <?php
		$servername = "localhost";
                $username = "user";
                $password = "user";
                $test = "select player_name from 19CPBLGame where player_id = 2";
                $a = 1;
                $conn = new mysqli($servername, $username, $password,'project');
                if ($conn->connect_error) {
                	die("Connected failed: " . $conn->connect_error);
                }
		echo "<font color=\"blue\">Connect to database successfully </font> <br>";
		echo "<h3><b>選擇的球員1:</b></h3>";
		echo "year: <font color=\"red\"><b>$_POST[year1]</b></font> team: <font color=\"red\"><b>$_POST[team1]</b></font> player name: <font color=\"red\"><b>$_POST[player1]</b></font><br>";
		echo "<h3><b>選擇的球員2:</b></h3>";
		echo "year: <font color=\"red\"><b>$_POST[year2]</b></font> team: <font color=\"red\"><b>$_POST[team1]</b></font> player name: <font color=\"red\"><b>$_POST[player1]</b></font><br>";
		echo "<h2>Result:</h2>";
		echo "<input type=\"button\" value=\"Retry\" onclick=\"location.href='database_project.php'\"><br>";
		//$result1=$conn->query("select player_name from 19CPBLGame where player_id=$_POST[ca]");
                //$result2=$conn->query("select player_name from 19CPBLGame where player_id = $_POST[cb]");
               	//$result3=$conn->query("Select player_name from 19CPBLGame where player_id = $_POST[cc]");
		/*
		$row=$result1->fetch_row();
                echo "The player where id = $_POST[ca] is $row[0]<br>";
                $row=$result2->fetch_row();
                echo "The player where id = $_POST[cb] is $row[0]<br>";
                $row=$result3->fetch_row();
                echo "The player where id = $_POST[cc] is $row[0]<br>";
		 */
		$a11=60;
		$a12=61;
		$a13=62;
		$a14=63;
		$a15=64;
		$a21=65;
		$a22=66;
		$a23=67;
		$a24=68;
		$a25=69;
		$b11=70;
		$b12=65;
		$b13=70;
		$b14=64;
		$b15=62;
		$b21=63;
		$b22=64;
		$b23=68;
		$b24=69;
		$b25=61;
		$c1=$a11+$a12+$a13+$a14+$a15-$b11-$b12-$b13-$b14-$b15;
		$c2=$a21+$a22+$a23+$a24+$a25-$b21-$b22-$b23-$b24-$b25;
		if(c1>c2){
			$d1="win";
			$d2="";
		}
		else if(c1<c2){
			$d1="";
			$d2="win";
		}
		else{
			$d1="draw";
			$d2="draw";
		}
		echo "
		<table style=\"border:3px #000000 solid;\" rules=\"all\" cellpadding=6>
　		<tr>
　			<td><b>player name</b></td>
　			<td><b>year</b></td>
			<td><b>team</b></td>
			<td><b>遊戲數據</b></td>
			<td><b>我們估計的數據</b></td>
			<td><b>偏袒指數</b></td>
			<td><b>偏袒程度</b></td>
　		</tr>
		<tr>
			<td>$_POST[player1]</td>
			<td>$_POST[year1]</td>
			<td>$_POST[team1]</td>
			<td>
				力量 <font color=red>$a11</font><br>
				打擊 <font color=red>$a12</font><br>
				速度 <font color=red>$a13</font><br>
				傳球 <font color=red>$a14</font><br>
				守備 <font color=red>$a15</font>	
			</td>
			<td>
				力量 <font color=red>$b11</font><br>
                                打擊 <font color=red>$b12</font><br>
                                速度 <font color=red>$b13</font><br>
                                傳球 <font color=red>$b14</font><br>
                                守備 <font color=red>$b15</font> 	
			</td>
			<td align=\"center\"> $c1 </td>
			<td align=\"center\"> $d1 </td>
		</tr>
		<tr>
			<td>$_POST[player2]</td>
			<td>$_POST[year2]</td>
			<td>$_POST[team2]</td>
			<td>
				力量 <font color=red>$a21</font><br>
                                打擊 <font color=red>$a22</font><br>
                                速度 <font color=red>$a23</font><br>
                                傳球 <font color=red>$a24</font><br>
                                守備 <font color=red>$a25</font> 
			</td>
			<td>
				力量 <font color=red>$b21</font><br>
                                打擊 <font color=red>$b22</font><br>
                                速度 <font color=red>$b23</font><br>
				傳球 <font color=red>$b24</font><br>
                                守備 <font color=red>$b25</font> 
			</td>
			<td align=\"center\"> $c2 </td>
			<td align=\"center\"> $d2 </td>
		</tr>
		</table>";
	?>
  	<footer>
  	      <p> 2020 nctu database term project -- team 18</p>
    	</footer>
    </BODY>
</HTML>
