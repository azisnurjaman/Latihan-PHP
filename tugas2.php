<html>
<head>
    <title>Login</title>
</head>
<body bgcolor="aqua">
    <h1>Login</h1>
    <form action="" method="POST" NAME="Login">
    <table border="0">
        <tr>
            <th>
            </th>
            <th>
            </th>
        </tr>
        <tr>
            <td>
            Email
            </td>
            <td>
            <input type="text" name="Email">
            </td>
        </tr>
        <tr>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td>
            Password
            </td>
            <td>
            <input type="password" name="Password">
            </td>
        </tr>
        <tr>
            <th></th>
        </tr>
        <tr>
            <td><input type="submit" name="Login" value="Login"></td>
        </tr>
    </table>
    </form>
</body>
</html>

<?php
if (isset($_POST['Login'])) {
    $usser = $_POST['Email'];
    $pass = $_POST ['Password'];
    if ($usser == "azisnurjaman03@gmail.com" && $pass == "987654321") {
        echo "Login Berhasil";
    } else {
        echo "Login Gagal";
    }
}