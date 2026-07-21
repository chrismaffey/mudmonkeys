<?php
declare(strict_types=1);

return [
    'pageTitle' => 'Page not found',
    'pageDescription' => 'The requested Mud Monkeys page could not be found.',
    'currentPage' => '',
    'renderContent' => static function (): void {
        ?>
        <section class="page-header py-5 text-white">
            <div class="container py-lg-4 text-center">
                <p class="text-uppercase fw-bold mb-2">404</p>
                <h1 class="display-5 fw-bold mb-3">This trail goes nowhere.</h1>
                <p class="lead mb-4">The page you requested could not be found.</p>
                <a class="btn btn-warning btn-lg fw-semibold" href="/">Back to the trailhead</a>
            </div>
        </section>
        <?php
    },
];
