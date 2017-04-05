
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Авторизация</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">


    <form class="form-signin" method="post" action="admin.php">
        <h2 class="form-signin-heading text-center">Заполните поля для авторизации</h2>
        <?php if (isset($_GET['errorLogin'])) : ?>
            <p class="alert alert-danger text-center"><?= $_GET['errorLogin']?></p>
        <?php endif; ?>
        <label for="inputLogin" class="sr-only">Login</label>
        <input type="text" name="login" id="inputLogin" class="form-control" placeholder="Login" required autofocus>
        <label for="inputPassword"  class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>

        <input class="btn btn-lg btn-primary btn-block" name="submit" value="Войти" type="submit">
    </form>

</div> <!-- /container -->

</body>
</html>
