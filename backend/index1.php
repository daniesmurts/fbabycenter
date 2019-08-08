<?php if(session_status() !=PHP_SESSION_ACTIVE) session_start();

//session_start();
if(isset($_POST['login'])) {

    require_once 'assets/includes/connexion.php';

    $username=strip_tags($_POST['username']);
    $password=strip_tags($_POST['password']);

    $username=stripslashes($username);
    $password=stripslashes($password);

    $username=mysqli_real_escape_string($dbc, $_POST['username']);
    $password=mysqli_real_escape_string($dbc, $_POST['password']);



    $result=mysqli_query($dbc, "SELECT * FROM users WHERE username='$username' AND password = '$password' ");
    $row1=mysqli_fetch_array($result);

    if(is_array($row1)) {
        $_SESSION['id']=$row1['id'];
        $_SESSION['username']=$row1['username'];
        $_SESSION['password']=$row1['password'];

        $successMSG="You are logged in.";
        header("location:home.php");
    }

    else {
        $errMSG="Username or Password was not correct!.'<br/> Try again, please! ";
        header("refresh:1 ;index.php");
    }
}
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>

    <div class="container-fluid main-login">
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="login-reg-panel">
                    <!-- red panel -->
                    <div class="login-info-box">
                        <h2>Have access?</h2>
                        <p>Enter your login details</p><label id="label-register" for="log-reg-show">Enter</label><input
                            type="radio" name="active-log-panel" id="log-reg-show" checked="checked">
                    </div>
                    <div class="register-info-box">
                        <h2>FLORENCE BABY CENTRE LTD</h2>
                        <p>Back office</p>
                    </div>
                    <!-- red panel -->
                    <!-- white panel -->
                    <div class="white-panel">
                        <div class="login-show">
                            <div class=""><?php if(isset($errMSG)) {?>
                                <div class="alert alert-danger alert-dismissable" style="margin-top:10px;">
                                    <a href="#" class="close" data-dismiss="alert"
                                        aria-label="close">×</a><strong>Error:</strong><?php echo $errMSG;?>
                                </div>
                                <?php }else if(isset($successMSG)) { ?>
                                <div class="alert alert-success alert-dismissable" style="margin-top:10px;">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <strong><?php echo $successMSG; ?></strong>
                                </div>
                                <?php } ?>
                            </div>
                            <form action="#" method="post" enctype="multipart/form-data">
                                <h2>ENTER</h2>
                                <input type="text" name="username" placeholder="Username">
                                <input type="password" name="password" placeholder="Password">
                                <button type="submit" value="log in" name="login">Log in</button>
                            </form>
                        </div>
                        <div class="register-show">
                            <form action="#" method="post" enctype="multipart/form-data">
                                <h2>Register</h2><input type="text" name="username" placeholder="Ф.И.О"><input
                                    type="text" name="email" placeholder="Электронная почта"><input type="text"
                                    name="phone" placeholder="Телефон "><button type="submit" value="Отправить"
                                    name="register">Send</button>
                            </form>
                        </div>
                    </div>
                    <!-- end white panel -->
                </div>
            </div>
        </div>

    </div>
    <script type="text/javascript">
        $(document).ready(function () {
                $('.login-info-box').fadeOut();
                $('.login-show').addClass('show-log-panel');
            }

        );


        $('.login-reg-panel input[type="radio"]').on('change', function () {
                if ($('#log-login-show').is(':checked')) {
                    $('.register-info-box').fadeOut();
                    $('.login-info-box').fadeIn();

                    $('.white-panel').addClass('right-log');
                    $('.register-show').addClass('show-log-panel');
                    $('.login-show').removeClass('show-log-panel');

                } else if ($('#log-reg-show').is(':checked')) {
                    $('.register-info-box').fadeIn();
                    $('.login-info-box').fadeOut();

                    $('.white-panel').removeClass('right-log');

                    $('.login-show').addClass('show-log-panel');
                    $('.register-show').removeClass('show-log-panel');
                }
            }

        );
    </script>
    <script src='https://code.jquery.com/jquery-3.1.1.slim.min.js'></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js'></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
</body>

</html>