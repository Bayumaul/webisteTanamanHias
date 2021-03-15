<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register | <?php echo get_store_name(); ?></title>

    <!-- Icons font CSS-->
    <link href="<?php echo get_theme_uri('custom/auth/register/vendor/mdi-font/css/material-design-iconic-font.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo get_theme_uri('custom/auth/register/vendor/font-awesome-4.7/css/font-awesome.min.css'); ?>" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo get_theme_uri('custom/auth/register/vendor/select2/select2.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo get_theme_uri('custom/auth/register/vendor/datepicker/daterangepicker.css'); ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo get_theme_uri('custom/auth/register/css/main.css'); ?>" rel="stylesheet" media="all">

    <style>
        .input--style-2:hover {
            border-bottom: 1px solid #16c79a;
            color: #16c79a
        }
    </style>
</head>

<body>
<h1>Login ke KIBO GARDEN</h1>
        <div class=" w3l-login-form">
            <h2>Login</h2>
            <?php if ($flash_message) : ?>
            <div class="flash-message">
                <?php echo $flash_message; ?>
            </div>
            <?php endif; ?>

            <?php if ($redirection) : ?>
            <div class="flash-message">
                Silahkan login untuk melanjutkan...
            </div>
            <?php endif; ?>

            <?php echo form_open('auth/login/do_login'); ?>

            <div class=" w3l-form-group">
                <label>Username:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" value="<?php echo set_value('username', $old_username); ?>" class="form-control" placeholder="Username" minlength="4" maxlength="16" required>
                </div>
                <?php echo form_error('username'); ?>
            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <?php echo form_error('password'); ?>
            </div>
            <div class="forgot">
                <?php echo anchor('auth/forget-password', 'Lupa password?'); ?>
                <p><input type="checkbox" name="remember_me" value="1">Ingat saya</p>
            </div>
            <button type="submit">Login</button>
            <?php echo form_close(); ?>
        </div>

        <footer>
            <p class="copyright-agileinfo"> &copy; 2021 <?php echo anchor(base_url(), get_store_name()); ?></p>
        </footer>


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->