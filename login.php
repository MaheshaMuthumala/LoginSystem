
/**
 * Created by PhpStorm.
 * User: Maheshi
 * Date: 4/19/2019
 * Time: 5:40 PM
 */
<html>
    <head>
        <titile>Login</titile>
        <!-- Style tag-->
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div id="frm">
            <form action="process.php" method="post">
                <p>
                    <label>User name:</label>
                    <input type="text" id="user" name="user">
                </p>
                <p>
                    <label>Password:</label>
                    <input type="password" id="pass" name="pass">
                </p>
                <p>
                    <input type="submit" id="btn" value="Login">
                </p>
            </form>
        </div>
    </body>
</html>
