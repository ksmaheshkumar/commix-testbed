<html>
    <head>
	 <title>Command injection test environment</title>
    </head>
    <body>
        <form action="classic_quote.php" method="POST">
        Enter your name: <input type="text" name="user">
        <input type="submit">
        </form>
    </body>
</html>

<?php
    # Execute command!
    if (isset($_POST["user"])){
        echo exec("echo Hello, '".$_POST["user"]."'!");
    }
?>
