<?php

require_once 'db/connect_db.php';

// Public Comments from Admin
if (isset($_GET['publicId'])) {
    $publicId = (integer)htmlspecialchars(trim($_GET['publicId'], ' '));

    if ($conn) {
        // UPDATE DATA
        $query = "UPDATE `comments` SET `admin_ok`= 1 WHERE `id`=$publicId";

        if (!mysqli_query($conn, $query)) {
            die(mysqli_error($conn));
        } else {
            echo "Отзыв опубликован!";
        }
    }
}

// Delete Comments from Admin
if (isset($_GET['deleteId'])) {
    $deleteId = (integer)htmlspecialchars(trim($_GET['deleteId'], ' '));

    if ($conn) {
        // DELETE DATA
        $query = "DELETE FROM `comments` WHERE  `id`=$deleteId";

        if (!mysqli_query($conn, $query)) {
            die(mysqli_error($conn));
        } else {
            echo "Отзыв удален!";
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
        $query = "INSERT INTO `comments` (`name`, `surname`, `city`, `age`, `message`) VALUES('$name', '$surname', '$city', '$age', '$message')";

        if(!mysqli_query($conn, $query)){
            die(mysqli_error($conn));
        } else {
            $admin_message = 'Добавлен новый отзыв от ' . $name . ' ' . $surname . ', который ожидает проверки!';
            mail('', 'Добавлен новый отзыв', $admin_message);
        }
    }
}


