<?php  
    session_start();
    include('server.php');
    
    $errors = array();

    if (isset($_POST['insert_u'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $status = mysqli_real_escape_string($conn, $_POST['status']);

        $password = md5($password);
            $sql = "INSERT INTO user (username, email, password, status) VALUES ('$username', '$email', '$password', '$status')";
            mysqli_query($conn, $sql);
    }

    else if (isset($_POST['delete_u'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $sql = "DELETE FROM user WHERE username = '$username'";
        mysqli_query($conn, $sql);
    }

    else if (isset($_POST['config_u'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $status = mysqli_real_escape_string($conn, $_POST['status']);
        $password = md5($password);

        $sql = "UPDATE user  SET email = '$email', password = '$password', status = '$status' WHERE username = '$username'";
        mysqli_query($conn, $sql);

    }
    header("location: admin.php");
?>