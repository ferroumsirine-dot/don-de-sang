<?php
include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $prenom   = mysqli_real_escape_string($conn, $_POST['prenom']);
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $phone    = mysqli_real_escape_string($conn, $_POST['phone']);
    $blood    = mysqli_real_escape_string($conn, $_POST['groupe_sanguin']);
    $wilaya   = mysqli_real_escape_string($conn, $_POST['wilaya']);

    $sql = "INSERT INTO users (username, prenom, email, password, phone, groupe_sanguin, wilaya)
            VALUES ('$username', '$prenom', '$email', '$password', '$phone', '$blood', '$wilaya')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('تم التسجيل بنجاح');
                window.location.href='page1.php';
              </script>";
    } else {
        echo "خطأ: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
