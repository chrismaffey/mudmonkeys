<?php
declare(strict_types=1);

return [
    'pageTitle' => 'About',
    'pageDescription' => 'Learn about the Mud Monkeys running crew and our trail adventures.',
    'currentPage' => 'about',
    'renderContent' => static function (): void {
        ?>
        <section class="page-header py-5 text-white">
            <div class="container">
                <h1 class="display-5 fw-bold mb-3">About Mud Monkeys</h1>
                <p class="lead mb-0">A running crew for people who would rather take the scenic route.</p>
            </div>
        </section>

        <section class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <div class="about-logo-panel rounded-4 p-4 p-md-5 text-center">
                        <img class="about-logo" src="/assets/nad.png" alt="Nad the Mud Monkeys mascot logo" width="256" height="256">
                    </div>
                </div>
                <div class="col-lg-7">
                    <span class="badge rounded-pill text-bg-warning mb-3">Our crew</span>
                    <h2 class="display-6 fw-bold mb-4">Good trails are better shared.</h2>
                    <p class="lead">Mud Monkeys brings runners together for out-of-town adventures, trail weekends, and memorable days on foot.</p>
                    <p>We choose interesting destinations, plan the important details, and make it easier to get beyond the usual local loop. The focus is simple: explore new places, enjoy the company, and come home with a little more mud on the shoes.</p>
                    <p class="mb-4">Trips vary in distance and difficulty, so check the calendar listing before committing and choose an adventure that suits your experience.</p>
                    <a class="btn btn-dark btn-lg" href="/calendar">Explore upcoming trips</a>
                </div>
            </div>
        </section>
        <?php
    },
];
