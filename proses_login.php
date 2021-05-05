<?php
$user = $_POST['username'];
$pass = $_POST['password'];
if ($user == "user" && $pass == "user") {
    echo "
    <script>
    alert('Berhasil Login');
    document.location.href = 'about.php';
    </script>";
    header("location:about.php");
} else {
    echo "
    <script>
    alert('Gagal Login');
    history.go(-1);
    </script>";
}
