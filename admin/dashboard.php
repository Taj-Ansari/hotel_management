<?php
require('inc/essentials.php');
adminLogin();
require('inc/links.php');
session_regenerate_id();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Home</title>

</head>

<body class="bg-light">
    <?php require('inc/header.php')?>
    <div class="container-fluid" id="mainContent">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                
            </div>
        </div>
    </div>  
           
    <?php require('inc/script.php') ?>
</body>

</html>