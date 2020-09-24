<?php 
    session_start();
    include('server.php');

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    
<style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            background-image: url(111.png);
            background-size: cover;
            background-position: center;
            box-sizing: border-box;
            font-family: sans-serif;
            }
        .menu-bar{
            background:#afafaf;
            text-align: left;
        }
        .menu-bar ul{
            display: inline-flex;
            list-style:none;
            color:#fff;
        }
        .menu-bar ul li{
            width: 120px;
            margin: 5px;
            padding: 10px;
        }
        .menu-bar ul li a{
            text-decoration:none;
            color:#fff;
        }
       /* .active, .menu-bar ul li a{
            background: #2bab0d;
            border-radius: 3px;
        }*/
        li{
            background: #5f9ea0;
            border-radius: 3px;
        }
        .sub-menu-1{
            display: none;
        }
        .menu-bar ul li:hover .sub-menu-1{
            display: block;
            position: absolute;
            background:rgb(0,100,0);
            margin-top: 15px;
            margin-left: -15px;
        }
        .menu-bar ul li:hover .sub-menu-1 ul{
            display: block;
            margin: 10px;
        }
        .menu-bar ul li:hover .sub-menu-1 ul li{
            width: 150px;
            padding: 10px;
            border-bottom: 1px solid #fff;
            border-radius: 3px;
            text-align: left;
        }
        .menu-bar ul li:hover .sub-menu-1 ul li:last-child{
            border-bottom: none;
        }
        .menu-bar ul li:hover .sub-menu-1 ul li a:hover{
            color: #b2ff00;
        }
        .sub-menu-2{
            display: none;
        }
        .hover-me:hover .sub-menu-2{
            position: absolute;
            display: block;
            margin-top: -45px;
            margin-left: 140px;
            background: rgb(0,100,0);
        }
        .hover-me-2:hover .sub-menu-2{
            position: absolute;
            display: block;
            margin-top: -185px;
            margin-left: 140px;
            background: rgb(0,100,0);
        }
        .homecontent p{
            text-align: right;
            margin: 10px;
        }


    </style>
</head>
<body>
<div class="menu-bar">
        <ul>
            <li class="active"><a href="#">Home</a> </li>
            <li class="active"><a href="#">PHPinfo</a></li>
            <li class="active"><a href="#">Pyramid</a></li>
            <li class="active"><a href="#">iframe</a></li>           
        </li>
        </ul>
</div>
    <div class="homecontent">
        <!--  notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
    
        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            <div class="status">
                <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                <p><a href="index.php?logout='1'" style="color: red;">ออกจากระบบ</a></p></div>
        <?php endif ?>
    </div>


    <div class="homecontent" style = "margin-top:10px;">
    <div class="header">
        <h2>แก้ไขข้อมูล</h2>
    </div>

    <form action="register_db.php" method="post">
        <?php include('errors.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <label for="status">Status</label>
            <input type="text" name="status">
        </div>
        <div class="input-group" style = "padding:5px;">
            <button type="submit" name="insert_u" class="btn">เพิ่ม</button>
            <button type="submit" name="delete_u" class="btn">ลบ</button>
            <button type="submit" name="config_u" class="btn">แก้ไข</button>
            <button type="submit" name="cancel" class="btn">ยกเลิก</button>
        </div>
        
    </form>
    </div>
</body>
</html>