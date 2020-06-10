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
        <!--
        <p><?php echo $_POST[ca] ;?></p>
        <p><?php echo $_POST[cb] ;?></p>
        <p><?php echo $_POST[cc] ;?></p>
        -->
                <?php
						echo "$_POST[year1]<br>";
						echo "$_POST[year2]<br>";
                        $servername = "localhost";
                        $username = "user";
                        $password = "user";
                        $test = "select player_name from 19CPBLGame where player_id = 2";
                        $a = 1;
                        $conn = new mysqli($servername, $username, $password,'project');
                        if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                        }
                        echo "Connected database successfully <br>";
                        $result1=$conn->query("select player_name from 19CPBLGame where player_id=$_POST[ca]");
                        $result2=$conn->query("select player_name from 19CPBLGame where player_id = $_POST[cb]");
                        $result3=$conn->query("Select player_name from 19CPBLGame where player_id = $_POST[cc]");
                        $row=$result1->fetch_row();
                        echo "The player where id = $_POST[ca] is $row[0]<br>";
                        $row=$result2->fetch_row();
                        echo "The player where id = $_POST[cb] is $row[0]<br>";
                        $row=$result3->fetch_row();
                        echo "The player where id = $_POST[cc] is $row[0]<br>";
                ?>

    </BODY>
	<footer>
        <p> 2020 nctu database term project -- team 18</p>
    </footer>
<HTML>
