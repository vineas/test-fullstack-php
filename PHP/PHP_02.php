<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <script>
        function reverseString(str) {
            let reversed = "";
            for (let i = str.length - 1; i >= 0; i--) {
                reversed += str[i];
            }
            return reversed;    
        }

        function validateForm() {
            let username = document.forms["loginForm"]["username"].value;
            let password = document.forms["loginForm"]["password"].value;
            let reversedUsername = reverseString(username);

            if (password === reversedUsername) {
                alert("Login berhasil");
                return true;
            } else {
                alert("Login gagal");
                return false;
            }
        }
    </script>
</head>
<body>
    <h2>Login Form</h2>
    <form name="loginForm" onsubmit="return validateForm()">
        Username: <input type="text" name="username" required>
        <br><br>
        Password: <input type="password" name="password" required>
        <br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
