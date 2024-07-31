<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Users List</h1>
<?php
include 'classUser.php';
$users = [
    new User('Sasa', 'kuzsasa05@gmail.com'),
    new User('Soso', 'kuzsos005@gmail.com'),
    new User('AAR', 'ar11@gmail.com'),
    new User('sasdad', 'dsf@gmail.com'),
    new User('sasasasa', 'sasasasa05@gmail.com')
];
foreach ($users as $user)
{
    echo "<p><a href='session.php?email={$user->getEmail()}'>{$user->getUser()}</a></p>";
}
?>
</body>
</html>