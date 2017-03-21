<?php
    require_once 'db/connect_db.php';

    // SELECT QUERY
    $query_all = 'SELECT * FROM `comments` ORDER BY `id` DESC';
    $query_last = 'SELECT * FROM `comments` ORDER BY `id` DESC LIMIT 3';

    $messages_all = mysqli_query($conn, $query_all);
    $messages_last = mysqli_query($conn, $query_last);

?>



<!doctype html>
<html class="no-js" lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
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
            <p class="browserupgrade">Вам необходимо обновить браузер. Пожалуйста передийте по <a href="http://browsehappy.com/">ссылке</a> для обновления.</p>
        <![endif]-->


        <header>
            <div>
                <a href="index.php"><img src="http://filkos.com/templates/beez5/images/logo_2.svg" alt="Филкос" title="Банк Филкос"></a>
            </div>
            <div class="container">

                <h1 class="heading">Отзывы о компании Филкос</h1>
            </div>
        </header>


        <main>

            <section id="formComments">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">

                            <?php if (!empty($_GET['error_message'])) : ?>
                                <h3 class="alert alert-danger"><?= $_GET['error_message']; ?></h3>
                            <?php endif;?>

                            <a class="showForm green">Оставить отзыв</a>

                            <form id="form" method="post" action="scripts.php">
                                <div class="form-group">
                                    <label for="name">Имя</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Введите Ваше имя ...">
                                </div>
                                <div class="form-group">
                                    <label for="surname">Фамилия</label>
                                    <input type="text" class="form-control" id="surname" name="surname" placeholder="Введите Вашу фамилию ...">
                                </div>
                                <div class="form-group">
                                    <label for="city">Город</label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="Из какого Вы города ...">
                                </div>
                                <div class="form-group">
                                    <label for="age">Возраст</label>
                                    <input type="number" class="form-control" id="age" min="1" max="120" name="age" placeholder="Сколько Вам полных лет?">
                                </div>
                                <div class="form-group">
                                    <label for="message">Ваш отзыв</label>
                                    <textarea class="form-control" id="message" rows="6" name="message" placeholder="Введите отзыв ..."></textarea>
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg">Отправить</button>
                            </form>

                            <?php if (!empty($messages_all)) :?>
                                <?php while($row = mysqli_fetch_assoc($messages_all)) : ?>
                                    <ul class="list-group">
                                        <li class="list-group-item green"><?= $row['name']; ?> <?= $row['surname']; ?></li>
                                        <li class="list-group-item">Возраст: <?= $row['age']; ?></li>
                                        <li class="list-group-item">Город: <?= $row['city']; ?></li>
                                        <li class="list-group-item"><?= $row['message']; ?></li>
                                    </ul>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div><!-- /.col-md-7-->
                        <div class="col-md-4 col-lg-offset-1">
                            <h3 class="last-comments__header">Последние отзывы</h3>
                            <div class="last-comments__box">

                                <?php if (!empty($messages_last)) :?>
                                    <?php while($row = mysqli_fetch_assoc($messages_last)) : ?>
                                        <ul class="list-group">
                                            <li class="list-group-item "><?= $row['name']; ?> <?= $row['surname']; ?></li>
                                            <li class="list-group-item">Возраст: <?= $row['age']; ?></li>
                                            <li class="list-group-item">Город: <?= $row['city']; ?></li>
                                            <li class="list-group-item"><?= $row['message']; ?></li>
                                        </ul>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div><!--/.last-comments-->
                        </div><!-- /.col-md-6-->
                    </div>
                </div><!-- /.row-->
            </main><!-- /.container-->
        </section>

        <section id="comment">
            <div class="container">
                <div class="row">
                <?php if (!empty($messages)) :?>
                    <?php while($row = mysqli_fetch_assoc($messages)) : ?>
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


        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
