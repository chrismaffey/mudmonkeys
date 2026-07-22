<?php
$pageTitle = $page['pageTitle'] ?? 'Mudmonkeys';
$pageDescription = $page['pageDescription'] ?? 'Mudmonkeys running group website.';
$currentPage = $page['currentPage'] ?? '';
$renderContent = $page['renderContent'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?> | Mudmonkeys</title>
    <link rel="icon" type="image/png" sizes="64x64" href="/assets/favicon.png">
    <link rel="stylesheet" href="/assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/site.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="/" aria-label="Mud Monkeys home">
            <img class="navbar-logo" src="/assets/nad.png" alt="" width="52" height="52">
            <span>mud monkeys</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'home' ? 'active' : '' ?>" <?= $currentPage === 'home' ? 'aria-current="page"' : '' ?> href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'calendar' ? 'active' : '' ?>" <?= $currentPage === 'calendar' ? 'aria-current="page"' : '' ?> href="/calendar">Calendar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'about' ? 'active' : '' ?>" <?= $currentPage === 'about' ? 'aria-current="page"' : '' ?> href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'join' ? 'active' : '' ?>" <?= $currentPage === 'join' ? 'aria-current="page"' : '' ?> href="/join">Join</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'contact' ? 'active' : '' ?>" <?= $currentPage === 'contact' ? 'aria-current="page"' : '' ?> href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main>
    <?php $renderContent(); ?>
</main>
<footer class="site-footer py-4 mt-5">
    <div class="container d-flex flex-column flex-md-row justify-content-between gap-2">
        <span>&copy; <?= date('Y') ?> Mud Monkeys Inc</span>
        <span>Out of town running trips</span>
    </div>
</footer>
<script src="/assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
