<HTML>
        <HEAD>
                <meta charset="utf-8">
                <title> database_project </title>               
        </HEAD>
        <BODY>
                <FORM method=post action=t1.php>
                <p>Input the player id for query: <INPUT type=text name=ca> </p>
                <p>Input the player id for query: <INPUT type=text name=cb> </p>
                <p>Input the player id for query: <INPUT type=text name=cc> </p>
                <p><INPUT type=submit value="submit">
                <INPUT type=reset value="clear"></FORM>
                <!--
                <?php
                        $servername = "localhost";
                        $username = "user";
                        $password = "user";
                        $test = "select player_name from 19CPBLGame where player_id = 2";
                        $a = 1;
                        $conn = new mysqli($servername, $username, $password,'test');
                        $result1=$conn->query("select player_name from 19CPBLGame where player_id=1");
                        $result2=$conn->query("select player_name from 19CPBLGame where player_id = $a");
                        $row=$result1->fetch_row();
                        echo "$row[0]<br>";
                        $row=$result2->fetch_row();
                        echo "$row[0]<br>";
                        if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                        }
                        echo "Connected successfully";
                ?> 
                -->
        </BODY>
<HTML>
