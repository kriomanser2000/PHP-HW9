<?php
$email = $_GET['email'];
$purchaseHistory = [
    'kuzsasa05@gmail.com' => [
        ['date' => '2024-07-01', 'sessionId' => 'A1'],
        ['date' => '2024-07-15', 'sessionId' => 'A2'],
    ],
    'kuzsos005@gmail.com' => [
        ['date' => '2024-07-05', 'sessionId' => 'B1'],
    ],
];
$history = isset($purchaseHistory[$email]) ? $purchaseHistory[$email] : [];
?>
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
<h1>Purchase History for <?php echo htmlspecialchars($email); ?></h1>
<?php if (empty($history)): ?>
    <p>No purchase history available.</p>
<?php else: ?>
    <ul>
        <?php foreach ($history as $entry): ?>
            <li><?php echo htmlspecialchars($entry['date']); ?> — <a href="cart.php?sessionId=<?php echo htmlspecialchars($entry['sessionId']); ?>"><?php echo htmlspecialchars($entry['sessionId']); ?></a></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
</body>
</html>