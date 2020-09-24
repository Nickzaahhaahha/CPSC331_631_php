<?php  
    session_start();
    include('server.php');
    
    $errors = array();

    if (isset($_POST['insert_u'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $status = mysqli_real_escape_string($conn, $_POST['status'])
        $password = md5($password_1);
            $sql = "INSERT INTO user (username, email, password, status) VALUES ('$username', '$email', '$password', '$status')";
            mysqli_query($conn, $sql);
    }

    if (isset($_POST['delete_u'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $status = mysqli_real_escape_string($conn, $_POST['status'])

        $sql = "DELETE * FROM user WHERE username = '$username'";
        mysqli_query($conn, $sql);
    }

    if (isset($_POST['config_u'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $status = mysqli_real_escape_string($conn, $_POST['status'])
        $password = md5($password_1);

        $sql = "UPDATE user  set (username, email, password, status) WHERE ('$username', '$email', '$password', '$status')";
        mysqli_query($conn, $sql);

    }

?>