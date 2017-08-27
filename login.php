<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="controller.php" method="post">
            <fieldset>
                <legend>Login Information</legend>
                <label for="username">Username:</label>
                <input type="text" id = "username" name="username" />
                
                <label for="password">Password:</label>
                <input type="password" id = "password" name="password" />
                
                <input type="submit" name="cmd" value="login" />
            </fieldset>
        </form>
    </body>
</html>