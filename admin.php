<?php
// Верные
$admin = 'admin';
$passTrue = 'филкос';

// От пользователя
$login = htmlspecialchars(trim($_POST['login'], ' '));
$pass = htmlspecialchars(trim($_POST['pass'], ' '));

if (!empty( $_POST['submit']) && $login == $admin && $pass == $passTrue)  {
        require_once 'db/connect_db.php';

        // SELECT QUERY
        $query_all = 'SELECT * FROM `comments` WHERE `admin_ok`=0 ORDER BY `id` DESC';

        $messages_all = mysqli_query($conn, $query_all);

        ?>

        <!doctype html>
        <html class="no-js" lang="ru">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>Dashboard</title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <link rel="apple-touch-icon" href="apple-touch-icon.png">
            <!-- Place favicon.ico in the root directory -->

            <link rel="stylesheet" href="css/normalize.css">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/main.css">
            <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        </head>
        <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">Вам необходимо обновить браузер. Пожалуйста передийте по <a
                href="http://browsehappy.com/">ссылке</a> для обновления.</p>
        <![endif]-->


        <header>
            <div>
                <a href="index.php"><img src="http://filkos.com/templates/beez5/images/logo_2.svg" alt="Филкос"
                                         title="Банк Филкос"></a>

                <div class="container">
                    <a href="/" class="atHome">На главную</a>
                </div>
            </div>


            <div class="container">

                <h1 class="heading">Отзывы ожидающие проверки</h1>

                <div id="messageServer"></div>

            </div>
        </header>

        <main>
            <section id="formComments">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">

                            <?php if (!empty($messages_all)) : ?>
                                <?php while ($row = mysqli_fetch_assoc($messages_all)) : ?>
                                    <ul class="list-group">
                                        <li class="list-group-item green"><?= $row['name']; ?> <?= $row['surname']; ?></li>
                                        <li class="list-group-item">Возраст: <?= $row['age']; ?></li>
                                        <li class="list-group-item">Город: <?= $row['city']; ?></li>
                                        <li class="list-group-item"><?= $row['message']; ?></li>
                                        <li class="list-group-item">
                                            <a href="#" id="<?= $row['id'] ?>" class="btn btn-success">Разместить</a>
                                        </li>
                                    </ul>
                                    <br>
                                    <br>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div><!-- /.col-md-12-->
                    </div>
                </div><!-- /.row-->
        </main><!-- /.container-->
        </section>

        <section id="comment">
            <div class="container">
                <div class="row">
                    <?php if (!empty($messages)) : ?>
                        <?php while ($row = mysqli_fetch_assoc($messages)) : ?>
                            <ul class="list-group">
                                <li class="list-group-item "><?= $row['name']; ?> <?= $row['surname']; ?></li>
                                <li class="list-group-item">Возраст: <?= $row['age']; ?></li>
                                <li class="list-group-item">Город: <?= $row['city']; ?></li>
                                <li class="list-group-item"><?= $row['message']; ?></li>
                            </ul>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div><!-- /. row-->
            </div><!-- /.container-->
        </section>

        <footer>
            <p>&copy; 2017 Отзывы о компании ФИЛКОС. Все права защищены.</p>
        </footer>

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/ajax.js"></script>
        </body>
        </html>

<?php

} else {
    header('Location: login.php?errorLogin=Неверные данные!');
}



