<HTML>
        <HEAD>
                <meta charset="utf-i">
                <title> database_project </title>               
        </HEAD>
        <BODY>
                <FORM method=post action=t1.php>
                <p> <INPUT type=text name=ca> </p>
                <p> <INPUT type=text name=cb> </p>
                <p> <INPUT type=text name=cc> </p>
                <p><INPUT type=submit value="submit">
                <INPUT type=reset value="clear"></FORM>
                 <?php
                        $servername = "localhost";
                        $username = "user";
                        $password = "user";

                        $conn = new mysqli($servername, $username, $password,'test');
                        $result=$conn->query('select player_name from 19CPBLGame where player_id=1');
                        $row=$result->fetch_row();
                        echo "$row[0]";
                        if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                        }
                        echo "Connected successfully";
                ?>
        </BODY>
<HTML>
