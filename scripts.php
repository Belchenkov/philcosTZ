<?php

require_once 'db/connect_db.php';

if (isset($_GET['id'])) {
    $id = (integer)htmlspecialchars(trim($_GET['id'], ' '));

    if ($conn) {
        // UPDATE DATA
        $query = "UPDATE `comments` SET `admin_ok`= 1 WHERE `id`=$id";

        if (!mysqli_query($conn, $query)) {
            die(mysqli_error($conn));
        } else {


            header("Location: admin.php?published=Отзыв опубликован!");
        }

    }
}


    if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['city']) && !empty($_POST['age']) && !empty($_POST['message'])) {

        $name = htmlspecialchars(trim($_POST['name'], ' '));
        $surname = htmlspecialchars(trim($_POST['surname'], ' '));
        $city = htmlspecialchars(trim($_POST['city'], ' '));
        $age = htmlspecialchars(trim($_POST['age'], ' '));
        $message = htmlspecialchars(trim($_POST['message'], ''));

        //echo $name ."\n" . $surname . "\n" . $age . "\n" . $message . "\n";
        echo "Ваш отзыв принят! Спасибо!";

        if ($conn) {
            // INSERT DATA
            //$query = "INSERT INTO `comments` (`name`, `surname`, `city`, `age`, `message`) VALUES('$name', '$surname', '$city', '$age', '$message')";

            /*if(!mysqli_query($conn, $query)){
                die(mysqli_error($conn));
            } else {*/

                $admin_message = 'Добавлен новый отзыв от ' . $name . ' ' . $surname . ', который ожидает проверки!';
                mail('u608110@gmail.com', 'Добавлен новый отзыв', $admin_message);

                //header("Location: index.php?success=Ваш%20отзыв%20принят!%20Спасибо!");
            /*}*/
        }
//    }
    else {
        echo "Заполните, пожалуйста, все поля!";

    }
}


