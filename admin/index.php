<?php
require('inc/db_config.php');
require('inc/essentials.php');

session_start();
    if(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true){
    redirect('dashboard.php');
    }
?>
<!DOCTYPE html>
<html lang=>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <?php require('inc/links.php') ?>
    <style>
        .login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 420px;
        }
    </style>
</head>

<body class="bg-light">
    <div class="login-form text-center bg-white rounded overflow-hidden shadow">
        <form method="post" action="">
            <h4 class="text-center bg-dark text-white p-3">ADMIN LOGIN PANEL</h4>
            <div class="px-4 py-3">
                <div class="mb-3">
                    <input type="text" required name="admin_name" class="form-control shadow-none text-center"
                        placeholder="Admin Name">
                </div>
                <div class="mb-3">
                    <input type="password" required name="admin_pass" class="form-control shadow-none text-center"
                        placeholder="Password">
                </div>
                <button type="submit" name="login"
                    class="btn text-white custom-bg shadow-none text-center">LOGIN</button>
            </div>
        </form>
    </div>
</body>

<?php

if (isset($_POST['login'])) {

    $frm_data = filteration($_POST);

    $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
    $values = [$frm_data['admin_name'], $frm_data['admin_pass']];
    $res = select($query, $values, "ss");
    if ($res->num_rows == 1) {
        echo alert('success', 'Login Successful');
        $row = mysqli_fetch_assoc($res);
        $_SESSION['adminLogin']=true;
        $_SESSION['adminId']= $row['sr_no'];
        redirect('dashboard.php');
    } else {
        echo alert('error', 'Login Failed - Invalid Credentials!');
    }
}

?>

<?php require('inc/script.php') ?>

</html>