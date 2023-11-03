<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>

function login() {

    var username = document.getElementById('username').value;

    var password = document.getElementById('password').value;

    if(username=='admin' && password=='admin') {

        window.open('home.blade.php', '_self');

    } else {

        alert('Invalid credentials. Please try again.');

    }

}

</script>
</head>
<body>
<h1>Login Page</h1>

<form>

    <label for="username">Username:</label><br>

    <input type="text" id="username" name="username"><br>

    <label for="password">Password:</label><br>

    <input type="password" id="password" name="password"><br>

    <input type="button" value="Login" onclick="login()">

</form>
</body>
</html>