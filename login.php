<?php
//     if(isset($_POST["login"])) {
//         $username = $_POST["username"];
//         $password = $_POST["password"];

//         if($username == 'Wahidbayarutang' && $password == '123') {
//             header('location: admin.php');
//             exit;
//         }elseif ($username === '' && $password == '') {
//             header('location:index.php');
//             exit;
//     }
//     else {
//         // echo "<script>alert('username atau password salah!');</script>";
//     }
// }

if (isset($_POST["login"])) {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // Validasi input kosong
    if (empty($username) || empty($password)) {
        echo "<script>alert('Username dan Password tidak boleh kosong!');</script>";
    } 
    // Login Admin
    elseif ($username === 'Wahidbayarutang' && $password === '123') {
        header('Location: admin.php'); // Arahkan ke admin.php
        exit;
    } 
    // Login User (Default ke index.php)
    else {
        header('Location: index.php'); // Arahkan ke index.php
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style33.css">
    <title>Halaman login bre</title>
</head>
<body>
    <h1>login Nasabah Pinjaman</h1>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Wahid Minjem seratus"><br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="yaha bayar dulu..." ><br><br>
        <button type="submit" name="login" onclick="return confirm('yakin sudah siap dengan bayaran')">Login</button>
    </form> 
</body>
</html>