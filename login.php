<?php
    session_start();
?>

<!doctypw html>
<html>
    <head>
<meta charset="utf-8">
    <title>BGPS login Panel</title>
    <link rel="stylesheet" href="login.css">
    </head>
    <body>
        
        
        <div class="panel">
        <form action="on.php" method="post">
            <h1>LOGIN PANEL</h1>
            USER NAME: <input type="text" name="userid" placeholder="insert userid here"><br><br>
            PASSWORD : <input type="password" name="password" placeholder="Insert password here"><br><br>
            <button type="submit">LOGIN</button>
            <button type="reset">RESET</button>
        </form>
        </div>
        <?php
            if(isset($_SESSION['id']))
            {
                echo $_SESSION['id'];
            }
        else
        {
            echo "you are not logged in";
        }
        ?>
        <form action="logout.php">
            <button>LOGOUT</button>
        </form>
    </body>
</html>