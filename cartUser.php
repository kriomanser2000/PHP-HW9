<?php
$sessionId = $_GET['sessionId'];
$cartItems = [
    'A1' => ['Product 1', 'Product 2'],
    'A2' => ['Product 3'],
    'B1' => ['Product 4', 'Product 5'],
];
$items = isset($cartItems[$sessionId]) ? $cartItems[$sessionId] : [];
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
<h1>Products in Session <?php echo htmlspecialchars($sessionId); ?></h1>
<?php if (empty($items)): ?>
    <p>No items found in this session.</p>
<?php else: ?>
    <ul>
        <?php foreach ($items as $item): ?>
            <li><?php echo htmlspecialchars($item); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
</body>
</html>