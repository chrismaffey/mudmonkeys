<?php
$pageTitle = 'Home';
$currentPage = 'home';
require __DIR__ . '/../includes/header.php';
?>
<section class="hero-section text-white">
    <div class="container py-5">
        <div class="row align-items-center min-vh-75 py-lg-5">
            <div class="col-lg-7">
                <span class="badge rounded-pill text-bg-warning mb-3">Out of town running trips</span>
                <h1 class="display-3 fw-bold lh-1 mb-4">Pack the shoes. Chase the next trail.</h1>
                <p class="lead mb-4">Mud monkeys is a running crew built around weekends away, road trips, trail missions, and discovering new places to run.</p>
                <div class="d-flex flex-column flex-sm-row gap-3">
                    <a href="/calendar.php" class="btn btn-warning btn-lg fw-semibold">View upcoming trips</a>
                    <a href="#join" class="btn btn-outline-light btn-lg">How to join</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body p-4">
                    <h2 class="h4">Trips with a plan</h2>
                    <p class="mb-0">We pick the destination, map the routes, sort the key details, and make it easier for runners to say yes to an adventure.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body p-4">
                    <h2 class="h4">New places first</h2>
                    <p class="mb-0">Expect out-of-town trails, back roads, hills, beaches, forests, and the food stops that make the drive home better.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body p-4">
                    <h2 class="h4">Run, travel, repeat</h2>
                    <p class="mb-0">Check the trip calendar, choose a destination, bring the right gear, and be ready for an early departure.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="join" class="container pb-5">
    <div class="p-4 p-lg-5 rounded-4 join-panel">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-2">Join the next mudmonkeys trip.</h2>
                <p class="mb-0">Start with a shorter trip or a social weekend away. Each calendar listing includes the destination, route style, and what you need to know before committing.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a class="btn btn-dark btn-lg" href="/calendar.php">Find a trip</a>
            </div>
        </div>
    </div>
</section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
