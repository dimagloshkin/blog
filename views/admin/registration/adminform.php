<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Login V10</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/template/adminreg/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/template/adminreg/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/template/adminreg/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/template/adminreg/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/template/adminreg/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/template/adminreg/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/template/adminreg/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/template/adminreg/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/template/adminreg/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/template/adminreg/css/util.css">
    <link rel="stylesheet" type="text/css" href="/template/adminreg/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-50 p-b-90">

            <form class="login100-form validate-form flex-sb flex-w" method="post">
					<span class="login100-form-title p-b-51">
						Вход
					</span>
                <span class="login100-form-title p-b-51">
<?php
if (!empty($error)){
   echo $error[0];
}
?>
</span>
                <div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
                    <input class="input100" type="text" name="admin_name" placeholder="Логин">
                    <span class="focus-input100"></span>
                </div>


                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                    <input class="input100" type="password" name="admin_pass" placeholder="Пароль">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn m-t-17">
                    <button class="login100-form-btn">
                        Авторизация
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="/template/adminreg/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/template/adminreg/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/template/adminreg/vendor/bootstrap/js/popper.js"></script>
<script src="/template/adminreg/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/template/adminreg/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/template/adminreg/vendor/daterangepicker/moment.min.js"></script>
<script src="/template/adminreg/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/template/adminreg/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="/template/adminreg/js/main.js"></script>

</body>
</html>