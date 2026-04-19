<?php
$route = $_GET['route'] ?? basename($_SERVER['REQUEST_URI'] ?? 'home');
$route = trim($route, '/');
$route = preg_replace('/\.php$/', '', $route);
$route = $route ?: 'home';

$routes = [
    'home' => 'pages/home.php',
    'about' => 'pages/about.php',
    'services' => 'pages/services.php',
    'portfolio' => 'pages/portfolio.php',
    'contact' => 'pages/contact.php',
    'skills' => 'pages/skills.php',
];

$page = isset($routes[$route]) ? $routes[$route] : 'pages/home.php';
$pageTitle = ucfirst($route);
$currentRoute = $route;

function isActive($route, $current) {
    return $route === $current ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?> | Rohan Mandal</title>
    <meta name="description" content="Personal portfolio website of Rohan Mandal - BCA Student, Web Developer, and Creative Designer">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>💻</text></svg>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php include 'inc/header.php'; ?>

    <main>
        <?php include $page; ?>
    </main>

    <?php include 'inc/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>