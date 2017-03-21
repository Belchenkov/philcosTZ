<?php

require_once 'db/connect_db.php';

if (isset($_POST['submit'])) {
    if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['city']) && !empty($_POST['age']) && !empty($_POST['message'])) {

        $name = htmlspecialchars(trim($_POST['name'], ' '));
        $surname = htmlspecialchars(trim($_POST['surname'], ' '));
        $city = htmlspecialchars(trim($_POST['city'], ' '));
        $age = htmlspecialchars(trim($_POST['age'], ' '));
        $message = htmlspecialchars(trim($_POST['message'], ''));

        //echo $name ."\n" . $surname . "\n" . $age . "\n" . $message . "\n";

        if ($conn) {
            // INSERT DATA
            $query = "INSERT INTO `comments` (`name`, `surname`, `city`, `age`, `message`) VALUES('$name', '$surname', '$city', '$age', '$message')";

            if(!mysqli_query($conn, $query)){
                die(mysqli_error($conn));
            } else {
                //header("Location: index.php?success=Message%20Added");
                echo "Добавлен новый отзыв и ожидает проверки модератора";
            }
        }
    }
    else {
        header("Location: index.php?error_message=Заполните пожалуйста все поля");

    }
}