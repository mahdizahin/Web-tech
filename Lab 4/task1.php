 <html lang="en">

<head>
    <title>LOGIN</title>
</head>

<body>
    <form method="post" action="loginCheck.php" enctype="">
        <fieldset>
            <legend>LOGIN</legend>
            User Name: <input type="text" name="username" value="" /> <br>
            Password: <input type="password" name="password" value="" /> <br>
            <hr>
            <input type="checkbox" name="remember_me" id="checkbox">
            <label for="checkbox"> Remember Me</label><br>
            <input type="submit" name="submit" value="Submit" />
            <a href="">Forget Password?</a>
        </fieldset>

    </form>
</body>

</html>
