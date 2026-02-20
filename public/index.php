<?php

require_once(dirname(__DIR__) . '/vendor/autoload.php');

$router = new Core\Router();
$router->dispatch($_SERVER['REQUEST_URI']);

exit;

// use App\Models\TeacherInfo;
// use App\Models\StudentInfo;

// $teacherInfo = new TeacherInfo('Michael', 'Vogel');
// $studentInfo = new StudentInfo('Albert', 'Dupont', 22);

// $userInfo = $studentInfo;

// $firstname = $userInfo->getFirstname();
// $lastname = $userInfo->getLastname();
// $fullname = $userInfo->getFullName();
// $login = $userInfo->getLogin();

// 
?>

<!-- // <!DOCTYPE html>
// <html lang="en">

// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
// </head>

// <body>
//     <span>Bonjour <?= $firstname ?> <?= $lastname ?></span>
//     <br>
//     <span>Hi <?= $fullname ?> <?= $login ?></span>
// </body>

// </html> -->